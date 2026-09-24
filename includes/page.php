<?php
require __DIR__ . '/bootstrap.php';
require __DIR__ . '/header.php';
$page = $t['pages'][$pageKey];
$sections = $page['sections'] ?? [];
$hasToc = count($sections) > 1;
?>
<section class="page-hero compact">
  <div class="eyebrow"><?= h($page['kicker']) ?></div>
  <h1><?= h($page['title']) ?></h1>
  <p><?= h($page['lead']) ?></p>
</section>
<?php if (!empty($page['notice'])): ?>
<section class="section narrow notice-wrap"><div class="notice <?= h($page['notice']['type'] ?? 'info') ?>"><strong><?= h($page['notice']['title']) ?></strong><p><?= h($page['notice']['text']) ?></p></div></section>
<?php endif; ?>
<div class="page-shell<?= $hasToc ? '' : ' no-toc' ?>">
  <?php if ($hasToc): ?>
  <aside class="page-toc" aria-label="<?= h($t['a11y']['on_this_page']) ?>">
    <span><?= h($t['a11y']['on_this_page']) ?></span>
    <?php foreach ($sections as $i => $section): ?><a href="#section-<?= $i+1 ?>"><?= h($section['heading']) ?></a><?php endforeach; ?>
  </aside>
  <?php endif; ?>
  <div class="page-content">
  <?php foreach ($sections as $i => $section): ?>
    <section class="section narrow content-section" id="section-<?= $i+1 ?>">
      <div class="section-heading"><span><?= h($section['label'] ?? 'VALDR') ?></span><h2><?= h($section['heading']) ?></h2></div>
      <?php foreach (($section['paragraphs'] ?? []) as $p): ?><p><?= h($p) ?></p><?php endforeach; ?>
      <?php if (!empty($section['bullets'])): ?><ul class="feature-list"><?php foreach ($section['bullets'] as $item): ?><li><?= h($item) ?></li><?php endforeach; ?></ul><?php endif; ?>
      <?php if (!empty($section['cards'])): ?><div class="cards"><?php foreach ($section['cards'] as $card): ?><article class="card"><h3><?= h($card['title']) ?></h3><p><?= h($card['text']) ?></p></article><?php endforeach; ?></div><?php endif; ?>
      <?php if (!empty($section['code'])): ?><pre class="code"><code><?= h($section['code']) ?></code></pre><?php endif; ?>
    </section>
  <?php endforeach; ?>
  </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>
