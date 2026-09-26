<?php
$nav = [
    '/' => $t['nav']['home'],
    '/getting-started' => $t['nav']['getting_started'],
    '/using-valdr' => $t['nav']['using_valdr'],
    '/about' => $t['nav']['about'],
    '/download' => $t['nav']['download'],
    '/technology' => $t['nav']['technology'],
    '/mining' => $t['nav']['mining'],
    '/node' => $t['nav']['node'],
    '/wallet' => $t['nav']['wallet'],
    '/explorer' => $t['nav']['explorer'],
    '/roadmap' => $t['nav']['roadmap'],
    '/community' => $t['nav']['community'],
];
$more = [
    '/story' => $t['nav']['story'],
    '/security' => $t['nav']['security'],
    '/verify' => $t['nav']['verify'],
    '/releases' => $t['nav']['releases'],
    '/docs' => $t['nav']['docs'],
    '/faq' => $t['nav']['faq'],
];
?>
<nav class="site-nav" aria-label="<?= h($t['a11y']['primary_nav']) ?>">
  <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
    <span></span><span></span><span></span><b class="sr-only"><?= h($t['a11y']['menu']) ?></b>
  </button>
  <div class="nav-links" id="primary-menu">
    <?php foreach ($nav as $path => $label): ?>
      <a href="<?= h(route_url($path, $lang)) ?>"<?= $currentPath === $path ? ' aria-current="page"' : '' ?>><?= h($label) ?></a>
    <?php endforeach; ?>
    <details class="nav-more"<?= array_key_exists($currentPath, $more) ? ' open' : '' ?>>
      <summary><?= h($t['nav']['more']) ?>⌄</summary>
      <div class="nav-more-menu">
        <?php foreach ($more as $path => $label): ?>
          <a href="<?= h(route_url($path, $lang)) ?>"<?= $currentPath === $path ? ' aria-current="page"' : '' ?>><?= h($label) ?></a>
        <?php endforeach; ?>
      </div>
    </details>
  </div>
</nav>
