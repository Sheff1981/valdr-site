<?php
$pageKey='node';
$pagePath='/node';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';

$isRu = $lang === 'ru';

$c = $isRu ? [
  'eyebrow'=>'VALDR FULL NODE',
  'title'=>'Проверяй сеть сам.',
  'lead'=>'Full node хранит собственное проверенное состояние blockchain, синхронизируется с peers и самостоятельно решает, какие blocks и transactions соответствуют правилам VALDR.',
  'status'=>'DESKTOP DEFAULT',
  'status_text'=>'Обычный пользователь работает в outbound-only режиме: приложение подключается к peers само и не требует открывать P2P-порт на роутере.',
  'why_label'=>'ЗАЧЕМ НУЖНА NODE',
  'why_title'=>'Не спрашивать чужой сервер, какая цепочка правильная.',
  'why_text'=>'Node получает данные от peers, но доверяет не их словам, а protocol rules. Она проверяет Proof of Work, linkage, timestamps, transactions, UTXO changes и cumulative chainwork локально.',
  'sync_label'=>'СИНХРОНИЗАЦИЯ',
  'sync_title'=>'Сначала headers. Потом blocks.',
  'sync_text'=>'VALDR использует headers-first synchronization: node сначала проверяет последовательность headers и только затем запрашивает block bodies ограниченными партиями.',
  'home_label'=>'ДОМАШНИЙ РЕЖИМ',
  'home_title'=>'Для Desktop достаточно исходящих соединений.',
  'home_text'=>'По умолчанию Desktop не превращает компьютер в публичный сервер. Node поддерживает outbound peers, хранит learned peer cache и после restart продолжает синхронизацию из сохранённой базы.',
  'public_label'=>'PUBLIC FULL NODE',
  'public_title'=>'Публичный режим — только явный выбор оператора.',
  'public_text'=>'Advanced user может сделать node доступной для входящих P2P connections. Это требует осознанной сетевой настройки и реального routable endpoint. RPC при этом остаётся localhost-only по умолчанию.',
  'security_label'=>'ГРАНИЦЫ БЕЗОПАСНОСТИ',
  'security_title'=>'Node не должна получать wallet secrets.',
  'security_text'=>'Private keys и passphrases не проходят через P2P и не должны попадать в node RPC. Explorer остаётся отдельным read-only service.',
  'restart_label'=>'RESTART',
  'restart_title'=>'Выключение компьютера не ломает сеть.',
  'restart_text'=>'Когда компьютер выключен, node просто перестаёт участвовать. После запуска она открывает сохранённую database, восстанавливает local chain state и догоняет пропущенные blocks.',
  'advanced_label'=>'ADVANCED',
  'advanced_title'=>'То, что видит оператор.',
  'next_label'=>'ДАЛЬШЕ',
  'next_title'=>'Можно остаться обычным пользователем — или участвовать глубже.',
  'wallet'=>'Кошелёк',
  'mining'=>'Майнинг Testnet',
  'docs'=>'Документация'
] : [
  'eyebrow'=>'VALDR FULL NODE',
  'title'=>'Verify the network yourself.',
  'lead'=>'A full node keeps its own validated blockchain state, synchronizes with peers and independently decides which blocks and transactions satisfy VALDR protocol rules.',
  'status'=>'DESKTOP DEFAULT',
  'status_text'=>'Ordinary users run in outbound-only mode: the application connects to peers by itself and does not require an inbound P2P port on the router.',
  'why_label'=>'WHY RUN A NODE',
  'why_title'=>'Do not ask another server which chain is valid.',
  'why_text'=>'A node receives data from peers, but it trusts protocol rules rather than peer claims. It validates Proof of Work, linkage, timestamps, transactions, UTXO changes and cumulative chainwork locally.',
  'sync_label'=>'SYNCHRONIZATION',
  'sync_title'=>'Headers first. Blocks second.',
  'sync_text'=>'VALDR uses headers-first synchronization: the node validates the header sequence before requesting corresponding block bodies in bounded batches.',
  'home_label'=>'HOME MODE',
  'home_title'=>'Desktop only needs outbound connections by default.',
  'home_text'=>'Desktop does not turn the computer into a public server automatically. The node maintains outbound peers, persists a learned-peer cache and resumes synchronization from stored state after restart.',
  'public_label'=>'PUBLIC FULL NODE',
  'public_title'=>'Public mode is an explicit operator choice.',
  'public_text'=>'An advanced user may make the node reachable for inbound P2P connections. That requires deliberate network configuration and a real routable endpoint. RPC remains localhost-only by default.',
  'security_label'=>'SECURITY BOUNDARIES',
  'security_title'=>'The node should never receive wallet secrets.',
  'security_text'=>'Private keys and passphrases do not travel over P2P and do not belong in node RPC. Explorer remains a separate read-only service.',
  'restart_label'=>'RESTART',
  'restart_title'=>'Turning off a computer does not break the network.',
  'restart_text'=>'While the computer is off, the node simply stops participating. On restart it opens the persisted database, restores local chain state and catches up on missing blocks.',
  'advanced_label'=>'ADVANCED',
  'advanced_title'=>'What an operator can inspect.',
  'next_label'=>'NEXT',
  'next_title'=>'Stay a normal user — or participate more deeply.',
  'wallet'=>'Wallet',
  'mining'=>'Testnet Mining',
  'docs'=>'Documentation'
];

