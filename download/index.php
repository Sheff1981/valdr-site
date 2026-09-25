<?php
$pageKey='download'; $pagePath='/download'; require dirname(__DIR__).'/includes/bootstrap.php'; require dirname(__DIR__).'/includes/header.php'; $rel=json_data('releases.json');
?>
<section class="page-hero compact">
  <div class="eyebrow"><?= h($t['pages']['download']['kicker']) ?></div>
  <h1><?= h($t['pages']['download']['title']) ?></h1>
  <p><?= h($t['pages']['download']['lead']) ?></p>
</section>

<section class="section narrow">
  <div class="release-meta">
    <div><span><?= $lang==='ru'?'Development line':'Development line' ?></span><b><?= h($rel['development']['line']) ?></b></div>
    <div><span><?= $lang==='ru'?'Сеть':'Network' ?></span><b>TESTNET</b></div>
    <div><span>Git commit</span><b class="mono"><?= h(substr($rel['development']['commit'],0,12)) ?></b></div>
    <div><span>CI</span><b><?= h($rel['development']['ci_status']) ?></b></div>
    <div><span><?= $lang==='ru'?'Проверка':'Verification' ?></span><b><?= h($rel['verification']['method'] ?? 'SHA-256') ?></b></div>
  </div>
</section>

<section class="section narrow">
  <div class="notice">
    <strong><?= $lang==='ru'?'Development packages проверены, публичный Testnet release ещё не опубликован':'Development packages are verified; the public Testnet release is not published yet' ?></strong>
    <p><?= $lang==='ru'
      ?'Windows, macOS и Linux packages уже проходят CI, SHA-256 и GitHub/Sigstore provenance verification. Download-кнопки останутся выключенными до появления финального release candidate в официальном release storage.'
      :'Windows, macOS and Linux packages already pass CI, SHA-256 and GitHub/Sigstore provenance verification. Download buttons remain disabled until a final release candidate exists in official release storage.' ?></p>
  </div>

  <div class="download-grid">
  <?php foreach([
    ['Windows','AMD64','Windows 10/11'],
    ['macOS','Apple Silicon / Intel','macOS'],
    ['Linux','AMD64 / ARM64','Linux']
  ] as $os): ?>
    <article class="download-card">
      <span class="os-mark"></span>
      <h2><?= h($os[0]) ?></h2>
      <p><?= h($os[2]) ?> · <?= h($os[1]) ?></p>
      <dl>
        <dt><?= $lang==='ru'?'Файл':'Filename' ?></dt><dd>—</dd>
        <dt><?= $lang==='ru'?'Размер':'Size' ?></dt><dd>—</dd>
        <dt>SHA-256</dt><dd>—</dd>
      </dl>
      <button disabled><?= $lang==='ru'?'Release в подготовке':'Release in preparation' ?></button>
    </article>
  <?php endforeach; ?>
  </div>
</section>

<section class="section narrow">
  <div class="section-heading"><span>VERIFY</span><h2><?= $lang==='ru'?'Проверяй package перед запуском.':'Verify the package before you run it.' ?></h2></div>
  <p><?= $lang==='ru'
    ?'VALDR release flow использует две независимые проверки: SHA-256 и GitHub/Sigstore keyless provenance. Hash проверяет конкретный artifact, а provenance связывает его с публичным valdr-core repository, workflow и точным source commit.'
    :'VALDR uses two independent release checks: SHA-256 and GitHub/Sigstore keyless provenance. The hash checks the exact artifact; provenance binds it to the public valdr-core repository, workflow and exact source commit.' ?></p>
  <div class="split-actions">
    <a class="button primary" href="<?= h(route_url('/verify',$lang)) ?>"><?= h($t['buttons']['verify']) ?></a>
    <a class="button" href="<?= h(route_url('/releases',$lang)) ?>"><?= $lang==='ru'?'Релизы':'Release notes' ?></a>
    <a class="button ghost" href="<?= h(VALDR_CORE_BRANCH_URL) ?>" rel="noopener noreferrer"><?= $lang==='ru'?'Исходный код':'Source code' ?></a>
  </div>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
