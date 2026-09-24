</main>
<footer class="site-footer">
  <div class="footer-grid">
    <div class="footer-intro">
      <div class="footer-brand">VALDR <span>VDR</span></div>
      <p><?= h($t['footer']['line']) ?></p>
      <p class="muted"><?= h($t['footer']['testnet_notice']) ?></p>
    </div>
    <div><h2><?= h($t['footer']['get_started']) ?></h2>
      <a href="<?= h(route_url('/download',$lang)) ?>"><?= h($t['nav']['download']) ?></a>
      <a href="<?= h(route_url('/wallet',$lang)) ?>"><?= h($t['nav']['wallet']) ?></a>
      <a href="<?= h(route_url('/mining',$lang)) ?>"><?= h($t['nav']['mining']) ?></a>
      <a href="<?= h(route_url('/node',$lang)) ?>"><?= h($t['nav']['node']) ?></a>
    </div>
    <div><h2><?= h($t['footer']['network']) ?></h2>
      <a href="<?= h(route_url('/technology',$lang)) ?>"><?= h($t['nav']['technology']) ?></a>
      <a href="<?= h(route_url('/explorer',$lang)) ?>"><?= h($t['nav']['explorer']) ?></a>
      <a href="<?= h(route_url('/security',$lang)) ?>"><?= h($t['nav']['security']) ?></a>
      <a href="<?= h(route_url('/roadmap',$lang)) ?>"><?= h($t['nav']['roadmap']) ?></a>
    </div>
    <div><h2><?= h($t['footer']['resources']) ?></h2>
      <a href="<?= h(route_url('/docs',$lang)) ?>"><?= h($t['nav']['docs']) ?></a>
      <a href="<?= h(route_url('/verify',$lang)) ?>"><?= h($t['nav']['verify']) ?></a>
      <a href="<?= h(route_url('/releases',$lang)) ?>"><?= h($t['nav']['releases']) ?></a>
      <a href="<?= h(route_url('/faq',$lang)) ?>"><?= h($t['nav']['faq']) ?></a>
    </div>
    <div><h2><?= h($t['footer']['project']) ?></h2>
      <a href="<?= h(route_url('/about',$lang)) ?>"><?= h($t['nav']['about']) ?></a>
      <a href="<?= h(route_url('/story',$lang)) ?>"><?= h($t['nav']['story']) ?></a>
      <a href="<?= h(route_url('/community',$lang)) ?>"><?= h($t['nav']['community']) ?></a>
      <a href="<?= h(VALDR_SOURCE_URL) ?>" rel="noopener noreferrer">GitHub / valdr-core</a>
    </div>
  </div>
  <div class="footer-bottom"><span>© 2026 VALDR</span><span><?= h($t['footer']['bottom']) ?></span></div>
</footer>
</body>
</html>
