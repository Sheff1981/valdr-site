<?php
$pageKey='about';
$pagePath='/about';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';

$isRu = $lang === 'ru';
$c = $isRu ? [
  'eyebrow'=>'ЧТО ТАКОЕ VALDR',
  'title'=>'Независимая сеть. Нативный VDR.',
  'lead'=>'VALDR — самостоятельная Proof-of-Work блокчейн-сеть. Она хранит собственное состояние цепи, проверяет собственные транзакции, соединяет собственные ноды и создаёт блоки по правилам протокола VALDR.',
  'status'=>'СЕЙЧАС: TESTNET',
  'status_text'=>'Протокол и software stack уже существуют; Desktop и release pipeline проходят финальные product gates. Mainnet ещё не запущен.',
  'anatomy_label'=>'КАК РАБОТАЕТ СЕТЬ',
  'anatomy_title'=>'Одна операция — несколько независимых проверок.',
  'anatomy_text'=>'Простой пользователь видит отправку VDR. Под интерфейсом wallet, node, P2P и miner выполняют разные роли, а окончательное решение о действительности данных принимается одинаковыми protocol rules на каждой полноценной node.',
  'plain_label'=>'ДЛЯ ПОЛЬЗОВАТЕЛЯ',
  'plain_title'=>'Скачал. Создал кошелёк. Подключился к сети.',
  'plain_text'=>'Идея Desktop проста: обычному пользователю не нужно собирать инфраструктуру вручную. Приложение управляет локальным wallet и node, показывает синхронизацию, позволяет получать и отправлять VDR и сохраняет состояние между запусками.',
  'technical_label'=>'ТЕХНИЧЕСКИ',
  'technical_title'=>'Native chain с собственным consensus state.',
  'technical_text'=>'VALDR использует UTXO-модель, Proof of Work, cumulative chainwork, reorganization, transaction fees, bounded mempool, headers-first synchronization, P2P v2, encrypted wallet storage и отдельный read-only Explorer.',
  'principles_label'=>'ПРИНЦИПЫ',
  'principles_title'=>'Контроль остаётся на стороне пользователя.',
  'current_label'=>'ТЕКУЩИЙ ЭТАП',
  'current_title'=>'Сначала доказать Testnet в реальной работе.',
  'current_text'=>'VALDR не объявляет Mainnet готовым заранее. Сначала Desktop должен пройти acceptance, release artifacts — проверку происхождения, а затем независимые пользователи должны запустить Testnet и подтвердить стабильность сети.',
  'choose_label'=>'С ЧЕГО НАЧАТЬ',
  'choose_title'=>'Выбери, что тебе нужно от VALDR.'
] : [
  'eyebrow'=>'WHAT IS VALDR',
  'title'=>'An independent network. Native VDR.',
  'lead'=>'VALDR is a standalone Proof-of-Work blockchain network. It maintains its own chain state, validates its own transactions, connects its own nodes and produces blocks under VALDR protocol rules.',
  'status'=>'CURRENTLY: TESTNET',
  'status_text'=>'The protocol and software stack already exist; Desktop and the release pipeline are moving through final product gates. Mainnet has not launched.',
  'anatomy_label'=>'HOW THE NETWORK WORKS',
  'anatomy_title'=>'One action. Several independent checks.',
  'anatomy_text'=>'A user sees a VDR payment. Under the interface, the wallet, node, P2P layer and miner have different roles, while validity is ultimately determined by the same protocol rules enforced by full nodes.',
  'plain_label'=>'FOR USERS',
  'plain_title'=>'Install. Create a wallet. Join the network.',
  'plain_text'=>'The Desktop goal is simple: ordinary users should not have to assemble infrastructure by hand. The application manages a local wallet and node, shows synchronization, sends and receives VDR, and preserves state across restarts.',
  'technical_label'=>'TECHNICALLY',
  'technical_title'=>'A native chain with its own consensus state.',
  'technical_text'=>'VALDR uses a UTXO model, Proof of Work, cumulative chainwork, reorganization, transaction fees, a bounded mempool, headers-first synchronization, P2P v2, encrypted wallet storage and a separate read-only Explorer.',
  'principles_label'=>'PRINCIPLES',
  'principles_title'=>'Control stays with the user.',
  'current_label'=>'CURRENT STAGE',
  'current_title'=>'Prove Testnet in real operation first.',
  'current_text'=>'VALDR does not declare Mainnet ready in advance. Desktop acceptance comes first, release artifacts must be provenance-verified, and then independently operated users must run Testnet and demonstrate network stability.',
  'choose_label'=>'GET STARTED',
  'choose_title'=>'Choose what you want to do with VALDR.'
];

