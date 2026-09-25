<?php
$pageKey='story';
$pagePath='/story';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';

$isRu = $lang === 'ru';
$copy = $isRu ? [
  'eyebrow'=>'ИСТОРИЯ VALDR',
  'title'=>'От вопроса к собственной цепи.',
  'lead'=>'VALDR начался не с логотипа и не с токена. Сначала появился вопрос: можно ли построить собственную криптовалюту вместе с сетью, которая сама хранит состояние, проверяет транзакции и создаёт блоки?',
  'intro_title'=>'Сначала — сеть. Потом — всё остальное.',
  'intro_text'=>'Поэтому VALDR развивается в порядке, который редко заметен пользователю сайта: протокол, node, wallet, miner, storage, P2P, синхронизация, Explorer, Desktop и только затем публичный Testnet. Такой порядок делает историю проекта технической, но её можно читать и без знания блокчейн-терминов.',
  'plain'=>'Простыми словами',
  'technical'=>'Технически',
  'today'=>'Что уже умеет VALDR',
  'today_lead'=>'Текущая линия v0.2 — это уже отдельная работающая кодовая база на Go. Public Mainnet ещё не запущен; сейчас проект проходит productization и Testnet gates.',
  'rule'=>'Правило разработки',
  'rule_text'=>'ТЗ → реализация → сборка → тест → проверка → фиксация → следующий этап.',
  'source'=>'Открытая разработка',
  'source_text'=>'Исходный код VALDR Core открыт. Любой технический пользователь может читать реализацию node, wallet, miner, P2P, Explorer и release pipeline напрямую в репозитории.',
  'source_button'=>'Открыть VALDR Core на GitHub',
  'future'=>'Следующая глава',
  'future_text'=>'После Desktop и release gates — распределённый пользовательский Testnet. Mainnet остаётся отдельным будущим этапом и не включается до отдельной спецификации и собственных проверок.',
  'status_done'=>'РЕАЛИЗОВАНО',
  'status_now'=>'СЕЙЧАС',
  'status_future'=>'ДАЛЬШЕ'
] : [
  'eyebrow'=>'THE VALDR STORY',
  'title'=>'From one question to an independent chain.',
  'lead'=>'VALDR did not begin with a logo or a token contract. It began with a question: can we build a cryptocurrency together with the network that stores its own state, validates its own transactions and produces its own blocks?',
  'intro_title'=>'Build the network first. Everything else comes after.',
  'intro_text'=>'That is why VALDR develops in an order most website visitors never see: protocol, node, wallet, miner, storage, P2P, synchronization, Explorer, Desktop, and only then a wider public Testnet. The story is technical underneath, but it should still be understandable without blockchain expertise.',
  'plain'=>'In plain language',
  'technical'=>'Technical detail',
  'today'=>'What VALDR can do today',
  'today_lead'=>'The current v0.2 line is already a separate working Go codebase. Public Mainnet is not launched; the project is currently moving through productization and Testnet gates.',
  'rule'=>'Development rule',
  'rule_text'=>'Specification → implementation → build → test → verification → commit → next stage.',
  'source'=>'Open development',
  'source_text'=>'VALDR Core source is public. Technical users can inspect the node, wallet, miner, P2P, Explorer and release pipeline directly in the repository.',
  'source_button'=>'Open VALDR Core on GitHub',
  'future'=>'The next chapter',
  'future_text'=>'After Desktop and release gates comes a distributed user-run Testnet. Mainnet remains a separate future stage and stays disabled until its own specification and verification gates exist.',
  'status_done'=>'IMPLEMENTED',
  'status_now'=>'NOW',
  'status_future'=>'NEXT'
];

