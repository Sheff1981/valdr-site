<?php
$pageKey='mining';
$pagePath='/mining';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';

$isRu = $lang === 'ru';

$c = $isRu ? [
  'eyebrow'=>'VALDR MINING',
  'title'=>'Создавай blocks. Проверяй работу.',
  'lead'=>'Mining в VALDR — часть Proof-of-Work протокола. Miner получает candidate block от локальной node, ищет допустимый nonce и отправляет найденный block обратно на полную проверку.',
  'status'=>'TESTNET / ADVANCED',
  'status_text'=>'Mining запускается только явно. Desktop не майнит автоматически и не использует браузер для скрытых вычислений. Mainnet mining ещё не открыт.',
  'how_label'=>'КАК РАБОТАЕТ MINING',
  'how_title'=>'Miner предлагает block. Node решает, допустим ли он.',
  'how_text'=>'Даже найденный Proof of Work не даёт miner права изменить правила сети. Block принимается только после проверки header, target, timestamp, transactions, UTXO state и остальных consensus rules.',
  'reward_label'=>'ВОЗНАГРАЖДЕНИЕ',
  'reward_title'=>'Reward address задаётся до запуска.',
  'reward_text'=>'Coinbase создаётся для выбранного VDR address. Допустимая сумма включает protocol subsidy и fees выбранных transactions. Node сама проверяет, что miner не запросил больше разрешённого.',
  'desktop_label'=>'В DESKTOP',
  'desktop_title'=>'Start. Observe. Stop.',
  'desktop_text'=>'Advanced Mining показывает reward address, accepted blocks, текущую высоту, target, block reward, retarget state, effective hashrate и данные последнего найденного block.',
  'difficulty_label'=>'DIFFICULTY',
  'difficulty_title'=>'Target меняется по правилам сети.',
  'difficulty_text'=>'Testnet использует 60-second target block interval и retarget window в 60 blocks. Miner не выбирает difficulty вручную: действительный target вычисляется протоколом.',
  'fees_label'=>'TRANSACTIONS',
  'fees_title'=>'В block попадают допустимые transactions.',
  'fees_text'=>'Candidate block выбирает transactions детерминированно по fee rate в пределах consensus block-size limit. Coinbase идёт первой и получает subsidy плюс выбранные fees.',
  'safety_label'=>'БЕЗОПАСНОСТЬ',
  'safety_title'=>'Mining — вычислительная нагрузка, а не обещание дохода.',
  'safety_text'=>'Testnet VDR предназначен для тестирования сети. Страница не обещает стоимость, доходность, окупаемость оборудования или будущий листинг. Пользователь сам контролирует запуск и остановку miner.',
  'next_label'=>'УЧАСТВОВАТЬ В СЕТИ',
  'next_title'=>'Mining имеет смысл только вместе с проверяющей node.',
  'node'=>'Full Node',
  'wallet'=>'Wallet',
  'docs'=>'Documentation'
] : [
  'eyebrow'=>'VALDR MINING',
  'title'=>'Produce blocks. Prove the work.',
  'lead'=>'Mining in VALDR is part of the Proof-of-Work protocol. The miner receives a candidate block from the local node, searches for a valid nonce and submits the resulting block back for full validation.',
  'status'=>'TESTNET / ADVANCED',
  'status_text'=>'Mining starts only after an explicit user action. Desktop does not mine automatically and the website never performs hidden browser mining. Mainnet mining is not open.',
  'how_label'=>'HOW MINING WORKS',
  'how_title'=>'The miner proposes a block. The node decides whether it is valid.',
  'how_text'=>'Finding Proof of Work does not let a miner change network rules. A block is accepted only after header, target, timestamp, transactions, UTXO state and the remaining consensus rules all validate.',
  'reward_label'=>'REWARD',
  'reward_title'=>'Choose the reward address before starting.',
  'reward_text'=>'The coinbase is created for the selected VDR address. The allowed amount includes protocol subsidy plus fees from selected transactions. The node independently checks that the miner does not claim more than permitted.',
  'desktop_label'=>'IN DESKTOP',
  'desktop_title'=>'Start. Observe. Stop.',
  'desktop_text'=>'Advanced Mining exposes reward address, accepted blocks, current height, target, block reward, retarget state, effective hashrate and statistics for the last solved block.',
  'difficulty_label'=>'DIFFICULTY',
  'difficulty_title'=>'The network determines the target.',
  'difficulty_text'=>'Testnet uses a 60-second target block interval and a 60-block retarget window. The miner does not choose difficulty manually; the valid target is derived by protocol rules.',
  'fees_label'=>'TRANSACTIONS',
  'fees_title'=>'Only valid transactions enter a block.',
  'fees_text'=>'The candidate block selects transactions deterministically by fee rate within the consensus block-size limit. Coinbase comes first and claims subsidy plus the selected fees.',
  'safety_label'=>'SAFETY',
  'safety_title'=>'Mining is computational work, not a promise of profit.',
  'safety_text'=>'Testnet VDR exists for network testing. This page makes no promise about value, returns, hardware payback or a future exchange listing. The user explicitly controls miner start and stop.',
  'next_label'=>'PARTICIPATE IN THE NETWORK',
  'next_title'=>'Mining only makes sense together with a validating node.',
  'node'=>'Full Node',
  'wallet'=>'Wallet',
  'docs'=>'Documentation'
];