$flow = $isRu ? [
  ['n'=>'01','title'=>'Wallet подписывает','text'=>'Private key остаётся локально. Wallet создаёт и подписывает transaction.'],
  ['n'=>'02','title'=>'Node проверяет','text'=>'Локальная node проверяет формат, UTXO, подпись, fee и network identity до relay.'],
  ['n'=>'03','title'=>'P2P распространяет','text'=>'Принятая transaction передаётся peers; каждая node выполняет собственную проверку.'],
  ['n'=>'04','title'=>'Miner строит block','text'=>'Miner выбирает допустимые transactions, собирает candidate block и выполняет Proof of Work.'],
  ['n'=>'05','title'=>'Nodes принимают chain','text'=>'Ноды независимо проверяют block и обновляют active chain только по protocol rules.']
] : [
  ['n'=>'01','title'=>'Wallet signs','text'=>'The private key stays local. The wallet creates and signs the transaction.'],
  ['n'=>'02','title'=>'Node validates','text'=>'The local node checks format, UTXO state, signature, fee and network identity before relay.'],
  ['n'=>'03','title'=>'P2P propagates','text'=>'Accepted transactions move across peers; every node performs its own validation.'],
  ['n'=>'04','title'=>'Miner builds a block','text'=>'The miner selects valid transactions, builds a candidate block and performs Proof of Work.'],
  ['n'=>'05','title'=>'Nodes accept the chain','text'=>'Nodes independently validate the block and update the active chain only under protocol rules.']
];

$principles = $isRu ? [
  ['glyph'=>'▣','title'=>'Локальные ключи','text'=>'Private keys и passphrase не нужны сайту и не передаются по P2P.'],
  ['glyph'=>'◎','title'=>'Своя проверка','text'=>'Full node сама проверяет chain state вместо доверия внешнему серверу.'],
  ['glyph'=>'⌘','title'=>'P2P-сеть','text'=>'Участники синхронизируются друг с другом и хранят собственную проверенную цепочку.'],
  ['glyph'=>'⚒','title'=>'Явный майнинг','text'=>'Mining запускается осознанно и не выполняется скрытно в браузере или Desktop.'],
  ['glyph'=>'◇','title'=>'Read-only Explorer','text'=>'Explorer показывает публичные blockchain data и не получает signing privileges.'],
  ['glyph'=>'</>','title'=>'Открытая разработка','text'=>'Исходный код и технические изменения доступны для независимой проверки.']
] : [
  ['glyph'=>'▣','title'=>'Local keys','text'=>'Private keys and passphrases are not needed by the website and never travel over P2P.'],
  ['glyph'=>'◎','title'=>'Independent verification','text'=>'A full node validates chain state locally instead of trusting an external server.'],
  ['glyph'=>'⌘','title'=>'Peer-to-peer network','text'=>'Participants synchronize with peers and keep their own validated chain state.'],
  ['glyph'=>'⚒','title'=>'Explicit mining','text'=>'Mining is intentionally started by the user and never runs secretly in the browser or Desktop.'],
  ['glyph'=>'◇','title'=>'Read-only Explorer','text'=>'The Explorer exposes public blockchain data without signing privileges.'],
  ['glyph'=>'</>','title'=>'Open development','text'=>'Source code and technical changes are available for independent review.']
];

