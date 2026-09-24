</main>
<footer class="site-footer">
  <div class="footer-grid">
    <div>
      <div class="footer-brand">VALDR <span>VDR</span></div>
      <p><?= h($t['footer']['line']) ?></p>
      <p class="muted"><?= h($t['footer']['testnet_notice']) ?></p>
    </div>
    <div>
      <h2><?= h($t['footer']['project']) ?></h2>
      <a href="<?= h(route_url('/story', $lang)) ?>"><?= h($t['nav']['story']) ?></a>
      <a href="<?= h(route_url('/roadmap', $lang)) ?>"><?= h($t['nav']['roadmap']) ?></a>
      <a href="<?= h(route_url('/security', $lang)) ?>"><?= h($t['nav']['security']) ?></a>
    </div>
    <div>
      <h2><?= h($t['footer']['resources']) ?></h2>
      <a href="<?= h(route_url('/docs', $lang)) ?>"><?= h($t['nav']['docs']) ?></a>
      <a href="<?= h(route_url('/verify', $lang)) ?>"><?= h($t['nav']['verify']) ?></a>
      <a href="<?= h(route_url('/releases', $lang)) ?>"><?= h($t['nav']['releases']) ?></a>
    </div>
    <div>
      <h2><?= h($t['footer']['source']) ?></h2>
      <a href="<?= h(VALDR_SOURCE_URL) ?>" rel="noopener noreferrer">valdr-core</a>
      <a href="<?= h(VALDR_SITE_SOURCE_URL) ?>" rel="noopener noreferrer">valdr-site</a>
    </div>
  </div>
  <div class="footer-bottom"><span>© 2026 VALDR</span><span><?= h($t['footer']['no_investment']) ?></span></div>
</footer>
</body>
</html>
