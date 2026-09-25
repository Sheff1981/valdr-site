<?php
$pageKey='technology';
$pagePath='/technology';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';

$isRu = $lang === 'ru';

$c = $isRu ? [
  'eyebrow'=>'VALDR TECHNOLOGY',
  'title'=>'Правила сети — в коде.',
  'lead'=>'VALDR — отдельный Proof-of-Work blockchain runtime на Go. Consensus, UTXO state, P2P synchronization, mempool, mining и persistent storage работают как единая проверяемая система.',
  'status'=>'ACTIVE BASELINE: v0.2.8',
  'status_text'=>'Текущая публичная техническая линия относится к Devnet/Testnet. Mainnet parameters и Mainnet Genesis ещё не существуют.',
  'stack_label'=>'PROTOCOL STACK',
  'stack_title'=>'Один consensus. Несколько слоёв.',
  'stack_text'=>'Каждый слой решает отдельную задачу, но ни Desktop, ни Explorer, ни miner не могут обойти consensus rules canonical node.',
  'pow_label'=>'PROOF OF WORK',
  'pow_title'=>'Работа измеряется chainwork, а не количеством blocks.',
  'pow_text'=>'Каждый valid block добавляет вычисляемую работу. Active chain — допустимая ветка с наибольшей cumulative chainwork; при равной работе текущий active tip сохраняется.',
  'tx_label'=>'TRANSACTIONS',
  'tx_title'=>'UTXO ownership + network-bound signatures.',
  'tx_text'=>'v2 transactions содержат chain_id в canonical serialization и signing preimage. Это привязывает подпись и txid к конкретной VALDR network profile и предотвращает replay между Devnet2 и Testnet.',
  'mempool_label'=>'MEMPOOL',
  'mempool_title'=>'Policy ограничивает relay до mining.',
  'mempool_text'=>'Mempool — не consensus state, но он ограничен по размеру и времени, отвергает conflicts и использует deterministic eviction и miner ordering.',
  'sync_label'=>'P2P v2',
  'sync_title'=>'Headers first. Bodies only after validation.',
  'sync_text'=>'Node получает block locator, проверяет headers и только потом запрашивает block bodies ограниченными batch. Side branches сохраняются и могут стать active только по chainwork.',
  'storage_label'=>'STORAGE v2',
  'storage_title'=>'Chain state переживает restart и reorg.',
  'storage_text'=>'BadgerDB хранит blocks, heights, headers, tx, UTXO и undo data. Block acceptance и reorg state changes должны оставаться atomic.',
  'genesis_label'=>'TESTNET IDENTITY',
  'genesis_title'=>'Frozen Genesis задаёт начало Testnet.',
  'genesis_text'=>'Testnet v0.2 использует фиксированные chain identity и Genesis parameters. Mainnet Genesis не публикуется и не придумывается заранее.',
  'limits_label'=>'CONSENSUS LIMITS',
  'limits_title'=>'Критичные границы определены заранее.',
  'next_label'=>'ИЗУЧАТЬ ДАЛЬШЕ',
  'next_title'=>'Посмотри, как protocol проявляется в реальной работе.',
  'node'=>'Full Node',
  'mining'=>'Mining',
  'explorer'=>'Explorer',
  'docs'=>'Documentation'
] : [
  'eyebrow'=>'VALDR TECHNOLOGY',
  'title'=>'Network rules live in code.',
  'lead'=>'VALDR is a standalone Proof-of-Work blockchain runtime written in Go. Consensus, UTXO state, P2P synchronization, mempool, mining and persistent storage operate as one verifiable system.',
  'status'=>'ACTIVE BASELINE: v0.2.8',
  'status_text'=>'The current public technical line applies to Devnet/Testnet. Mainnet parameters and a Mainnet Genesis do not exist yet.',
  'stack_label'=>'PROTOCOL STACK',
  'stack_title'=>'One consensus. Multiple layers.',
  'stack_text'=>'Each layer has a separate role, but Desktop, Explorer and the miner cannot bypass the consensus rules enforced by the canonical node.',
  'pow_label'=>'PROOF OF WORK',
  'pow_title'=>'Work is measured by chainwork, not block count.',
  'pow_text'=>'Every valid block contributes calculated work. The active chain is the valid branch with the greatest cumulative chainwork; equal work keeps the current active tip.',
  'tx_label'=>'TRANSACTIONS',
  'tx_title'=>'UTXO ownership + network-bound signatures.',
  'tx_text'=>'v2 transactions include chain_id in canonical serialization and the signing preimage. This binds signatures and txids to a specific VALDR network profile and prevents replay between Devnet2 and Testnet.',
  'mempool_label'=>'MEMPOOL',
  'mempool_title'=>'Policy constrains relay before mining.',
  'mempool_text'=>'Mempool is not consensus state, but it is bounded by size and time, rejects conflicts, and uses deterministic eviction and miner ordering.',
  'sync_label'=>'P2P v2',
  'sync_title'=>'Headers first. Bodies only after validation.',
  'sync_text'=>'A node obtains a block locator, validates headers, and only then requests block bodies in bounded batches. Side branches are persisted and can become active only through chainwork.',
  'storage_label'=>'STORAGE v2',
  'storage_title'=>'Chain state survives restart and reorg.',
  'storage_text'=>'BadgerDB stores blocks, heights, headers, transactions, UTXO and undo data. Block acceptance and reorg state changes remain atomic.',
  'genesis_label'=>'TESTNET IDENTITY',
  'genesis_title'=>'Frozen Genesis defines the Testnet starting point.',
  'genesis_text'=>'Testnet v0.2 uses fixed chain identity and Genesis parameters. Mainnet Genesis is not published or fabricated in advance.',
  'limits_label'=>'CONSENSUS LIMITS',
  'limits_title'=>'Critical boundaries are defined up front.',
  'next_label'=>'GO DEEPER',
  'next_title'=>'See how the protocol behaves in real operation.',
  'node'=>'Full Node',
  'mining'=>'Mining',
  'explorer'=>'Explorer',
  'docs'=>'Documentation'
];

