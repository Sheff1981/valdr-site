<?php
$pageKey='explorer';
$pagePath='/explorer';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';

$isRu = $lang === 'ru';

$c = $isRu ? [
  'eyebrow'=>'VALDR EXPLORER',
  'title'=>'Смотри, что происходит в цепи.',
  'lead'=>'VALDR Explorer — отдельный read-only service для просмотра публичных blockchain data: blocks, transactions, addresses, mempool и network status.',
  'status'=>'SOFTWARE READY / TESTNET',
  'status_text'=>'Explorer software реализован и reorg-safe. Публичный Testnet endpoint ещё не публикуется до соответствующего rollout gate.',
  'search_label'=>'ПОИСК',
  'search_title'=>'Один вход для block, transaction или address.',
  'search_text'=>'Explorer распознаёт block height, 64-character block hash, txid и VDR address. Поиск не требует wallet login и не получает private keys.',
  'overview_label'=>'NETWORK OVERVIEW',
  'overview_title'=>'Публичное состояние сети без права что-либо подписывать.',
  'overview_text'=>'Status API объединяет chain status, mining info, peers, средний интервал последних blocks и состояние Explorer index.',
  'reorg_label'=>'REORG-SAFE INDEX',
  'reorg_title'=>'Explorer следует active chain, а не собственной версии истории.',
  'reorg_text'=>'Если node переключается на ветку с большей cumulative chainwork, Explorer ищет common ancestor, откатывает производный index и строит его заново вперёд по новой active chain.',
  'readonly_label'=>'READ ONLY',
  'readonly_title'=>'Explorer наблюдает. Он не управляет средствами.',
  'readonly_text'=>'Explorer не содержит signing controls, private keys или mining privileges. Его index — производные данные и может быть перестроен из blockchain без изменения consensus state.',
  'api_label'=>'API',
  'api_title'=>'Тот же read-only слой доступен программно.',
  'api_text'=>'Operator может использовать versioned HTTP endpoints для status, blocks, transaction, address и mempool. Это публичные данные; privileged RPC остаётся отдельной localhost boundary.',
  'preview'=>'ИНТЕРФЕЙС-ПРЕВЬЮ',
  'not_live'=>'Публичный endpoint ещё не опубликован',
  'next_label'=>'ДАЛЬШЕ',
  'next_title'=>'Хочешь не только смотреть цепь, но и проверять её сам?',
  'node'=>'Запустить Full Node',
  'technology'=>'Technology',
  'docs'=>'Documentation'
] : [
  'eyebrow'=>'VALDR EXPLORER',
  'title'=>'See what is happening on-chain.',
  'lead'=>'VALDR Explorer is a separate read-only service for viewing public blockchain data: blocks, transactions, addresses, mempool and network status.',
  'status'=>'SOFTWARE READY / TESTNET',
  'status_text'=>'Explorer software is implemented and reorg-safe. A public Testnet endpoint is not published until the corresponding rollout gate is reached.',
  'search_label'=>'SEARCH',
  'search_title'=>'One entry point for a block, transaction or address.',
  'search_text'=>'Explorer recognizes block height, a 64-character block hash, txid and VDR address. Search requires no wallet login and never receives private keys.',
  'overview_label'=>'NETWORK OVERVIEW',
  'overview_title'=>'Public network state with no signing authority.',
  'overview_text'=>'The status API combines chain status, mining information, peers, recent average block interval and Explorer index state.',
  'reorg_label'=>'REORG-SAFE INDEX',
  'reorg_title'=>'Explorer follows the active chain, not its own version of history.',
  'reorg_text'=>'If the node switches to a branch with greater cumulative chainwork, Explorer finds the common ancestor, rolls back derived index state and rebuilds forward on the new active chain.',
  'readonly_label'=>'READ ONLY',
  'readonly_title'=>'Explorer observes. It does not control funds.',
  'readonly_text'=>'Explorer contains no signing controls, private keys or mining privileges. Its index is derived data and can be rebuilt from the blockchain without changing consensus state.',
  'api_label'=>'API',
  'api_title'=>'The same read-only layer is available programmatically.',
  'api_text'=>'Operators can use versioned HTTP endpoints for status, blocks, transactions, addresses and mempool. These expose public data; privileged node RPC remains a separate localhost boundary.',
  'preview'=>'INTERFACE PREVIEW',
  'not_live'=>'Public endpoint not published yet',
  'next_label'=>'NEXT',
  'next_title'=>'Want to verify the chain instead of only viewing it?',
  'node'=>'Run a Full Node',
  'technology'=>'Technology',
  'docs'=>'Documentation'
];