$milestones = $isRu ? [
  [
    'mark'=>'01','title'=>'Идея','status'=>$copy['status_done'],
    'plain'=>'Не выпускать ещё один токен в чужой сети, а попробовать построить собственную монету вместе с собственным блокчейном.',
    'tech'=>'Архитектурная цель: native VDR, собственный chain state, UTXO, Proof of Work и независимые full nodes.'
  ],
  [
    'mark'=>'02','title'=>'Эксперимент с Bitcoin Core','status'=>$copy['status_done'],
    'plain'=>'Bitcoin стал первым техническим ориентиром: не для копирования внешнего вида, а чтобы понять, как ведёт себя настоящая независимая сеть.',
    'tech'=>'Изучались базовые модели UTXO, full-node validation, peer-to-peer networking и Proof of Work. Активная реализация VALDR затем ушла в отдельную Go-кодовую базу.'
  ],
  [
    'mark'=>'03','title'=>'Собственный VALDR Core на Go','status'=>$copy['status_done'],
    'plain'=>'Появилась отдельная программа VALDR: она создаёт блоки, хранит цепочку, создаёт кошельки, подписывает транзакции и соединяет ноды.',
    'tech'=>'valdrd, valdr-cli, valdr-miner, wallet, UTXO engine, persistent storage, RPC и P2P образовали самостоятельный runtime.'
  ],
  [
    'mark'=>'04','title'=>'Devnet v0.1','status'=>$copy['status_done'],
    'plain'=>'Первая полноценная проверка: несколько нод, майнинг, перевод VDR, перезапуск и синхронизация одной и той же цепочки.',
    'tech'=>'Зафиксирован standalone blockchain baseline с SHA-256 Proof of Work, UTXO, signed transactions, coinbase reward, mempool, TCP P2P и restart-safe chain state.'
  ],
  [
    'mark'=>'05','title'=>'Hardened v0.2','status'=>$copy['status_done'],
    'plain'=>'Сеть перестала быть только ранним прототипом: появились более строгие правила, защита от конфликтующих веток, комиссии, полная синхронизация и защищённый кошелёк.',
    'tech'=>'Storage v2, P2P v2, cumulative chainwork, reorg/undo, deterministic difficulty, fees, bounded mempool, headers-first sync, peer protection, encrypted wallet v2 и reorg-safe Explorer.'
  ],
  [
    'mark'=>'06','title'=>'VALDR Desktop + release pipeline','status'=>$copy['status_now'],
    'plain'=>'Теперь задача — сделать сеть обычным приложением: установить, создать кошелёк, синхронизироваться, отправить VDR и закрыть программу без терминала.',
    'tech'=>'Wails-based Desktop использует canonical valdrd, локальный encrypted wallet и outbound-only P2P. Cross-platform packages и cryptographic provenance уже проходят CI; ручная Windows acceptance ещё открыта.'
  ],
  [
    'mark'=>'07','title'=>'Распределённый Testnet → будущий Mainnet','status'=>$copy['status_future'],
    'plain'=>'Следом сеть должна жить между независимо запущенными пользователями. Только после длительного Testnet можно будет фиксировать отдельные правила будущего Mainnet.',
    'tech'=>'Stage 14 требует независимые user-run nodes, реальный bootstrap path и stability window. Mainnet остаётся disabled до отдельного утверждённого specification.'
  ]
] : [
  [
    'mark'=>'01','title'=>'The idea','status'=>$copy['status_done'],
    'plain'=>'Instead of issuing another token on somebody else’s network, try building the coin and the blockchain underneath it.',
    'tech'=>'Architectural goal: native VDR, its own chain state, UTXO accounting, Proof of Work and independently validating full nodes.'
  ],
  [
    'mark'=>'02','title'=>'The Bitcoin Core experiment','status'=>$copy['status_done'],
    'plain'=>'Bitcoin became the first technical reference—not as a visual template to clone, but as a way to understand how an independent cryptocurrency network behaves.',
    'tech'=>'The project studied UTXO, full-node validation, peer-to-peer networking and Proof of Work. The active VALDR implementation then moved into its own Go codebase.'
  ],
  [
    'mark'=>'03','title'=>'VALDR Core in Go','status'=>$copy['status_done'],
    'plain'=>'VALDR became its own software: it could create blocks, store a chain, create wallets, sign transactions and connect nodes.',
    'tech'=>'valdrd, valdr-cli, valdr-miner, the wallet, UTXO engine, persistent storage, RPC and P2P formed a standalone runtime.'
  ],
  [
    'mark'=>'04','title'=>'Devnet v0.1','status'=>$copy['status_done'],
    'plain'=>'The first complete proof: multiple nodes, mining, a VDR transfer, restart, and synchronization to the same chain.',
    'tech'=>'A standalone blockchain baseline was frozen with SHA-256 Proof of Work, UTXO, signed transactions, coinbase reward, mempool, TCP P2P and restart-safe chain state.'
  ],
  [
    'mark'=>'05','title'=>'Hardened v0.2','status'=>$copy['status_done'],
    'plain'=>'The network moved beyond an early prototype: stricter rules, competing-branch handling, fees, full synchronization and encrypted wallet storage were added.',
    'tech'=>'Storage v2, P2P v2, cumulative chainwork, reorg/undo, deterministic difficulty, fees, bounded mempool, headers-first sync, peer protection, encrypted wallet v2 and a reorg-safe Explorer.'
  ],
  [
    'mark'=>'06','title'=>'VALDR Desktop + release pipeline','status'=>$copy['status_now'],
    'plain'=>'The current job is turning the network into normal software: install it, create a wallet, synchronize, send VDR and close it cleanly without living in a terminal.',
    'tech'=>'The Wails-based Desktop consumes canonical valdrd, a local encrypted wallet and outbound-only P2P. Cross-platform packages and cryptographic provenance are CI-green; manual Windows acceptance is still open.'
  ],
  [
    'mark'=>'07','title'=>'Distributed Testnet → future Mainnet','status'=>$copy['status_future'],
    'plain'=>'Next, the network must operate between independently run users. Only after sustained Testnet evidence can the separate rules for a future Mainnet be frozen.',
    'tech'=>'Stage 14 requires independently operated user nodes, a real bootstrap path and a stability window. Mainnet stays disabled until a separately approved specification exists.'
  ]
];

