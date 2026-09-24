<?php
declare(strict_types=1);

const VALDR_SOURCE_URL = 'https://github.com/Sheff1981/valdr-core';
const VALDR_SITE_SOURCE_URL = 'https://github.com/Sheff1981/valdr-site';
const VALDR_CORE_BRANCH_URL = 'https://github.com/Sheff1981/valdr-core/tree/valdr-v0.2';

function h(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function site_path(string $path = '/'): string {
    $clean = '/' . ltrim($path, '/');
    if ($clean !== '/' && str_ends_with($clean, '/')) {
        $clean = rtrim($clean, '/');
    }
    return $clean;
}

function current_language(): string {
    $allowed = ['en', 'ru'];
    $lang = $_GET['lang'] ?? ($_COOKIE['valdr_lang'] ?? 'en');
    if (!is_string($lang) || !in_array($lang, $allowed, true)) {
        $lang = 'en';
    }
    if (isset($_GET['lang'])) {
        setcookie('valdr_lang', $lang, [
            'expires' => time() + 31536000,
            'path' => '/',
            'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'),
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
    }
    return $lang;
}

function route_url(string $path, string $lang): string {
    $path = site_path($path);
    return $path . ($lang === 'ru' ? '?lang=ru' : '');
}

function canonical_url(string $path): string {
    $configured = getenv('VALDR_SITE_URL');
    if (is_string($configured) && preg_match('~^https?://[A-Za-z0-9.-]+(?::\d+)?(?:/.*)?$~', $configured)) {
        $base = rtrim($configured, '/');
    } else {
        $https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
        $scheme = $https ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        if (!preg_match('/^[A-Za-z0-9.-]+(?::\d+)?$/', $host)) {
            $host = 'localhost';
        }
        $base = $scheme . '://' . $host;
    }
    return $base . site_path($path);
}

function json_data(string $file): array {
    $path = dirname(__DIR__) . '/data/' . $file;
    $raw = @file_get_contents($path);
    if ($raw === false) { return []; }
    $decoded = json_decode($raw, true);
    return is_array($decoded) ? $decoded : [];
}

function send_security_headers(): void {
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: camera=(), microphone=(), geolocation=(), payment=(), usb=()');
    header('Cross-Origin-Opener-Policy: same-origin');
    header('Cross-Origin-Resource-Policy: same-origin');
    header("Content-Security-Policy: default-src 'self'; base-uri 'self'; object-src 'none'; frame-ancestors 'none'; form-action 'self'; img-src 'self' data:; style-src 'self'; script-src 'self'; font-src 'self'; connect-src 'self'");
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
    }
}

send_security_headers();
$lang = current_language();
$t = require dirname(__DIR__) . '/lang/' . $lang . '.php';