$searchTypes = $isRu ? [
  ['k'=>'HEIGHT','title'=>'Block height','text'=>'Числовая высота active chain.'],
  ['k'=>'HASH','title'=>'Block hash','text'=>'64-character lowercase block identifier.'],
  ['k'=>'TXID','title'=>'Transaction','text'=>'Поиск transaction по её идентификатору.'],
  ['k'=>'VDR1…','title'=>'Address','text'=>'Balance, UTXOs и подтверждённая activity history.']
] : [
  ['k'=>'HEIGHT','title'=>'Block height','text'=>'Numeric height on the active chain.'],
  ['k'=>'HASH','title'=>'Block hash','text'=>'64-character lowercase block identifier.'],
  ['k'=>'TXID','title'=>'Transaction','text'=>'Look up a transaction by its identifier.'],
  ['k'=>'VDR1…','title'=>'Address','text'=>'Balance, UTXOs and confirmed activity history.']
];

$overview = $isRu ? [
  ['k'=>'CHAIN','v'=>'HEIGHT / TIP','text'=>'Текущая active chain и tip hash.'],
  ['k'=>'PEERS','v'=>'CONNECTIONS','text'=>'Peer data от node status layer.'],
  ['k'=>'MEMPOOL','v'=>'PENDING TX','text'=>'Read-only список ожидающих transactions.'],
  ['k'=>'MINING','v'=>'TARGET / REWARD','text'=>'Current target, reward и retarget information.'],
  ['k'=>'INTERVALS','v'=>'RECENT BLOCKS','text'=>'Последние block intervals и среднее время.'],
  ['k'=>'INDEX','v'=>'HEIGHT / TIP','text'=>'Высота и tip отдельного Explorer index.']
] : [
  ['k'=>'CHAIN','v'=>'HEIGHT / TIP','text'=>'Current active chain height and tip hash.'],
  ['k'=>'PEERS','v'=>'CONNECTIONS','text'=>'Peer data from the node status layer.'],
  ['k'=>'MEMPOOL','v'=>'PENDING TX','text'=>'Read-only view of transactions waiting to be mined.'],
  ['k'=>'MINING','v'=>'TARGET / REWARD','text'=>'Current target, reward and retarget information.'],
  ['k'=>'INTERVALS','v'=>'RECENT BLOCKS','text'=>'Recent block intervals and average block time.'],
  ['k'=>'INDEX','v'=>'HEIGHT / TIP','text'=>'Height and tip of the separate Explorer index.']
];

$api = [
  ['GET','/api/v1/status'],
  ['GET','/api/v1/blocks?limit=20'],
  ['GET','/api/v1/block/{height|hash}'],
  ['GET','/api/v1/tx/{txid}'],
  ['GET','/api/v1/address/{VDR1…}'],
  ['GET','/api/v1/mempool']
];
?>
<section class="explorer-hero">
  <div class="explorer-hero-copy">
    <div class="eyebrow"><?= h($c['eyebrow']) ?></div>
    <h1><?= h($c['title']) ?></h1>
    <p><?= h($c['lead']) ?></p>
    <div class="explorer-status"><strong><?= h($c['status']) ?></strong><span><?= h($c['status_text']) ?></span></div>
  </div>

  <div class="explorer-screen" aria-hidden="true">
    <div class="explorer-screen-top"><span>VALDR EXPLORER</span><b>TESTNET</b></div>
    <div class="explorer-search-demo">
      <small><?= h($c['preview']) ?></small>
      <div><span>height, block hash, txid, VDR address</span><b>SEARCH</b></div>
    </div>
    <div class="explorer-kpis">
      <div><small>HEIGHT</small><strong>—</strong></div>
      <div><small>PEERS</small><strong>—</strong></div>
      <div><small>MEMPOOL</small><strong>—</strong></div>
    </div>
    <div class="explorer-block-list">
      <div><i></i><span>BLOCK</span><code>000••••••</code><b>—</b></div>
      <div><i></i><span>BLOCK</span><code>000••••••</code><b>—</b></div>
      <div><i></i><span>BLOCK</span><code>000••••••</code><b>—</b></div>
    </div>
    <div class="explorer-offline"><?= h($c['not_live']) ?></div>
  </div>