$paths = $isRu ? [
  ['href'=>'/wallet','k'=>'КОШЕЛЁК','title'=>'Хочу пользоваться VDR','text'=>'Как устроены адрес, encrypted wallet, Send, Receive и backup.'],
  ['href'=>'/node','k'=>'FULL NODE','title'=>'Хочу проверять сеть сам','text'=>'Запусти локальную node и храни собственное validated chain state.'],
  ['href'=>'/mining','k'=>'MINING','title'=>'Хочу майнить Testnet','text'=>'Как miner строит candidate blocks и взаимодействует с node.'],
  ['href'=>'/docs','k'=>'DEVELOPERS','title'=>'Хочу изучить протокол','text'=>'Архитектура, source code, RPC, networking и техническая документация.']
] : [
  ['href'=>'/wallet','k'=>'WALLET','title'=>'I want to use VDR','text'=>'Learn about addresses, encrypted wallets, Send, Receive and backups.'],
  ['href'=>'/node','k'=>'FULL NODE','title'=>'I want to verify the network','text'=>'Run a local node and keep your own validated view of the chain.'],
  ['href'=>'/mining','k'=>'MINING','title'=>'I want to mine Testnet','text'=>'See how the miner builds candidate blocks and works with a node.'],
  ['href'=>'/docs','k'=>'DEVELOPERS','title'=>'I want to study the protocol','text'=>'Architecture, source code, RPC, networking and technical documentation.']
];
?>
<section class="about-hero">
  <div class="about-hero-copy">
    <div class="eyebrow"><?= h($c['eyebrow']) ?></div>
    <h1><?= h($c['title']) ?></h1>
    <p><?= h($c['lead']) ?></p>
    <div class="about-status">
      <strong><?= h($c['status']) ?></strong>
      <span><?= h($c['status_text']) ?></span>
    </div>
  </div>
  <div class="about-network" aria-hidden="true">
    <div class="about-net-ring r1"></div>
    <div class="about-net-ring r2"></div>
    <div class="about-net-core"><b>VDR</b><small>CHAIN</small></div>
    <span class="about-net-node n1">NODE</span>
    <span class="about-net-node n2">P2P</span>
    <span class="about-net-node n3">PoW</span>
    <span class="about-net-node n4">UTXO</span>
    <i class="about-pulse p1"></i><i class="about-pulse p2"></i><i class="about-pulse p3"></i>
  </div>
</section>

<section class="section about-intro">
  <div class="section-heading"><span><?= h($c['anatomy_label']) ?></span><h2><?= h($c['anatomy_title']) ?></h2></div>
  <p class="big-copy"><?= h($c['anatomy_text']) ?></p>
</section>

<section class="about-flow">
  <?php foreach ($flow as $item): ?>
    <article>
      <span><?= h($item['n']) ?></span>
      <h2><?= h($item['title']) ?></h2>
      <p><?= h($item['text']) ?></p>
    </article>
  <?php endforeach; ?>
</section>

<section class="about-two-views">
  <article>
    <span><?= h($c['plain_label']) ?></span>
    <h2><?= h($c['plain_title']) ?></h2>
    <p><?= h($c['plain_text']) ?></p>
    <a class="text-link" href="<?= h(route_url('/wallet',$lang)) ?>"><?= h($isRu ? 'Открыть Wallet →' : 'Explore Wallet →') ?></a>
  </article>
  <article>
    <span><?= h($c['technical_label']) ?></span>
    <h2><?= h($c['technical_title']) ?></h2>
    <p><?= h($c['technical_text']) ?></p>
    <a class="text-link" href="<?= h(route_url('/technology',$lang)) ?>"><?= h($isRu ? 'Открыть Technology →' : 'Explore Technology →') ?></a>
  </article>
</section>

<section class="about-principles">
  <div class="about-principles-head">
    <span><?= h($c['principles_label']) ?></span>
    <h2><?= h($c['principles_title']) ?></h2>
  </div>
  <div class="about-principle-grid">
    <?php foreach ($principles as $item): ?>
      <article>
        <div><?= h($item['glyph']) ?></div>
        <h3><?= h($item['title']) ?></h3>
        <p><?= h($item['text']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="about-current">
  <div>
    <span><?= h($c['current_label']) ?></span>
    <h2><?= h($c['current_title']) ?></h2>
    <p><?= h($c['current_text']) ?></p>
  </div>
  <div class="about-current-meter" aria-label="<?= h($c['status']) ?>">
    <div class="about-meter-line"><i></i><i></i><i></i><i class="active"></i><i></i></div>
    <div class="about-meter-labels">
      <span>CORE</span><span>TESTNET</span><span>DESKTOP</span><span>RELEASE GATES</span><span>MAINNET</span>
    </div>
  </div>
</section>

<section class="about-choose">
  <div class="about-choose-head">
    <span><?= h($c['choose_label']) ?></span>
    <h2><?= h($c['choose_title']) ?></h2>
  </div>
  <div class="about-choose-grid">
    <?php foreach ($paths as $path): ?>
      <a href="<?= h(route_url($path['href'],$lang)) ?>">
        <small><?= h($path['k']) ?></small>
        <h3><?= h($path['title']) ?></h3>
        <p><?= h($path['text']) ?></p>
        <b>→</b>
      </a>
    <?php endforeach; ?>
  </div>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
