<?php
$pageKey='wallet';
$pagePath='/wallet';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';

$isRu = $lang === 'ru';
$c = $isRu ? [
  'eyebrow'=>'VALDR WALLET',
  'title'=>'Твои ключи. Твой VDR.',
  'lead'=>'VALDR Wallet — локальная часть Desktop, которая создаёт адреса, защищает private key и подписывает транзакции на твоём компьютере. Сайт не хранит wallet password и не просит private key.',
  'testnet'=>'TESTNET WALLET',
  'testnet_text'=>'Текущий пользовательский путь относится к Testnet. Mainnet wallet ещё не выпускается.',
  'security_label'=>'КАК ЗАЩИЩЁН WALLET',
  'security_title'=>'Private key не хранится открытым текстом.',
  'security_text'=>'Wallet v2 шифрует secret payload локально. Passphrase не передаётся node, P2P-сети или сайту.',
  'flow_label'=>'ПУТЬ ТРАНЗАКЦИИ',
  'flow_title'=>'От Send до подтверждения в цепи.',
  'receive_label'=>'RECEIVE',
  'receive_title'=>'Чтобы получить VDR, нужен только публичный адрес.',
  'receive_text'=>'Активный VDR address можно показать отправителю или скопировать из Desktop. QR-код генерируется локально — внешний web service для него не требуется.',
  'send_label'=>'SEND',
  'send_title'=>'Перед подписью пользователь видит сумму, fee и total spend.',
  'send_text'=>'Desktop проверяет адрес и сумму, показывает комиссию и требует явного подтверждения. Только после этого wallet локально подписывает transaction и передаёт её node для broadcast.',
  'backup_label'=>'BACKUP & RECOVERY',
  'backup_title'=>'Backup должен пережить потерю компьютера.',
  'backup_text'=>'Encrypted wallet backup хранится отдельно от node data. Restore возвращает wallet, но потерянный private key нельзя восстановить через сайт, node operator или поддержку.',
  'danger_label'=>'ВАЖНО',
  'danger_title'=>'Никому не передавай private key или passphrase.',
  'danger_text'=>'Официальный сайт VALDR не содержит формы для private key, seed, passphrase или wallet password. Любой сайт или сообщение, которое просит такие данные, следует считать подозрительным.',
  'desktop_label'=>'В DESKTOP',
  'desktop_title'=>'Простой режим — без лишней инфраструктуры.',
  'desktop_text'=>'Overview, Send, Receive, Transactions и Backup доступны в Simple mode. Node запускается как managed local process, а wallet signing остаётся в Desktop.',
  'learn'=>'Узнать о безопасности',
  'download'=>'Страница загрузки'
] : [
  'eyebrow'=>'VALDR WALLET',
  'title'=>'Your keys. Your VDR.',
  'lead'=>'VALDR Wallet is the local Desktop component that creates addresses, protects the private key and signs transactions on your computer. The website does not store wallet passwords and never asks for a private key.',
  'testnet'=>'TESTNET WALLET',
  'testnet_text'=>'The current user flow is for Testnet. A Mainnet wallet has not been released.',
  'security_label'=>'WALLET SECURITY',
  'security_title'=>'The private key is not stored in plaintext.',
  'security_text'=>'Wallet v2 encrypts the secret payload locally. The passphrase is not sent to the node, the P2P network or the website.',
  'flow_label'=>'TRANSACTION FLOW',
  'flow_title'=>'From Send to chain confirmation.',
  'receive_label'=>'RECEIVE',
  'receive_title'=>'To receive VDR, you only need a public address.',
  'receive_text'=>'The active VDR address can be copied from Desktop or shown to the sender. The QR code is generated locally; no external web service is required.',
  'send_label'=>'SEND',
  'send_title'=>'Before signing, the user sees amount, fee and total spend.',
  'send_text'=>'Desktop validates the address and amount, displays the fee and requires explicit confirmation. Only then does the wallet sign locally and hand the transaction to the node for broadcast.',
  'backup_label'=>'BACKUP & RECOVERY',
  'backup_title'=>'A backup should survive the loss of the computer.',
  'backup_text'=>'The encrypted wallet backup is kept separately from node data. Restore brings the wallet back, but a lost private key cannot be reconstructed by the website, a node operator or support.',
  'danger_label'=>'IMPORTANT',
  'danger_title'=>'Never share your private key or passphrase.',
  'danger_text'=>'The official VALDR website contains no form for a private key, seed, passphrase or wallet password. Any website or message asking for those secrets should be treated as suspicious.',
  'desktop_label'=>'IN DESKTOP',
  'desktop_title'=>'Simple mode without infrastructure work.',
  'desktop_text'=>'Overview, Send, Receive, Transactions and Backup are available in Simple mode. The node runs as a managed local process while wallet signing stays inside Desktop.',
  'learn'=>'Read security guidance',
  'download'=>'Download page'
];

