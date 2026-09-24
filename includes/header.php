<?php
$page = $t['pages'][$pageKey] ?? $t['pages']['home'];
$pageTitle = $page['meta_title'] ?? $page['title'];
$pageDescription = $page['meta_description'] ?? $page['lead'];
$currentPath = $pagePath ?? '/';
$canonical = canonical_url($currentPath);
$altLang = $lang === 'en' ? 'ru' : 'en';
?>
<!doctype html>
<html lang="<?= h($lang) ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="color-scheme" content="dark">
  <meta name="theme-color" content="#0b0b0d">
  <title><?= h($pageTitle) ?></title>
  <meta name="description" content="<?= h($pageDescription) ?>">
  <link rel="canonical" href="<?= h($canonical) ?>">
  <link rel="alternate" hreflang="en" href="<?= h(canonical_url($currentPath)) ?>">
  <link rel="alternate" hreflang="ru" href="<?= h(canonical_url($currentPath) . '?lang=ru') ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="VALDR">
  <meta property="og:title" content="<?= h($pageTitle) ?>">
  <meta property="og:description" content="<?= h($pageDescription) ?>">
  <meta property="og:url" content="<?= h($canonical) ?>">
  <meta property="og:image" content="<?= h(canonical_url('/assets/img/valdr-og.svg')) ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= h($pageTitle) ?>">
  <meta name="twitter:description" content="<?= h($pageDescription) ?>">
  <meta name="twitter:image" content="<?= h(canonical_url('/assets/img/valdr-og.svg')) ?>">
  <link rel="icon" href="/assets/icons/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="/assets/css/site.css">
  <script src="/assets/js/site.js" defer></script>
</head>
<body>
<a class="skip-link" href="#content"><?= h($t['a11y']['skip']) ?></a>
<div class="testnet-ribbon"><span><?= h($t['status']['testnet']) ?></span><small><?= h($t['status']['mainnet_not_launched']) ?></small></div>
<header class="site-header">
  <a class="brand" href="<?= h(route_url('/', $lang)) ?>" aria-label="VALDR">
    <img src="/assets/img/valdr-mark.svg" alt="" width="34" height="34">
    <span><strong>VALDR</strong><small>VDR</small></span>
  </a>
  <?php require __DIR__ . '/nav.php'; ?>
  <a class="lang-switch" href="<?= h(route_url($currentPath, $altLang)) ?>" hreflang="<?= h($altLang) ?>"><?= $lang === 'en' ? 'RU' : 'EN' ?></a>
</header>
<main id="content">
