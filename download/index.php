<?php
$pageKey='download'; $pagePath='/download'; require dirname(__DIR__).'/includes/bootstrap.php'; require dirname(__DIR__).'/includes/header.php'; $rel=json_data('releases.json');

$current=is_array($rel['current_release']??null)?$rel['current_release']:null;
$artifacts=is_array($rel['artifacts']??null)?$rel['artifacts']:[];
$verification=is_array($rel['verification']??null)?$rel['verification']:[];
$releaseReady=$current!==null && ($verification['public_release_ready']??false)===true && count($artifacts)>0;

$displayCommit=$releaseReady?(string)($current['commit']??''):(string)($rel['development']['commit']??'');
$displayLine=$releaseReady
  ?('VALDR Desktop '.(string)($current['version']??''))
  :(string)($rel['development']['line']??'VALDR v0.2 / Desktop development');
$displayStatus=$releaseReady
  ?($lang==='ru'?'Опубликован Testnet release':'Published Testnet release')
  :(string)($rel['development']['ci_status']??'development');
$displayNetwork=strtoupper((string)($current['network']??$rel['network_profile']??$rel['network_status']??'TESTNET2'));
$displayChainID=(string)($current['chain_id']??$rel['chain_id']??'valdr-testnet-2');

$platforms=[
  'windows'=>['Windows','Windows 10/11'],
  'macos'=>['macOS','macOS'],
  'linux'=>['Linux','Linux']
];
$byOS=['windows'=>[],'macos'=>[],'linux'=>[]];
if($releaseReady){
  foreach($artifacts as $artifact){
    if(!is_array($artifact))continue;
    $os=(string)($artifact['os']??'');
    if(isset($byOS[$os]))$byOS[$os][]=$artifact;
  }
}
$formatBytes=static function(int $bytes):string{
  if($bytes<=0)return '—';
  $units=['B','KiB','MiB','GiB']; $value=(float)$bytes; $unit=0;
  while($value>=1024 && $unit<count($units)-1){$value/=1024;$unit++;}
  return ($unit===0?(string)$bytes:number_format($value,2,'.','')).' '.$units[$unit];
};
?>
<section class="page-hero compact">
  <div class="eyebrow"><?= h($t['pages']['download']['kicker']) ?></div>
  <h1><?= h($t['pages']['download']['title']) ?></h1>
  <p><?= h($t['pages']['download']['lead']) ?></p>
</section>

<section class="section narrow">
  <div class="release-meta">
    <div><span><?= $releaseReady?($lang==='ru'?'Release':'Release'):($lang==='ru'?'Development line':'Development line') ?></span><b><?= h($displayLine) ?></b></div>
    <div><span><?= $lang==='ru'?'Сеть':'Network' ?></span><b><?= h($displayNetwork) ?></b></div>
    <div><span>Chain ID</span><b class="mono"><?= h($displayChainID) ?></b></div>
    <div><span>Git commit</span><b class="mono"><?= h($displayCommit!==''?substr($displayCommit,0,12):'—') ?></b></div>
    <div><span><?= $releaseReady?'Status':'CI' ?></span><b><?= h($displayStatus) ?></b></div>
    <div><span><?= $lang==='ru'?'Проверка':'Verification' ?></span><b><?= h((string)($verification['method']??'SHA-256')) ?></b></div>
  </div>
</section>