$checks = $isRu ? [
  ['n'=>'01','title'=>'Network identity','text'=>'Проверяет, что данные относятся к активному VALDR network profile.'],
  ['n'=>'02','title'=>'Header + PoW','text'=>'Проверяет linkage, target, timestamp, difficulty rules и Proof of Work.'],
  ['n'=>'03','title'=>'Transactions','text'=>'Проверяет подписи, UTXO spending, fees и consensus size limits.'],
  ['n'=>'04','title'=>'Chainwork','text'=>'Выбирает действительную ветку с наибольшей накопленной работой.'],
  ['n'=>'05','title'=>'State','text'=>'Атомарно обновляет chain, UTXO, indexes и undo data в persistent storage.']
] : [
  ['n'=>'01','title'=>'Network identity','text'=>'Checks that data belongs to the active VALDR network profile.'],
  ['n'=>'02','title'=>'Header + PoW','text'=>'Validates linkage, target, timestamp, difficulty rules and Proof of Work.'],
  ['n'=>'03','title'=>'Transactions','text'=>'Validates signatures, UTXO spending, fees and consensus size limits.'],
  ['n'=>'04','title'=>'Chainwork','text'=>'Selects the valid branch with the greatest cumulative work.'],
  ['n'=>'05','title'=>'State','text'=>'Atomically updates chain, UTXO, indexes and undo data in persistent storage.']
];

$advanced = $isRu ? [
  ['k'=>'PEERS','v'=>'Outbound / inbound','text'=>'Список peers, connection state и сетевые endpoints.'],
  ['k'=>'CHAIN','v'=>'Tip + chainwork','text'=>'Local height, best known height, active tip и cumulative work.'],
  ['k'=>'SYNC','v'=>'Headers + blocks','text'=>'Прогресс синхронизации и состояние загрузки chain data.'],
  ['k'=>'MEMPOOL','v'=>'Pending tx','text'=>'Текущее policy-state ожидающих transactions.'],
  ['k'=>'STORAGE','v'=>'Persistent DB','text'=>'Node data path, database state и diagnostics.'],
  ['k'=>'LOGS','v'=>'Structured','text'=>'NODE/P2P/BLOCK/TX/SYNC/ERROR и другие категории без secret material.']
] : [
  ['k'=>'PEERS','v'=>'Outbound / inbound','text'=>'Peer list, connection state and network endpoints.'],
  ['k'=>'CHAIN','v'=>'Tip + chainwork','text'=>'Local height, best known height, active tip and cumulative work.'],
  ['k'=>'SYNC','v'=>'Headers + blocks','text'=>'Synchronization progress and chain-data download state.'],
  ['k'=>'MEMPOOL','v'=>'Pending tx','text'=>'Current policy state for transactions waiting to be mined.'],
  ['k'=>'STORAGE','v'=>'Persistent DB','text'=>'Node data path, database state and diagnostics.'],
  ['k'=>'LOGS','v'=>'Structured','text'=>'NODE/P2P/BLOCK/TX/SYNC/ERROR and other categories without secret material.']
];
?>
<section class="node-hero">
  <div class="node-hero-copy">
    <div class="eyebrow"><?= h($c['eyebrow']) ?></div>
    <h1><?= h($c['title']) ?></h1>
    <p><?= h($c['lead']) ?></p>
    <div class="node-status">
      <strong><?= h($c['status']) ?></strong>
      <span><?= h($c['status_text']) ?></span>
    </div>
  </div>

  <div class="node-network-visual" aria-hidden="true">
    <div class="node-machine">
      <small>YOUR COMPUTER</small>
      <strong>VALDR NODE</strong>
      <span>VALIDATING</span>
      <i></i>
    </div>
    <div class="node-peer peer-a"><b>PEER</b><small>17333</small></div>
    <div class="node-peer peer-b"><b>PEER</b><small>17333</small></div>
    <div class="node-peer peer-c"><b>PEER</b><small>17333</small></div>
    <div class="node-peer peer-d"><b>PEER</b><small>17333</small></div>
    <div class="node-link la"></div><div class="node-link lb"></div><div class="node-link lc"></div><div class="node-link ld"></div>
  </div>