$security = $isRu ? [
  ['k'=>'KDF','v'=>'scrypt','text'=>'Passphrase превращается в 256-bit encryption key; текущие параметры N=32768, r=8, p=1.'],
  ['k'=>'CIPHER','v'=>'AES-256-GCM','text'=>'Authenticated encryption защищает private-key payload и обнаруживает изменение ciphertext.'],
  ['k'=>'SALT','v'=>'16 BYTE','text'=>'Каждый wallet получает случайный salt; nonce для encryption также генерируется заново.'],
  ['k'=>'FILES','v'=>'LOCAL','text'=>'Wallet file и directory получают ограниченные permissions там, где это поддерживает OS.']
] : [
  ['k'=>'KDF','v'=>'scrypt','text'=>'The passphrase derives a 256-bit encryption key; current parameters are N=32768, r=8, p=1.'],
  ['k'=>'CIPHER','v'=>'AES-256-GCM','text'=>'Authenticated encryption protects the private-key payload and detects ciphertext modification.'],
  ['k'=>'SALT','v'=>'16 BYTE','text'=>'Each wallet gets a random salt, and encryption uses a fresh random nonce.'],
  ['k'=>'FILES','v'=>'LOCAL','text'=>'Wallet files and directories use restricted permissions where the operating system supports them.']
];

$flow = $isRu ? [
  ['n'=>'01','title'=>'Ввод','text'=>'VDR address + amount. Desktop валидирует данные.'],
  ['n'=>'02','title'=>'Preview','text'=>'Показываются fee и total spend до подписи.'],
  ['n'=>'03','title'=>'Confirm','text'=>'Пользователь подтверждает необратимую отправку.'],
  ['n'=>'04','title'=>'Sign','text'=>'Wallet unlocks key material локально и подписывает transaction.'],
  ['n'=>'05','title'=>'Broadcast','text'=>'Signed transaction передаётся local node и дальше peers.'],
  ['n'=>'06','title'=>'Confirmations','text'=>'Transactions view показывает pending, block и confirmations.']
] : [
  ['n'=>'01','title'=>'Input','text'=>'VDR address + amount. Desktop validates the data.'],
  ['n'=>'02','title'=>'Preview','text'=>'Fee and total spend are shown before signing.'],
  ['n'=>'03','title'=>'Confirm','text'=>'The user confirms the irreversible send action.'],
  ['n'=>'04','title'=>'Sign','text'=>'The wallet unlocks key material locally and signs the transaction.'],
  ['n'=>'05','title'=>'Broadcast','text'=>'The signed transaction goes to the local node and then peers.'],
  ['n'=>'06','title'=>'Confirmations','text'=>'Transactions view shows pending state, block and confirmations.']
];
?>
<section class="wallet-hero">
  <div class="wallet-hero-copy">
    <div class="eyebrow"><?= h($c['eyebrow']) ?></div>
    <h1><?= h($c['title']) ?></h1>
    <p><?= h($c['lead']) ?></p>
    <div class="wallet-status"><strong><?= h($c['testnet']) ?></strong><span><?= h($c['testnet_text']) ?></span></div>
  </div>

  <div class="wallet-device" aria-hidden="true">
    <div class="wallet-device-top"><span>VALDR</span><i></i><i></i><i></i></div>
    <div class="wallet-device-body">
      <small>TESTNET · ENCRYPTED</small>
      <span>BALANCE</span>
      <strong>50.00000000 <em>VDR</em></strong>
      <div class="wallet-device-actions"><b>SEND</b><b>RECEIVE</b></div>
      <div class="wallet-device-line"><i></i><span>LOCAL NODE</span><b>SYNCING</b></div>
      <div class="wallet-device-line"><i></i><span>WALLET</span><b>LOCKED</b></div>
    </div>
  </div>
