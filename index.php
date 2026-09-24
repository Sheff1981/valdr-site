<?php
$pageKey='home'; $pagePath='/'; require __DIR__.'/includes/bootstrap.php'; require __DIR__.'/includes/header.php';
$roadmap=json_data('roadmap.json');
?>
<section class="hero">
 <div class="hero-copy">
  <div class="eyebrow"><?= h($t['pages']['home']['kicker']) ?></div>
  <h1>VALDR</h1>
  <p class="hero-statement">NOT A TOKEN.<br><span>A CHAIN.</span></p>
  <p class="hero-lead"><?= h($t['pages']['home']['lead']) ?></p>
  <div class="actions">
   <a class="button primary" href="<?= h(route_url('/download',$lang)) ?>"><?= h($t['buttons']['download']) ?></a>
   <a class="button" href="<?= h(route_url('/explorer',$lang)) ?>"><?= h($t['buttons']['explore']) ?></a>
   <a class="button" href="<?= h(route_url('/story',$lang)) ?>"><?= h($t['buttons']['story']) ?></a>
   <a class="button ghost" href="<?= h(VALDR_SOURCE_URL) ?>" rel="noopener noreferrer"><?= h($t['buttons']['source']) ?></a>
  </div>
 </div>
 <div class="hero-forge" aria-hidden="true"><div class="forge-ring ring-a"></div><div class="forge-ring ring-b"></div><div class="forge-rune">V</div><div class="forge-line"></div></div>
</section>
<section class="section"><div class="section-heading"><span>WHAT IS VALDR</span><h2><?= $lang==='ru'?'Собственная монета. Собственная сеть.':'Native coin. Native network.' ?></h2></div>
 <p class="big-copy"><?= $lang==='ru'?'VALDR — независимая Proof-of-Work криптовалюта на собственном блокчейне. Это не ERC-20, не BEP token и не Solana token.':'VALDR is an independent Proof-of-Work cryptocurrency running on its own blockchain. It is not an ERC-20 token, not a BEP token and not a Solana token.' ?></p>
 <div class="cards three"><article class="card"><span>01</span><h3>Proof of Work</h3><p><?= $lang==='ru'?'Блоки создаются майнерами и проверяются каждой нодой по правилам VALDR.':'Blocks are produced by miners and independently verified by VALDR nodes.' ?></p></article><article class="card"><span>02</span><h3>UTXO</h3><p><?= $lang==='ru'?'Транзакции расходуют подтверждённые выходы и создают новые.':'Transactions spend confirmed outputs and create new ones.' ?></p></article><article class="card"><span>03</span><h3>Open network</h3><p><?= $lang==='ru'?'Ноды синхронизируются по собственному P2P-протоколу VALDR.':'Nodes synchronize over VALDR’s own P2P protocol.' ?></p></article></div>
</section>
<section class="section split"><div><div class="section-heading"><span>FORGED IN CODE</span><h2><?= $lang==='ru'?'Сначала работающая сеть':'Build the network first' ?></h2></div><p><?= $lang==='ru'?'Проект идёт от спецификации к коду, от кода к тестам, от тестов к подтверждённому результату. Никаких фальшивых релизов, Mainnet или рыночных обещаний.':'VALDR moves from specification to code, from code to tests, and from tests to verified results. No fake releases, fake Mainnet or market promises.' ?></p></div><div class="status-panel"><div><b>v0.2.4</b><span>Master Specification</span></div><div><b>0–11</b><span><?= $lang==='ru'?'этапы CI-verified':'stages CI-verified' ?></span></div><div><b>12</b><span><?= $lang==='ru'?'Desktop — в разработке':'Desktop — in development' ?></span></div><div><b>TESTNET</b><span><?= $lang==='ru'?'Public launch ещё не состоялся':'Public launch not completed' ?></span></div></div></section>
<section class="section"><div class="section-heading"><span>ROADMAP</span><h2><?= $lang==='ru'?'Фактический статус':'Factual status' ?></h2></div><div class="roadmap-preview">
<?php foreach(array_slice($roadmap['stages']??[],8,6) as $stage): ?><article><span class="status-dot <?= h($stage['status']) ?>"></span><b><?= h((string)$stage['id']) ?> — <?= h($stage[$lang.'_name']??$stage['en_name']) ?></b><small><?= h($stage[$lang.'_status_label']??$stage['en_status_label']) ?></small></article><?php endforeach; ?>
</div><a class="text-link" href="<?= h(route_url('/roadmap',$lang)) ?>"><?= $lang==='ru'?'Полный Roadmap →':'Full Roadmap →' ?></a></section>
<?php require __DIR__.'/includes/footer.php'; ?>