</section>

<section class="section explorer-search-intro">
  <div class="section-heading"><span><?= h($c['search_label']) ?></span><h2><?= h($c['search_title']) ?></h2></div>
  <p class="big-copy"><?= h($c['search_text']) ?></p>
</section>

<section class="explorer-search-types">
  <?php foreach($searchTypes as $item): ?>
    <article>
      <small><?= h($item['k']) ?></small>
      <h2><?= h($item['title']) ?></h2>
      <p><?= h($item['text']) ?></p>
    </article>
  <?php endforeach; ?>
</section>

<section class="explorer-overview">
  <div class="explorer-overview-head">
    <span><?= h($c['overview_label']) ?></span>
    <h2><?= h($c['overview_title']) ?></h2>
    <p><?= h($c['overview_text']) ?></p>
  </div>
  <div class="explorer-overview-grid">
    <?php foreach($overview as $item): ?>
      <article>
        <small><?= h($item['k']) ?></small>
        <strong><?= h($item['v']) ?></strong>
        <p><?= h($item['text']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="explorer-reorg">
  <div>
    <span><?= h($c['reorg_label']) ?></span>
    <h2><?= h($c['reorg_title']) ?></h2>
    <p><?= h($c['reorg_text']) ?></p>
  </div>
  <div class="reorg-visual" aria-hidden="true">
    <div class="reorg-chain active">
      <small>ACTIVE CHAIN</small>
      <div><i></i><i></i><i></i><i></i><i></i></div>
    </div>
    <div class="reorg-branch">
      <small>OLD BRANCH</small>
      <div><i></i><i></i><i></i></div>
    </div>
    <b>COMMON ANCESTOR → REBUILD INDEX</b>
  </div>
</section>

<section class="explorer-readonly">
  <div class="explorer-readonly-mark" aria-hidden="true">R/O</div>
  <div>
    <span><?= h($c['readonly_label']) ?></span>
    <h2><?= h($c['readonly_title']) ?></h2>
    <p><?= h($c['readonly_text']) ?></p>
  </div>
  <div class="explorer-boundaries" aria-hidden="true">
    <span>NO PRIVATE KEYS</span><span>NO SIGNING</span><span>NO MINING CONTROL</span>
  </div>
</section>

<section class="explorer-api">
  <div class="explorer-api-copy">
    <span><?= h($c['api_label']) ?></span>
    <h2><?= h($c['api_title']) ?></h2>
    <p><?= h($c['api_text']) ?></p>
  </div>
  <div class="explorer-api-list">
    <?php foreach($api as $row): ?>
      <div><b><?= h($row[0]) ?></b><code><?= h($row[1]) ?></code></div>
    <?php endforeach; ?>
  </div>
</section>

<section class="explorer-next">
  <div>
    <span><?= h($c['next_label']) ?></span>
    <h2><?= h($c['next_title']) ?></h2>
  </div>
  <div class="explorer-next-actions">
    <a class="button primary" href="<?= h(route_url('/node',$lang)) ?>"><?= h($c['node']) ?></a>
    <a class="button ghost" href="<?= h(route_url('/technology',$lang)) ?>"><?= h($c['technology']) ?></a>
    <a class="button ghost" href="<?= h(route_url('/docs',$lang)) ?>"><?= h($c['docs']) ?></a>
  </div>
</section>

<?php require dirname(__DIR__).'/includes/footer.php'; ?>
