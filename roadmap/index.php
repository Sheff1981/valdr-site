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
    ?'Эта страница берёт этапы не из рекламного плана, а из рабочего репозитория VALDR Core: актуального Master TZ, README, кода ветки valdr-v0.2 и зелёного CI. Когда в Core появляется и проверяется новый этап, Roadmap сайта должен обновляться вместе с ним.'
    :'This page follows the working VALDR Core repository rather than a marketing schedule: the current Master Specification, README, code on valdr-v0.2 and green CI. When a new Core milestone is implemented and verified, the website roadmap should be updated with it.' ?></p>

  <div class="roadmap-source">
    <div><span>Master TZ</span><b><?= h($roadmap['source_master_spec']??'—') ?></b></div>
    <div><span>Branch</span><b><?= h($roadmap['source_core_branch']??'—') ?></b></div>
    <div><span>Core commit</span><b class="mono"><?= h(substr($roadmap['source_core_commit']??'',0,12)) ?></b></div>
    <div><span>CI</span><b><?= h(strtoupper($roadmap['source_ci_status']??'unknown')) ?></b></div>
  </div>
  <div class="split-actions">
    <a class="button primary" href="<?= h(VALDR_CORE_BRANCH_URL) ?>" rel="noopener noreferrer"><?= $lang==='ru'?'Открыть VALDR Core':'Open VALDR Core' ?></a>
    <a class="button" href="<?= h(VALDR_SOURCE_URL . '/blob/valdr-v0.2/docs/VALDR_Master_TZ_v0.2.4.md') ?>" rel="noopener noreferrer">Master TZ v0.2.4</a>
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
    <h2>Stage 12 — VALDR Desktop</h2>
    <p><?= $lang==='ru'
      ?'В текущей ветке уже есть Wails Desktop shell, managed valdrd, outbound-only P2P, encrypted wallet bridge, Send/Receive, fee preview, backup/restore, transaction history, sync progress и first-run Testnet setup. Этап остаётся «в разработке», пока не пройдёт полный product gate.'
      :'The current branch already contains the Wails Desktop shell, managed valdrd, outbound-only P2P, encrypted wallet bridge, Send/Receive, fee preview, backup/restore, transaction history, sync progress and first-run Testnet setup. The stage remains “in development” until the full product gate is completed.' ?></p>
  </div>

  <p class="source-note"><?= $lang==='ru'
    ?'Источник статусов: VALDR_Master_TZ_v0.2.4.md + README.md + фактический код и commits ветки valdr-v0.2 + GitHub Actions CI. При расхождении сайт не объявляет этап завершённым только потому, что код уже появился.'
    :'Status sources: VALDR_Master_TZ_v0.2.4.md + README.md + actual code and commits on valdr-v0.2 + GitHub Actions CI. If those sources are temporarily out of sync, the website does not mark a stage complete merely because code exists.' ?></p>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