$steps = $isRu ? [
  ['n'=>'01','title'=>'Mempool','text'=>'Node держит допустимые pending transactions по policy rules.'],
  ['n'=>'02','title'=>'Template','text'=>'Transactions сортируются по fee rate и помещаются в candidate block.'],
  ['n'=>'03','title'=>'Coinbase','text'=>'Создаётся reward output на выбранный VDR address: subsidy + допустимые fees.'],
  ['n'=>'04','title'=>'Proof of Work','text'=>'Miner перебирает nonce и считает hash до попадания ниже target.'],
  ['n'=>'05','title'=>'Validation','text'=>'Найденный block проходит полную blockchain и UTXO validation.'],
  ['n'=>'06','title'=>'Relay','text'=>'После принятия block становится частью active chain и распространяется peers.']
] : [
  ['n'=>'01','title'=>'Mempool','text'=>'The node keeps valid pending transactions under policy rules.'],
  ['n'=>'02','title'=>'Template','text'=>'Transactions are ordered by fee rate and placed into a candidate block.'],
  ['n'=>'03','title'=>'Coinbase','text'=>'A reward output is created for the selected VDR address: subsidy plus allowed fees.'],
  ['n'=>'04','title'=>'Proof of Work','text'=>'The miner searches nonces and hashes until a result falls below the target.'],
  ['n'=>'05','title'=>'Validation','text'=>'The solved block goes through full blockchain and UTXO validation.'],
  ['n'=>'06','title'=>'Relay','text'=>'After acceptance, the block becomes part of the active chain and is relayed to peers.']
];

$metrics = $isRu ? [
  ['k'=>'RUNNING','v'=>'START / STOP','text'=>'Miner никогда не стартует скрытно или автоматически.'],
  ['k'=>'REWARD','v'=>'VDR1…','text'=>'Явный reward address проверяется до запуска процесса.'],
  ['k'=>'BLOCKS','v'=>'ACCEPTED','text'=>'Счётчик blocks, которые node приняла после полной проверки.'],
  ['k'=>'HASHRATE','v'=>'H/s','text'=>'Average effective hashrate считается по реально выполненным hashes и времени.'],
  ['k'=>'LAST BLOCK','v'=>'HASHES + TIME','text'=>'Hashes tried, solve time и hashrate последнего найденного block.'],
  ['k'=>'TARGET','v'=>'NETWORK','text'=>'Current target, next height и blocks until retarget приходят от node.']
] : [
  ['k'=>'RUNNING','v'=>'START / STOP','text'=>'The miner never starts silently or automatically.'],
  ['k'=>'REWARD','v'=>'VDR1…','text'=>'An explicit reward address is validated before the process starts.'],
  ['k'=>'BLOCKS','v'=>'ACCEPTED','text'=>'Count of solved blocks accepted after full node validation.'],
  ['k'=>'HASHRATE','v'=>'H/s','text'=>'Average effective hashrate is computed from actual hashes and mining time.'],
  ['k'=>'LAST BLOCK','v'=>'HASHES + TIME','text'=>'Hashes tried, solve time and hashrate for the latest solved block.'],
  ['k'=>'TARGET','v'=>'NETWORK','text'=>'Current target, next height and blocks until retarget come from the node.']
];
?>
<section class="mining-hero">
  <div class="mining-hero-copy">
    <div class="eyebrow"><?= h($c['eyebrow']) ?></div>
    <h1><?= h($c['title']) ?></h1>
    <p><?= h($c['lead']) ?></p>
    <div class="mining-status"><strong><?= h($c['status']) ?></strong><span><?= h($c['status_text']) ?></span></div>
  </div>

  <div class="mining-visual" aria-hidden="true">
    <div class="mining-target"><small>TARGET</small><code>000F••••••••</code></div>
    <div class="mining-core">
      <small>NONCE SEARCH</small>
      <strong>HASH</strong>
      <span class="mining-counter">00248175</span>
      <i></i>
    </div>
    <div class="hash-chip h1">A7D1</div>
    <div class="hash-chip h2">91C4</div>
    <div class="hash-chip h3">00FA</div>
    <div class="hash-chip h4">E238</div>
    <div class="mining-accepted">BLOCK ACCEPTED</div>
  </div>