<section class="section narrow">
  <?php if($releaseReady): ?>
  <div class="notice">
    <strong><?= $lang==='ru'?'Testnet release опубликован и доступен для проверки':'The Testnet release is published and ready for verification' ?></strong>
    <p><?= $lang==='ru'
      ?'Перед запуском проверь SHA-256 и GitHub/Sigstore provenance против официального valdr-core repository, workflow и точного source commit.'
      :'Before running a package, verify SHA-256 and GitHub/Sigstore provenance against the official valdr-core repository, workflow and exact source commit.' ?></p>
  </div>
  <?php else: ?>
  <div class="notice">
    <strong><?= $lang==='ru'?'Development packages проверены, публичный Testnet release ещё не опубликован':'Development packages are verified; the public Testnet release is not published yet' ?></strong>
    <p><?= $lang==='ru'
      ?'Windows, macOS и Linux packages уже проходят CI, SHA-256 и GitHub/Sigstore provenance verification. Download-кнопки останутся выключенными до появления финального release candidate в официальном release storage.'
      :'Windows, macOS and Linux packages already pass CI, SHA-256 and GitHub/Sigstore provenance verification. Download buttons remain disabled until a final release candidate exists in official release storage.' ?></p>
  </div>
  <?php endif; ?>

  <div class="download-grid" data-platform-suggest>
  <?php foreach($platforms as $osKey=>$platform): $items=$byOS[$osKey]; ?>
    <article class="download-card" data-os="<?= h($osKey) ?>">
      <div class="download-card-head">
        <span class="os-mark"></span>
        <span class="platform-recommended" hidden><?= $lang==='ru'?'Рекомендуется для этого устройства':'Recommended for this device' ?></span>
      </div>
      <h2><?= h($platform[0]) ?></h2>
      <p><?= h($platform[1]) ?></p>

      <?php if($releaseReady && $items): ?>
        <?php foreach($items as $artifact):
          $url=(string)($artifact['url']??'');
          $safeURL=filter_var($url,FILTER_VALIDATE_URL)!==false && parse_url($url,PHP_URL_SCHEME)==='https';
        ?>
          <div class="artifact-entry">
            <dl>
              <dt><?= $lang==='ru'?'Файл':'Filename' ?></dt><dd class="mono artifact-name"><?= h((string)($artifact['filename']??'—')) ?></dd>
              <dt><?= $lang==='ru'?'Архитектура':'Architecture' ?></dt><dd><?= h((string)($artifact['arch']??'—')) ?></dd>
              <dt><?= $lang==='ru'?'Размер':'Size' ?></dt><dd><?= h($formatBytes((int)($artifact['size_bytes']??0))) ?></dd>
              <dt>SHA-256</dt><dd class="mono artifact-hash"><?= h((string)($artifact['sha256']??'—')) ?></dd>
              <dt><?= $lang==='ru'?'Подпись ОС':'OS signing' ?></dt><dd><?= h((string)($artifact['signing_status']??'—')) ?></dd>
            </dl>
            <?php if($safeURL): ?>
              <a class="button primary download-link" href="<?= h($url) ?>" rel="noopener noreferrer"><?= $lang==='ru'?'Скачать':'Download' ?> · <?= h((string)($artifact['arch']??'')) ?></a>
            <?php else: ?>
              <button disabled><?= $lang==='ru'?'URL не подтверждён':'URL not verified' ?></button>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <dl>
          <dt><?= $lang==='ru'?'Файл':'Filename' ?></dt><dd>—</dd>
          <dt><?= $lang==='ru'?'Размер':'Size' ?></dt><dd>—</dd>
          <dt>SHA-256</dt><dd>—</dd>
        </dl>
        <button disabled><?= $lang==='ru'?'Release в подготовке':'Release in preparation' ?></button>
      <?php endif; ?>
    </article>
  <?php endforeach; ?>
  </div>

  <div class="notice download-requirements">
    <strong><?= $lang==='ru'?'VALDR Desktop запускает локальный узел':'VALDR Desktop runs a local node' ?></strong>
    <p><?= $lang==='ru'
      ?'Первичная синхронизация использует сеть и дисковое пространство, а объём blockchain со временем растёт. На первом запуске можно выбрать node-data directory. Точные minimum OS и release requirements публикуются вместе с конкретным Testnet release.'
      :'Initial synchronization uses network bandwidth and disk space, and blockchain storage grows over time. The first-run flow lets you choose the node-data directory. Exact minimum OS and release requirements are published with each concrete Testnet release.' ?></p>
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
