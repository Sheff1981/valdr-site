<?php
$pageKey='roadmap'; $pagePath='/roadmap'; require dirname(__DIR__).'/includes/bootstrap.php'; require dirname(__DIR__).'/includes/header.php'; $roadmap=json_data('roadmap.json');
?>
<section class="page-hero compact"><div class="eyebrow"><?= h($t['pages']['roadmap']['kicker']) ?></div><h1><?= h($t['pages']['roadmap']['title']) ?></h1><p><?= h($t['pages']['roadmap']['lead']) ?></p></section>
<section class="section narrow"><div class="legend"><span><i class="status-dot implemented"></i><?= $lang==='ru'?'Реализовано + проверено':'Implemented + verified' ?></span><span><i class="status-dot in_development"></i><?= $lang==='ru'?'В разработке':'In development' ?></span><span><i class="status-dot planned"></i><?= $lang==='ru'?'Запланировано':'Planned' ?></span><span><i class="status-dot not_launched"></i><?= $lang==='ru'?'Не запущено':'Not launched' ?></span></div>
<div class="timeline">
<?php foreach($roadmap['stages']??[] as $stage): ?><article class="timeline-row"><div class="timeline-id"><?= h((string)$stage['id']) ?></div><div class="timeline-body"><span class="status-pill <?= h($stage['status']) ?>"><?= h($stage[$lang.'_status_label']??$stage['en_status_label']) ?></span><h2><?= h($stage[$lang.'_name']??$stage['en_name']) ?></h2><p><?= h($stage[$lang.'_note']??$stage['en_note']) ?></p></div></article><?php endforeach; ?>
</div><p class="source-note"><?= $lang==='ru'?'Источник статусов: Master TZ v0.2.4 + фактическая ветка valdr-v0.2 и CI на момент подготовки сайта.':'Status source: Master TZ v0.2.4 plus the actual valdr-v0.2 branch and CI state when this site was prepared.' ?></p></section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