$layers = $isRu ? [
  ['k'=>'WALLET','title'=>'Ownership','text'=>'Создаёт и подписывает network-bound transactions локально.'],
  ['k'=>'MEMPOOL','title'=>'Policy','text'=>'Проверяет relay policy, conflicts, fee rate и resource limits.'],
  ['k'=>'MINER','title'=>'Block production','text'=>'Собирает candidate block, coinbase и выполняет Proof of Work.'],
  ['k'=>'CONSENSUS','title'=>'Validation','text'=>'Проверяет header, target, time, transactions, UTXO и chainwork.'],
  ['k'=>'P2P','title'=>'Propagation','text'=>'Передаёт blocks, tx, headers и peer advertisements между nodes.'],
  ['k'=>'STORAGE','title'=>'Persistence','text'=>'Сохраняет active/side chain, indexes, UTXO и undo data.']
] : [
  ['k'=>'WALLET','title'=>'Ownership','text'=>'Creates and signs network-bound transactions locally.'],
  ['k'=>'MEMPOOL','title'=>'Policy','text'=>'Checks relay policy, conflicts, fee rate and resource limits.'],
  ['k'=>'MINER','title'=>'Block production','text'=>'Builds candidate blocks and coinbase, then performs Proof of Work.'],
  ['k'=>'CONSENSUS','title'=>'Validation','text'=>'Validates header, target, time, transactions, UTXO and chainwork.'],
  ['k'=>'P2P','title'=>'Propagation','text'=>'Relays blocks, transactions, headers and peer advertisements between nodes.'],
  ['k'=>'STORAGE','title'=>'Persistence','text'=>'Persists active/side chain, indexes, UTXO and undo data.']
];

$limits = $isRu ? [
  ['k'=>'BLOCK','v'=>'1,000,000 B','text'=>'Максимальный canonical block size.'],
  ['k'=>'TX','v'=>'100,000 B','text'=>'Максимальный canonical transaction size.'],
  ['k'=>'TARGET BLOCK','v'=>'60 s','text'=>'Целевой интервал Testnet/Devnet v0.2.'],
  ['k'=>'RETARGET','v'=>'60 blocks','text'=>'Target timespan 3,600 s; clamp 900..14,400 s.'],
  ['k'=>'MEMPOOL','v'=>'64 MiB','text'=>'Default policy limit; expiry 72 h.'],
  ['k'=>'MIN RELAY','v'=>'1 val/byte','text'=>'Testnet default relay floor.']
] : [
  ['k'=>'BLOCK','v'=>'1,000,000 B','text'=>'Maximum canonical block size.'],
  ['k'=>'TX','v'=>'100,000 B','text'=>'Maximum canonical transaction size.'],
  ['k'=>'TARGET BLOCK','v'=>'60 s','text'=>'Target interval for v0.2 Testnet/Devnet.'],
  ['k'=>'RETARGET','v'=>'60 blocks','text'=>'Target timespan 3,600 s; clamp 900..14,400 s.'],
  ['k'=>'MEMPOOL','v'=>'64 MiB','text'=>'Default policy limit; expiry 72 h.'],
  ['k'=>'MIN RELAY','v'=>'1 val/byte','text'=>'Testnet default relay floor.']
];

