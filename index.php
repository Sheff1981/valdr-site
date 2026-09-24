<?php
$pageKey='home'; $pagePath='/'; require __DIR__.'/includes/bootstrap.php'; require __DIR__.'/includes/header.php';
$roadmap=json_data('roadmap.json');
?>
<section class="hero hero-scene">
  <div class="hero-copy">
    <div class="eyebrow"><?= h($t['pages']['home']['kicker']) ?></div>
    <h1>VALDR</h1>
    <p class="hero-statement">NOT A TOKEN.<br><span>A CHAIN.</span></p>
    <p class="hero-lead"><?= h($t['pages']['home']['lead']) ?></p>
    <div class="actions">
      <a class="button primary" href="<?= h(route_url('/download',$lang)) ?>"><?= h($t['buttons']['download']) ?></a>
      <a class="button" href="<?= h(route_url('/mining',$lang)) ?>"><?= h($t['buttons']['mining']) ?></a>
      <a class="button" href="<?= h(route_url('/node',$lang)) ?>"><?= h($t['buttons']['node']) ?></a>
      <a class="button ghost" href="<?= h(VALDR_SOURCE_URL) ?>" rel="noopener noreferrer"><?= h($t['buttons']['source']) ?></a>
    </div>
  </div>
  <div class="hero-emblem" aria-hidden="true">
    <div class="coin-ring coin-ring-outer"></div>
    <div class="coin-ring coin-ring-inner"></div>
    <div class="coin-runes">◆ · VDR · ◆ · VALDR · ◆</div>
    <div class="coin-v">V</div>
    <div class="coin-name">VALDR<small>VDR</small></div>
  </div>
</section>

<section class="feature-band">
  <?php foreach ($t['home_features'] as $feature): ?>
    <article><span class="feature-glyph"><?= h($feature['glyph']) ?></span><h2><?= h($feature['title']) ?></h2><p><?= h($feature['text']) ?></p></article>
  <?php endforeach; ?>
</section>

<section class="section home-split">
  <div>
    <div class="section-heading"><span><?= h($t['home']['what_label']) ?></span><h2><?= h($t['home']['what_title']) ?></h2></div>
    <p class="big-copy"><?= h($t['home']['what_text']) ?></p>
    <a class="text-link" href="<?= h(route_url('/about',$lang)) ?>"><?= h($t['home']['learn_more']) ?> →</a>
  </div>
  <div class="protocol-list">
    <?php foreach ($t['home']['protocol'] as $item): ?><div><span>◆</span><b><?= h($item) ?></b></div><?php endforeach; ?>
  </div>
</section>

<section class="section desktop-showcase">
  <div class="desktop-frame" aria-hidden="true">
    <div class="desktop-top"><span>VALDR</span><span>TESTNET</span></div>
    <div class="desktop-body">
      <aside>Wallet<br>Send<br>Receive<br>Transactions<br>Network<br>Settings</aside>
      <div><small>BALANCE</small><strong>VDR</strong><p><?= h($t['home']['desktop_mock']) ?></p></div>
    </div>
  </div>
  <div class="desktop-copy">
    <div class="section-heading"><span>VALDR DESKTOP</span><h2><?= h($t['home']['desktop_title']) ?></h2></div>
    <p><?= h($t['home']['desktop_text']) ?></p>
    <div class="platform-row">
      <a href="<?= h(route_url('/download',$lang)) ?>"><b>Windows</b><small><?= h($t['home']['release_preparing']) ?></small></a>
      <a href="<?= h(route_url('/download',$lang)) ?>"><b>macOS</b><small><?= h($t['home']['release_preparing']) ?></small></a>
      <a href="<?= h(route_url('/download',$lang)) ?>"><b>Linux</b><small><?= h($t['home']['release_preparing']) ?></small></a>
    </div>
    <a class="button" href="<?= h(route_url('/download',$lang)) ?>"><?= h($t['home']['all_releases']) ?> →</a>
  </div>
</section>

<section class="section story-strip">
  <div>
    <div class="section-heading"><span>STORY</span><h2><?= h($t['home']['story_title']) ?></h2></div>
    <p><?= h($t['home']['story_text']) ?></p>
    <a class="button" href="<?= h(route_url('/story',$lang)) ?>"><?= h($t['buttons']['story']) ?> →</a>
  </div>
  <div class="mini-timeline">
    <?php foreach ($t['home']['timeline'] as $i => $item): ?>
      <div><span><?= h((string)($i+1)) ?></span><b><?= h($item['title']) ?></b><small><?= h($item['text']) ?></small></div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section philosophy">
  <div class="section-heading"><span><?= h($t['home']['philosophy_label']) ?></span><h2><?= h($t['home']['philosophy_title']) ?></h2></div>
  <p class="big-copy"><?= h($t['home']['philosophy_text']) ?></p>
</section>

<section class="section home-duo">
  <article class="home-callout">
    <span>MINING</span><h2><?= h($t['home']['mining_title']) ?></h2><p><?= h($t['home']['mining_text']) ?></p>
    <a class="button primary" href="<?= h(route_url('/mining',$lang)) ?>"><?= h($t['buttons']['mining']) ?></a>
  </article>
  <article class="home-callout">
    <span>FULL NODE</span><h2><?= h($t['home']['node_title']) ?></h2><p><?= h($t['home']['node_text']) ?></p>
    <a class="button" href="<?= h(route_url('/node',$lang)) ?>"><?= h($t['buttons']['node']) ?></a>
  </article>
</section>

<section class="section">
  <div class="section-heading"><span>ROADMAP</span><h2><?= h($t['home']['roadmap_title']) ?></h2></div>
  <div class="roadmap-preview">
    <?php foreach(array_slice($roadmap['stages']??[],8,6) as $stage): ?>
      <article><span class="status-dot <?= h($stage['status']) ?>"></span><b><?= h((string)$stage['id']) ?> — <?= h($stage[$lang.'_name']??$stage['en_name']) ?></b><small><?= h($stage[$lang.'_status_label']??$stage['en_status_label']) ?></small></article>
    <?php endforeach; ?>
  </div>
  <a class="text-link" href="<?= h(route_url('/roadmap',$lang)) ?>"><?= h($t['home']['roadmap_link']) ?> →</a>
</section>
<?php require __DIR__.'/includes/footer.php'; ?>