$capabilities = $isRu ? [
  ['glyph'=>'◇','title'=>'Собственная цепь','text'=>'Блоки, Genesis, persistent chain state и независимый fork choice.'],
  ['glyph'=>'⚒','title'=>'Proof of Work','text'=>'Майнер создаёт candidate blocks, ноды независимо проверяют PoW и consensus rules.'],
  ['glyph'=>'▱','title'=>'UTXO + fees','text'=>'Signed transactions, UTXO ownership, комиссии, mempool и deterministic miner ordering.'],
  ['glyph'=>'⌘','title'=>'P2P v2','text'=>'Peer discovery, headers-first synchronization, protection limits и restart recovery.'],
  ['glyph'=>'▣','title'=>'Encrypted wallet','text'=>'Private key не хранится plaintext в wallet v2; signing выполняется локально.'],
  ['glyph'=>'◈','title'=>'Explorer','text'=>'Read-only поиск block / tx / address с reorg-safe индексом.']
] : [
  ['glyph'=>'◇','title'=>'Own chain','text'=>'Blocks, Genesis, persistent chain state and independent fork choice.'],
  ['glyph'=>'⚒','title'=>'Proof of Work','text'=>'The miner creates candidate blocks; nodes independently validate PoW and consensus rules.'],
  ['glyph'=>'▱','title'=>'UTXO + fees','text'=>'Signed transactions, UTXO ownership, fees, mempool and deterministic miner ordering.'],
  ['glyph'=>'⌘','title'=>'P2P v2','text'=>'Peer discovery, headers-first synchronization, protection limits and restart recovery.'],
  ['glyph'=>'▣','title'=>'Encrypted wallet','text'=>'Wallet v2 does not keep the private key in plaintext; signing remains local.'],
  ['glyph'=>'◈','title'=>'Explorer','text'=>'Read-only block / transaction / address search with a reorg-safe index.']
];
?>
<section class="story-hero">
  <div class="story-hero-copy">
    <div class="eyebrow"><?= h($copy['eyebrow']) ?></div>
    <h1><?= h($copy['title']) ?></h1>
    <p><?= h($copy['lead']) ?></p>
    <div class="story-hero-actions">
      <a class="button primary" href="#timeline"><?= h($isRu ? 'Смотреть историю' : 'Explore the timeline') ?></a>
      <a class="button ghost" href="<?= h(VALDR_SOURCE_URL) ?>" target="_blank" rel="noopener noreferrer"><?= h($copy['source_button']) ?></a>
    </div>
  </div>
  <div class="story-chain-visual" aria-hidden="true">
    <div class="story-orbit orbit-a"></div>
    <div class="story-orbit orbit-b"></div>
    <div class="story-core-mark">V</div>
    <div class="story-block b1"><span>GEN</span></div>
    <div class="story-block b2"><span>UTXO</span></div>
    <div class="story-block b3"><span>P2P</span></div>
    <div class="story-block b4"><span>PoW</span></div>
    <div class="story-signal s1"></div>
    <div class="story-signal s2"></div>
    <div class="story-signal s3"></div>
  </div>