$sync = $isRu ? [
  ['n'=>'01','title'=>'Locator','text'=>'Recent heights, затем exponential steps к Genesis; максимум 128 entries.'],
  ['n'=>'02','title'=>'Headers','text'=>'До 2,000 headers; linkage, target, timestamp, difficulty и PoW проверяются до bodies.'],
  ['n'=>'03','title'=>'Bodies','text'=>'Не более 32 block body requests за batch.'],
  ['n'=>'04','title'=>'Branches','text'=>'Side branches сохраняются, а active branch выбирается по cumulative chainwork.'],
  ['n'=>'05','title'=>'Resume','text'=>'После restart sync продолжается от persisted chain state.']
] : [
  ['n'=>'01','title'=>'Locator','text'=>'Recent heights, then exponential steps toward Genesis; up to 128 entries.'],
  ['n'=>'02','title'=>'Headers','text'=>'Up to 2,000 headers; linkage, target, timestamp, difficulty and PoW validate before bodies.'],
  ['n'=>'03','title'=>'Bodies','text'=>'No more than 32 block-body requests per batch.'],
  ['n'=>'04','title'=>'Branches','text'=>'Side branches are persisted; cumulative chainwork selects the active branch.'],
  ['n'=>'05','title'=>'Resume','text'=>'After restart, sync continues from persisted chain state.']
];
?>
<section class="tech-hero">
  <div class="tech-hero-copy">
    <div class="eyebrow"><?= h($c['eyebrow']) ?></div>
    <h1><?= h($c['title']) ?></h1>
    <p><?= h($c['lead']) ?></p>
    <div class="tech-status"><strong><?= h($c['status']) ?></strong><span><?= h($c['status_text']) ?></span></div>
  </div>

  <div class="tech-chain" aria-hidden="true">
    <div class="tech-chain-head"><span>VALDR</span><b>PROTOCOL v2</b></div>
    <div class="tech-blocks">
      <div><small>H</small><b>1840</b><code>000A•••</code></div>
      <i>→</i>
      <div><small>H</small><b>1841</b><code>0007•••</code></div>
      <i>→</i>
      <div class="active"><small>H</small><b>1842</b><code>0003•••</code></div>
    </div>
    <div class="tech-chain-meta">
      <span>CHAINWORK ↑</span><span>UTXO ✓</span><span>PoW ✓</span>
    </div>
  </div>
</section>

<section class="section tech-stack-intro">
  <div class="section-heading"><span><?= h($c['stack_label']) ?></span><h2><?= h($c['stack_title']) ?></h2></div>
  <p class="big-copy"><?= h($c['stack_text']) ?></p>
</section>

<section class="tech-stack">
  <?php foreach($layers as $item): ?>
    <article>
      <small><?= h($item['k']) ?></small>
      <h2><?= h($item['title']) ?></h2>
      <p><?= h($item['text']) ?></p>
    </article>
  <?php endforeach; ?>
</section>

<section class="tech-pow">
  <div>
    <span><?= h($c['pow_label']) ?></span>
    <h2><?= h($c['pow_title']) ?></h2>
    <p><?= h($c['pow_text']) ?></p>
    <div class="tech-formula">work = floor(2<sup>256</sup> / (target + 1))</div>
  </div>
  <div class="tech-fork" aria-hidden="true">
    <div class="fork-main"><i></i><i></i><i></i><i></i><i></i></div>
    <div class="fork-side"><i></i><i></i><i></i></div>
    <span>GREATEST CUMULATIVE CHAINWORK → ACTIVE</span>
  </div>
</section>