</section>

<section class="section node-why">
  <div class="section-heading"><span><?= h($c['why_label']) ?></span><h2><?= h($c['why_title']) ?></h2></div>
  <p class="big-copy"><?= h($c['why_text']) ?></p>
</section>

<section class="node-validation">
  <?php foreach($checks as $item): ?>
    <article>
      <span><?= h($item['n']) ?></span>
      <h2><?= h($item['title']) ?></h2>
      <p><?= h($item['text']) ?></p>
    </article>
  <?php endforeach; ?>
</section>

<section class="node-sync">
  <div>
    <span><?= h($c['sync_label']) ?></span>
    <h2><?= h($c['sync_title']) ?></h2>
    <p><?= h($c['sync_text']) ?></p>
  </div>
  <div class="node-sync-visual" aria-hidden="true">
    <div class="sync-row"><b>HEADERS</b><i></i><i></i><i></i><i></i><i></i><span>VALIDATE</span></div>
    <div class="sync-arrow">↓</div>
    <div class="sync-row blocks"><b>BLOCKS</b><i></i><i></i><i></i><span>REQUEST</span></div>
    <div class="sync-arrow">↓</div>
    <div class="sync-row chain"><b>CHAIN</b><i></i><i></i><i></i><i></i><span>COMMIT</span></div>
  </div>
</section>

<section class="node-modes">
  <article class="home">
    <span><?= h($c['home_label']) ?></span>
    <h2><?= h($c['home_title']) ?></h2>
    <p><?= h($c['home_text']) ?></p>
    <div class="node-mode-diagram" aria-hidden="true">
      <div class="mode-pc">DESKTOP</div><b>→</b><div class="mode-cloud">OUTBOUND PEERS</div>
    </div>
  </article>
  <article class="public">
    <span><?= h($c['public_label']) ?></span>
    <h2><?= h($c['public_title']) ?></h2>
    <p><?= h($c['public_text']) ?></p>
    <div class="node-mode-diagram reverse" aria-hidden="true">
      <div class="mode-cloud">INTERNET PEERS</div><b>↔</b><div class="mode-pc">PUBLIC NODE</div>
    </div>
  </article>
</section>

<section class="node-security">
  <div class="node-security-lock" aria-hidden="true">LOCAL</div>
  <div>
    <span><?= h($c['security_label']) ?></span>
    <h2><?= h($c['security_title']) ?></h2>
    <p><?= h($c['security_text']) ?></p>
  </div>
  <div class="node-rpc-card">
    <small>RPC</small><strong>127.0.0.1</strong><span>LOCALHOST ONLY</span>
  </div>
</section>

<section class="node-advanced">
  <div class="node-advanced-head">
    <span><?= h($c['advanced_label']) ?></span>
    <h2><?= h($c['advanced_title']) ?></h2>
  </div>
  <div class="node-advanced-grid">
    <?php foreach($advanced as $item): ?>
      <article>
        <small><?= h($item['k']) ?></small>
        <strong><?= h($item['v']) ?></strong>
        <p><?= h($item['text']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="node-restart">
  <div>
    <span><?= h($c['restart_label']) ?></span>
    <h2><?= h($c['restart_title']) ?></h2>
    <p><?= h($c['restart_text']) ?></p>
  </div>
  <div class="node-restart-flow" aria-hidden="true">
    <div><small>01</small><b>STOP</b></div><i>→</i>
    <div><small>02</small><b>DISK STATE</b></div><i>→</i>
    <div><small>03</small><b>START</b></div><i>→</i>
    <div><small>04</small><b>RESYNC</b></div>
  </div>
</section>

<section class="node-next">
  <div>
    <span><?= h($c['next_label']) ?></span>
    <h2><?= h($c['next_title']) ?></h2>
  </div>
  <div class="node-next-actions">
    <a class="button ghost" href="<?= h(route_url('/wallet',$lang)) ?>"><?= h($c['wallet']) ?></a>
    <a class="button primary" href="<?= h(route_url('/mining',$lang)) ?>"><?= h($c['mining']) ?></a>
    <a class="button ghost" href="<?= h(route_url('/docs',$lang)) ?>"><?= h($c['docs']) ?></a>
  </div>
</section>

<?php require dirname(__DIR__).'/includes/footer.php'; ?>
