# VALDR Official Website Source

Official website source for **VALDR (VDR)** — an independent Proof-of-Work cryptocurrency on its own blockchain.

This repository is intentionally separate from `Sheff1981/valdr-core`. It contains website code and content only. It must never contain VALDR consensus/blockchain implementation code.

## Runtime

- PHP 8.1+
- HTML5 / CSS3
- vanilla JavaScript
- no database required
- no Node.js/npm required for normal deployment
- no CMS / WordPress

## Run locally

```bash
php -S 127.0.0.1:8080 -t .
```

Open `http://127.0.0.1:8080/`.

## Shared hosting deployment

1. Download or clone the repository.
2. Upload the repository contents to the domain document root using FTP/SFTP/hosting panel.
3. Confirm PHP 8.1 or newer.
4. Ensure directory indexes resolve to `index.php`.
5. If Apache is used, keep `.htaccess`; on nginx, reproduce equivalent security headers in server configuration.
6. Set `VALDR_SITE_URL=https://your-domain.example` in hosting environment configuration when possible so canonical URLs are deterministic.
7. Open `/`, `/download`, `/verify`, `/roadmap`, `/wallet`, `/node` and both language variants.

## Updating release data

`data/releases.json` is the only website release-data source.

Do **not** create a download entry until the artifact actually exists in the official release storage and its SHA-256/signing status is known.

For a real release, record:
- version;
- source commit;
- release date;
- OS / architecture;
- filename;
- file size;
- SHA-256;
- signed-manifest verification status;
- official release URL.

Large installers do not belong in this repository.

## Updating roadmap

Update `data/roadmap.json` only from verified `valdr-core` status. Use these meanings:
- `implemented` — implemented and CI/runtime verified;
- `in_development` — active work exists but completion gate is not met;
- `planned` — specified but not complete;
- `not_launched` — explicitly not launched.

## Translations

Public default language is English. Full Russian localization is stored in:
- `lang/en.php`
- `lang/ru.php`

Do not machine-translate content at request time. All public copy is versioned in the repository.

## Validation

Local checks:

```bash
php scripts/validate.php
php -S 127.0.0.1:8080 -t . >/tmp/valdr-site.log 2>&1 &
php scripts/http-smoke.php http://127.0.0.1:8080
```

GitHub Actions runs syntax, content, route, asset and security-header checks.

## Deployment verification checklist

- site renders over HTTPS;
- English and Russian routes render;
- no 404s for internal links/assets;
- security headers are present;
- no private keys/secrets are present;
- no fake executable download links exist;
- TESTNET notice is visible;
- Explorer/community placeholders are not linked to invented endpoints;
- canonical and social metadata use the production domain.

## Source of truth

Website factual content must be checked against verified `valdr-core` implementation status and current CI/runtime evidence. Internal project specifications are not published from this repository.

## License

See `LICENSE`. The initial conservative website-source license grants no reuse rights until the project owner chooses an explicit open-source license.