<section class="tech-transactions">
  <div class="tech-tx-card" aria-hidden="true">
    <div><small>CHAIN ID</small><code>valdr-testnet-1</code></div>
    <div><small>VERSION</small><code>2</code></div>
    <div><small>INPUTS</small><code>UTXO REFERENCES</code></div>
    <div><small>OUTPUTS</small><code>VDR1… + AMOUNT</code></div>
    <div><small>SIGNATURE</small><code>NETWORK BOUND</code></div>
  </div>
  <div>
    <span><?= h($c['tx_label']) ?></span>
    <h2><?= h($c['tx_title']) ?></h2>
    <p><?= h($c['tx_text']) ?></p>
  </div>
</section>

<section class="tech-mempool">
  <div>
    <span><?= h($c['mempool_label']) ?></span>
    <h2><?= h($c['mempool_title']) ?></h2>
    <p><?= h($c['mempool_text']) ?></p>
  </div>
  <div class="mempool-rules" aria-hidden="true">
    <span>NO RBF</span><span>NO UNCONFIRMED PARENT</span><span>CONFLICT REJECT</span><span>72 H EXPIRY</span><span>DETERMINISTIC EVICTION</span><span>FEE-RATE ORDERING</span>
  </div>
</section>

<section class="tech-sync">
  <div class="tech-sync-head">
    <span><?= h($c['sync_label']) ?></span>
    <h2><?= h($c['sync_title']) ?></h2>
    <p><?= h($c['sync_text']) ?></p>
  </div>
  <div class="tech-sync-flow">
    <?php foreach($sync as $item): ?>
      <article>
        <span><?= h($item['n']) ?></span>
        <h3><?= h($item['title']) ?></h3>
        <p><?= h($item['text']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="tech-storage">
  <div>
    <span><?= h($c['storage_label']) ?></span>
    <h2><?= h($c['storage_title']) ?></h2>
    <p><?= h($c['storage_text']) ?></p>
  </div>
  <div class="storage-tree" aria-hidden="true">
    <div>meta/*</div><div>block/&lt;hash&gt;</div><div>height/&lt;height&gt;</div><div>header/&lt;hash&gt;</div><div>tx/&lt;txid&gt;</div><div>utxo/&lt;outpoint&gt;</div><div>undo/&lt;blockhash&gt;</div><div>migration/*</div>
  </div>
</section>

<section class="tech-genesis">
  <div class="genesis-mark" aria-hidden="true">0</div>
  <div>
    <span><?= h($c['genesis_label']) ?></span>
    <h2><?= h($c['genesis_title']) ?></h2>
    <p><?= h($c['genesis_text']) ?></p>
  </div>
  <div class="genesis-data">
    <div><small>CHAIN ID</small><code>valdr-testnet-1</code></div>
    <div><small>TIMESTAMP</small><code>2026-09-24 00:00:00 UTC</code></div>
    <div><small>NONCE</small><code>12480</code></div>
    <div><small>GENESIS HASH</small><code>0009d956448a8caefcd798af1a7957840d0aa7b72f8350362909f241ea100122</code></div>
  </div>
</section>

<section class="tech-limits">
  <div class="tech-limits-head">
    <span><?= h($c['limits_label']) ?></span>
    <h2><?= h($c['limits_title']) ?></h2>
  </div>
  <div class="tech-limits-grid">
    <?php foreach($limits as $item): ?>
      <article>
        <small><?= h($item['k']) ?></small>
        <strong><?= h($item['v']) ?></strong>
        <p><?= h($item['text']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="tech-next">
  <div>
    <span><?= h($c['next_label']) ?></span>
    <h2><?= h($c['next_title']) ?></h2>
  </div>
  <div class="tech-next-actions">
    <a class="button primary" href="<?= h(route_url('/node',$lang)) ?>"><?= h($c['node']) ?></a>
    <a class="button ghost" href="<?= h(route_url('/mining',$lang)) ?>"><?= h($c['mining']) ?></a>
    <a class="button ghost" href="<?= h(route_url('/explorer',$lang)) ?>"><?= h($c['explorer']) ?></a>
    <a class="button ghost" href="<?= h(route_url('/docs',$lang)) ?>"><?= h($c['docs']) ?></a>
  </div>
</section>

<?php require dirname(__DIR__).'/includes/footer.php'; ?>