</section>

<section class="section story-intro">
  <div class="section-heading"><span>VALDR</span><h2><?= h($copy['intro_title']) ?></h2></div>
  <p class="big-copy"><?= h($copy['intro_text']) ?></p>
</section>

<section class="story-capabilities-wrap">
  <div class="story-capabilities-head">
    <span><?= h($copy['today']) ?></span>
    <p><?= h($copy['today_lead']) ?></p>
  </div>
  <div class="story-capabilities">
    <?php foreach ($capabilities as $item): ?>
      <article>
        <div class="story-cap-glyph"><?= h($item['glyph']) ?></div>
        <h2><?= h($item['title']) ?></h2>
        <p><?= h($item['text']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="story-timeline-wrap" id="timeline">
  <div class="story-timeline-head">
    <div>
      <span><?= h($isRu ? 'ХРОНОЛОГИЯ' : 'TIMELINE') ?></span>
      <h2><?= h($isRu ? 'Семь шагов от идеи к сети.' : 'Seven steps from idea to network.') ?></h2>
    </div>
    <p><?= h($isRu ? 'Основной текст — для любого читателя. Технические детали раскрываются отдельно.' : 'The main story is written for anyone. Technical detail is available separately when you want it.') ?></p>
  </div>
  <div class="story-timeline">
    <?php foreach ($milestones as $i => $m): ?>
      <article class="story-stage" data-reveal>
        <div class="story-stage-marker">
          <span><?= h($m['mark']) ?></span>
          <i></i>
        </div>
        <div class="story-stage-card">
          <div class="story-stage-top">
            <h3><?= h($m['title']) ?></h3>
            <span class="story-status <?= $i < 5 ? 'done' : ($i === 5 ? 'now' : 'future') ?>"><?= h($m['status']) ?></span>
          </div>
          <div class="story-mode-label"><?= h($copy['plain']) ?></div>
          <p><?= h($m['plain']) ?></p>
          <details>
            <summary><?= h($copy['technical']) ?></summary>
            <p><?= h($m['tech']) ?></p>
          </details>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="story-rule">
  <div class="story-rule-copy">
    <span><?= h($copy['rule']) ?></span>
    <h2><?= h($copy['rule_text']) ?></h2>
  </div>
  <div class="story-rule-flow" aria-hidden="true">
    <?php foreach (($isRu ? ['ТЗ','КОД','СБОРКА','ТЕСТ','ПРОВЕРКА','COMMIT'] : ['SPEC','CODE','BUILD','TEST','VERIFY','COMMIT']) as $idx => $step): ?>
      <div><b><?= h($step) ?></b><?php if ($idx < 5): ?><span>→</span><?php endif; ?></div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section story-source">
  <div class="story-source-grid">
    <div>
      <div class="section-heading"><span><?= h($copy['source']) ?></span><h2><?= h($isRu ? 'Код важнее обещаний.' : 'Code matters more than claims.') ?></h2></div>
      <p><?= h($copy['source_text']) ?></p>
      <a class="button primary" href="<?= h(VALDR_SOURCE_URL) ?>" target="_blank" rel="noopener noreferrer"><?= h($copy['source_button']) ?></a>
    </div>
    <div class="story-repo-card">
      <div class="repo-dot-row"><i></i><i></i><i></i></div>
      <code>github.com/Sheff1981/valdr-core</code>
      <div class="repo-tree">
        <span>cmd/valdrd</span><span>core/blockchain</span><span>wallet</span><span>p2p</span><span>storage</span><span>explorer</span>
      </div>
    </div>
  </div>
</section>

<section class="story-future">
  <div>
    <span><?= h($copy['future']) ?></span>
    <h2><?= h($isRu ? 'Testnet должен доказать сеть в работе.' : 'Testnet has to prove the network in operation.') ?></h2>
    <p><?= h($copy['future_text']) ?></p>
  </div>
  <a class="button ghost" href="<?= h(route_url('/roadmap',$lang)) ?>"><?= h($isRu ? 'Открыть Roadmap' : 'Open the roadmap') ?></a>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
