<?php
$nav = [
    '/' => $t['nav']['home'],
    '/about' => $t['nav']['about'],
    '/technology' => $t['nav']['technology'],
    '/download' => $t['nav']['download'],
    '/node' => $t['nav']['node'],
    '/mining' => $t['nav']['mining'],
    '/wallet' => $t['nav']['wallet'],
    '/roadmap' => $t['nav']['roadmap'],
];
$more = [
    '/story' => $t['nav']['story'],
    '/explorer' => $t['nav']['explorer'],
    '/security' => $t['nav']['security'],
    '/verify' => $t['nav']['verify'],
    '/releases' => $t['nav']['releases'],
    '/docs' => $t['nav']['docs'],
    '/community' => $t['nav']['community'],
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
      <summary><?= h($t['nav']['more']) ?></summary>
      <div class="nav-more-menu">
        <?php foreach ($more as $path => $label): ?>
          <a href="<?= h(route_url($path, $lang)) ?>"<?= $currentPath === $path ? ' aria-current="page"' : '' ?>><?= h($label) ?></a>
        <?php endforeach; ?>
      </div>
    </details>
  </div>
</nav>
