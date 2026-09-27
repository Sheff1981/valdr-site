# VALDR Official Website

Official website source for **VALDR (VDR)**.

## Architecture

The website is migrating to a Jekyll-style static architecture on the `jekyll-rebuild` branch.

- Jekyll 4.3
- Liquid layouts/includes
- Markdown/HTML pages
- static CSS/assets
- no PHP runtime
- no database
- no CMS
- no Node.js runtime

The generated `_site/` directory is the deployable artifact.

## Build

```bash
bundle install
bundle exec jekyll build
bundle exec jekyll serve
```

Website claims must follow verified VALDR Core implementation status. Do not publish executable downloads until the artifact, SHA-256 and provenance are known. Do not publish private project specifications.

The old PHP source remains temporarily for rollback but is excluded from Jekyll output. Remove it only after static build and route checks pass.
