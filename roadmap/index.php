<?php
$pageKey='roadmap'; $pagePath='/roadmap'; require dirname(__DIR__).'/includes/bootstrap.php'; require dirname(__DIR__).'/includes/header.php'; $roadmap=json_data('roadmap.json');
?>
<section class="page-hero compact">
  <div class="eyebrow"><?= h($t['pages']['roadmap']['kicker']) ?></div>
  <h1><?= h($t['pages']['roadmap']['title']) ?></h1>
  <p><?= h($t['pages']['roadmap']['lead']) ?></p>
</section>

<section class="section narrow roadmap-intro">
  <div class="section-heading">
    <span><?= $lang==='ru'?'VALDR CORE DEVELOPMENT':'VALDR CORE DEVELOPMENT' ?></span>
    <h2><?= $lang==='ru'?'Как строится VALDR — шаг за шагом.':'How VALDR is being built — step by step.' ?></h2>
  </div>
  <p><?= $lang==='ru'
    ?'Эта страница берёт этапы не из рекламного плана, а из фактического состояния VALDR Core: кода ветки valdr-v0.2 и зелёного CI. Когда в Core появляется и проверяется новый этап, Roadmap сайта должен обновляться вместе с ним.'
    :'This page follows the verified state of VALDR Core rather than a marketing schedule: code on valdr-v0.2 and green CI. When a new Core milestone is implemented and verified, the website roadmap should be updated with it.' ?></p>

  <div class="roadmap-source">
    <div><span>Network line</span><b>VALDR v0.2</b></div>
    <div><span>Branch</span><b><?= h($roadmap['source_core_branch']??'—') ?></b></div>
    <div><span>Core commit</span><b class="mono"><?= h(substr($roadmap['source_core_commit']??'',0,12)) ?></b></div>
    <div><span>CI</span><b><?= h(strtoupper($roadmap['source_ci_status']??'unknown')) ?></b></div>
  </div>
  <div class="split-actions">
    <a class="button primary" href="<?= h(VALDR_CORE_BRANCH_URL) ?>" rel="noopener noreferrer"><?= $lang==='ru'?'Открыть VALDR Core':'Open VALDR Core' ?></a>
  </div>
</section>

<section class="section narrow">
  <div class="section-heading">
    <span><?= $lang==='ru'?'ЭВОЛЮЦИЯ СЕТИ':'NETWORK EVOLUTION' ?></span>
    <h2><?= $lang==='ru'?'Testnet 1 → Testnet 2 → Mainnet':'Testnet 1 → Testnet 2 → Mainnet' ?></h2>
  </div>
  <div class="final-grid three">
    <?php foreach($roadmap['network_evolution']??[] as $network): ?>
      <article>
        <small><?= h($network[$lang.'_status_label']??$network['en_status_label']??'') ?></small>
        <h3><?= h($network[$lang.'_name']??$network['en_name']??'') ?></h3>
        <?php if(!empty($network['chain_id'])): ?><p class="mono"><?= h((string)$network['chain_id']) ?></p><?php endif; ?>
        <p><?= h($network[$lang.'_note']??$network['en_note']??'') ?></p>
        <?php $networkDetails=$network[$lang.'_details']??$network['en_details']??[]; if($networkDetails): ?>
          <ul class="stage-details"><?php foreach($networkDetails as $detail): ?><li><?= h($detail) ?></li><?php endforeach; ?></ul>
        <?php endif; ?>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="section narrow">
  <div class="legend">
    <span><i class="status-dot implemented"></i><?= $lang==='ru'?'Реализовано + проверено':'Implemented + verified' ?></span>
    <span><i class="status-dot in_development"></i><?= $lang==='ru'?'В разработке':'In development' ?></span>
    <span><i class="status-dot planned"></i><?= $lang==='ru'?'Запланировано':'Planned' ?></span>
    <span><i class="status-dot not_launched"></i><?= $lang==='ru'?'Будущий этап':'Future stage' ?></span>
  </div>

  <div class="timeline detailed-timeline">
  <?php foreach($roadmap['stages']??[] as $stage): ?>
    <article class="timeline-row">
      <div class="timeline-id"><?= h((string)$stage['id']) ?></div>
      <div class="timeline-body">
        <span class="status-pill <?= h($stage['status']) ?>"><?= h($stage[$lang.'_status_label']??$stage['en_status_label']) ?></span>
        <h2><?= h($stage[$lang.'_name']??$stage['en_name']) ?></h2>
        <p><?= h($stage[$lang.'_note']??$stage['en_note']) ?></p>
        <?php $details=$stage[$lang.'_details']??$stage['en_details']??[]; if($details): ?>
          <ul class="stage-details">
            <?php foreach($details as $detail): ?><li><?= h($detail) ?></li><?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </article>
  <?php endforeach; ?>
  </div>

  <div class="current-work">
    <span><?= $lang==='ru'?'ТЕКУЩАЯ РАБОТА':'CURRENT WORK' ?></span>
    <h2>Stage 14A — independent Testnet2 validation</h2>
    <p><?= $lang==='ru'
      ?'Автоматическая разработка Testnet2, Desktop, cross-platform packages, SHA-256/provenance и website CI уже зелёные. Текущий обязательный gate — три реальные распределённые сессии по 2–3 часа на трёх независимых машинах; public RC фиксируется только после их PASS.'
      :'Automated Testnet2 Core, Desktop, cross-platform packages, SHA-256/provenance and website CI are green. The current mandatory gate is three real distributed 2–3 hour sessions on three independent machines; the public RC is frozen only after they pass.' ?></p>
  </div>

  <p class="source-note"><?= $lang==='ru'
    ?'Публичные статусы формируются из фактического кода ветки valdr-v0.2 и GitHub Actions CI. Внутренняя проектная документация на сайте не публикуется.'
    :'Public status is derived from actual code on valdr-v0.2 and GitHub Actions CI. Internal project documentation is not published on the website.' ?></p>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