</section>

<section class="section wallet-security-intro">
  <div class="section-heading"><span><?= h($c['security_label']) ?></span><h2><?= h($c['security_title']) ?></h2></div>
  <p class="big-copy"><?= h($c['security_text']) ?></p>
</section>

<section class="wallet-security-grid">
  <?php foreach($security as $item): ?>
    <article>
      <small><?= h($item['k']) ?></small>
      <strong><?= h($item['v']) ?></strong>
      <p><?= h($item['text']) ?></p>
    </article>
  <?php endforeach; ?>
</section>

<section class="wallet-flow-wrap">
  <div class="wallet-flow-head">
    <span><?= h($c['flow_label']) ?></span>
    <h2><?= h($c['flow_title']) ?></h2>
  </div>
  <div class="wallet-flow">
    <?php foreach($flow as $item): ?>
      <article>
        <span><?= h($item['n']) ?></span>
        <h3><?= h($item['title']) ?></h3>
        <p><?= h($item['text']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="wallet-actions-band">
  <article class="wallet-action receive">
    <span><?= h($c['receive_label']) ?></span>
    <h2><?= h($c['receive_title']) ?></h2>
    <p><?= h($c['receive_text']) ?></p>
    <div class="wallet-address-demo" aria-hidden="true">
      <small>VDR ADDRESS</small><code>VDR1••••••••••••••••••••8F2A</code><b>▣</b>
    </div>
  </article>
  <article class="wallet-action send">
    <span><?= h($c['send_label']) ?></span>
    <h2><?= h($c['send_title']) ?></h2>
    <p><?= h($c['send_text']) ?></p>
    <div class="wallet-send-demo" aria-hidden="true">
      <div><small>AMOUNT</small><b>10.00000000 VDR</b></div>
      <div><small>FEE</small><b>0.00001240 VDR</b></div>
      <div><small>TOTAL</small><b>10.00001240 VDR</b></div>
    </div>
  </article>
</section>

<section class="wallet-backup">
  <div class="wallet-backup-visual" aria-hidden="true">
    <div class="wallet-file-card primary"><span>WALLET</span><b>ENCRYPTED</b><small>AES-256-GCM</small></div>
    <div class="wallet-file-link"></div>
    <div class="wallet-file-card"><span>BACKUP</span><b>OFF DEVICE</b><small>RESTORE READY</small></div>
  </div>
  <div>
    <span><?= h($c['backup_label']) ?></span>
    <h2><?= h($c['backup_title']) ?></h2>
    <p><?= h($c['backup_text']) ?></p>
  </div>
</section>

<section class="wallet-danger">
  <div class="wallet-danger-symbol" aria-hidden="true">!</div>
  <div>
    <span><?= h($c['danger_label']) ?></span>
    <h2><?= h($c['danger_title']) ?></h2>
    <p><?= h($c['danger_text']) ?></p>
  </div>
  <a class="button ghost" href="<?= h(route_url('/security',$lang)) ?>"><?= h($c['learn']) ?></a>
</section>

<section class="wallet-desktop">
  <div>
    <span><?= h($c['desktop_label']) ?></span>
    <h2><?= h($c['desktop_title']) ?></h2>
    <p><?= h($c['desktop_text']) ?></p>
    <div class="split-actions">
      <a class="button primary" href="<?= h(route_url('/download',$lang)) ?>"><?= h($c['download']) ?></a>
      <a class="button ghost" href="<?= h(route_url('/technology',$lang)) ?>"><?= h($isRu ? 'Технология' : 'Technology') ?></a>
    </div>
  </div>
  <div class="wallet-desktop-menu" aria-hidden="true">
    <span class="active">OVERVIEW</span><span>SEND</span><span>RECEIVE</span><span>TRANSACTIONS</span><span>WALLET BACKUP</span>
  </div>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