</section>

<section class="section mining-intro">
  <div class="section-heading"><span><?= h($c['how_label']) ?></span><h2><?= h($c['how_title']) ?></h2></div>
  <p class="big-copy"><?= h($c['how_text']) ?></p>
</section>

<section class="mining-flow">
  <?php foreach($steps as $item): ?>
    <article>
      <span><?= h($item['n']) ?></span>
      <h2><?= h($item['title']) ?></h2>
      <p><?= h($item['text']) ?></p>
    </article>
  <?php endforeach; ?>
</section>

<section class="mining-reward">
  <div>
    <span><?= h($c['reward_label']) ?></span>
    <h2><?= h($c['reward_title']) ?></h2>
    <p><?= h($c['reward_text']) ?></p>
  </div>
  <div class="mining-reward-card" aria-hidden="true">
    <small>REWARD ADDRESS</small>
    <code>VDR1••••••••••••••••••••92AC</code>
    <div><span>SUBSIDY</span><b>+</b><span>FEES</span></div>
    <strong>COINBASE</strong>
  </div>
</section>

<section class="mining-desktop">
  <div class="mining-panel" aria-hidden="true">
    <div class="mining-panel-top"><span>VALDR MINING</span><b>TESTNET</b></div>
    <div class="mining-panel-grid">
      <div><small>STATUS</small><strong>RUNNING</strong></div>
      <div><small>ACCEPTED</small><strong>12</strong></div>
      <div><small>HASHRATE</small><strong>48.2 kH/s</strong></div>
      <div><small>NEXT HEIGHT</small><strong>1842</strong></div>
    </div>
    <div class="mining-panel-action">STOP MINING</div>
  </div>
  <div>
    <span><?= h($c['desktop_label']) ?></span>
    <h2><?= h($c['desktop_title']) ?></h2>
    <p><?= h($c['desktop_text']) ?></p>
  </div>
</section>

<section class="mining-metrics">
  <?php foreach($metrics as $item): ?>
    <article>
      <small><?= h($item['k']) ?></small>
      <strong><?= h($item['v']) ?></strong>
      <p><?= h($item['text']) ?></p>
    </article>
  <?php endforeach; ?>
</section>

<section class="mining-dual">
  <article class="difficulty">
    <span><?= h($c['difficulty_label']) ?></span>
    <h2><?= h($c['difficulty_title']) ?></h2>
    <p><?= h($c['difficulty_text']) ?></p>
    <div class="difficulty-line" aria-hidden="true">
      <b>60s</b><i></i><b>60 BLOCKS</b><i></i><b>RETARGET</b>
    </div>
  </article>
  <article class="transactions">
    <span><?= h($c['fees_label']) ?></span>
    <h2><?= h($c['fees_title']) ?></h2>
    <p><?= h($c['fees_text']) ?></p>
    <div class="tx-stack" aria-hidden="true">
      <div><b>COINBASE</b><small>SUBSIDY + FEES</small></div>
      <div><b>TX 01</b><small>FEE RATE ↑</small></div>
      <div><b>TX 02</b><small>FEE RATE ↓</small></div>
    </div>
  </article>
</section>

<section class="mining-safety">
  <div class="mining-safety-mark" aria-hidden="true">!</div>
  <div>
    <span><?= h($c['safety_label']) ?></span>
    <h2><?= h($c['safety_title']) ?></h2>
    <p><?= h($c['safety_text']) ?></p>
  </div>
</section>

<section class="mining-next">
  <div>
    <span><?= h($c['next_label']) ?></span>
    <h2><?= h($c['next_title']) ?></h2>
  </div>
  <div class="mining-next-actions">
    <a class="button primary" href="<?= h(route_url('/node',$lang)) ?>"><?= h($c['node']) ?></a>
    <a class="button ghost" href="<?= h(route_url('/wallet',$lang)) ?>"><?= h($c['wallet']) ?></a>
    <a class="button ghost" href="<?= h(route_url('/docs',$lang)) ?>"><?= h($c['docs']) ?></a>
  </div>
</section>

<?php require dirname(__DIR__).'/includes/footer.php'; ?>
