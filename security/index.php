<?php
$pageKey='security';
$pagePath='/security';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';

$isRu=$lang==='ru';
$c=$isRu?[
  'eyebrow'=>'VALDR SECURITY',
  'title'=>'Не доверяй словам. Проверяй границы.',
  'lead'=>'Безопасность VALDR строится вокруг простого принципа: секреты остаются локально, сетевые роли разделены, а software release можно проверить до запуска.',
  'status'=>'SECURITY MODEL',
  'status_text'=>'Testnet software развивается открыто. Защита строится слоями: wallet, Desktop, node, P2P, Explorer, website и release provenance.',
  'keys'=>'КЛЮЧИ И WALLET','keys_t'=>'Private key не должен покидать локальный wallet.','keys_p'=>'Wallet v2 хранит secret payload в encrypted form. Passphrase не передаётся через P2P, node RPC или официальный сайт.',
  'desktop'=>'DESKTOP','desktop_t'=>'Приложение не должно превращать удобство в новый канал утечки.','desktop_p'=>'Core UI работает на локальных assets. По проектным правилам нет telemetry и analytics SDK по умолчанию, automatic clipboard reading, automatic private-key export или silent unsigned update.',
  'node'=>'NODE / RPC','node_t'=>'Privileged RPC остаётся локальным.','node_p'=>'Desktop использует localhost boundary. Public inbound P2P включается отдельно, а private keys и passphrases не должны пересекать node RPC.',
  'web'=>'OFFICIAL WEBSITE','web_t'=>'Сайт не является wallet и не принимает секреты.','web_p'=>'Нет private-key/passphrase forms, browser mining, automatic executable downloads или обязательного remote script runtime. CSP и security headers ограничивают поверхность сайта.',
  'release'=>'RELEASE INTEGRITY','release_t'=>'Проверяй bytes и происхождение.','release_p'=>'Публичный package должен иметь SHA-256, canonical release metadata и cryptographic provenance, привязанный к repository, workflow и exact source commit.',
  'threat'=>'ЕСЛИ ЧТО-ТО ВЫГЛЯДИТ ПОДОЗРИТЕЛЬНО','threat_t'=>'Остановись до подписи или запуска файла.','threat_p'=>'Не вводи private key или passphrase на сайте. Не запускай package при несовпадении checksum/provenance. Не отключай защиту ОС глобально ради установки.',
  'rules'=>'БАЗОВЫЕ ПРАВИЛА','rules_t'=>'Что пользователь может проверить сам.',
  'next'=>'ПРОВЕРКА SOFTWARE','next_t'=>'Перед установкой пройди release verification.','verify'=>'Verify Downloads','wallet'=>'Wallet','source'=>'Source code'
]:[
  'eyebrow'=>'VALDR SECURITY',
  'title'=>'Do not trust claims. Verify boundaries.',
  'lead'=>'VALDR security follows a simple principle: secrets stay local, network roles stay separated, and a software release can be verified before it is run.',
  'status'=>'SECURITY MODEL',
  'status_text'=>'Testnet software is developed openly. Protection is layered across wallet, Desktop, node, P2P, Explorer, website and release provenance.',
  'keys'=>'KEYS & WALLET','keys_t'=>'A private key should never leave the local wallet.','keys_p'=>'Wallet v2 stores the secret payload in encrypted form. The passphrase is not sent over P2P, node RPC or the official website.',
  'desktop'=>'DESKTOP','desktop_t'=>'Convenience must not become a new secret-leak path.','desktop_p'=>'Core UI uses local assets. Project security rules prohibit telemetry and analytics SDKs by default, automatic clipboard reading, automatic private-key export and silent unsigned updates.',
  'node'=>'NODE / RPC','node_t'=>'Privileged RPC stays local.','node_p'=>'Desktop uses a localhost boundary. Public inbound P2P is an explicit option, while private keys and passphrases must not cross node RPC.',
  'web'=>'OFFICIAL WEBSITE','web_t'=>'The website is not a wallet and does not request secrets.','web_p'=>'There are no private-key/passphrase forms, browser mining, automatic executable downloads or required remote-script runtime. CSP and security headers reduce the website attack surface.',
  'release'=>'RELEASE INTEGRITY','release_t'=>'Verify both bytes and origin.','release_p'=>'A public package must have SHA-256, canonical release metadata and cryptographic provenance bound to the repository, workflow and exact source commit.',
  'threat'=>'IF SOMETHING LOOKS WRONG','threat_t'=>'Stop before signing or running the file.','threat_p'=>'Never enter a private key or passphrase into a website. Do not run a package if checksum or provenance differs. Do not disable operating-system security globally to install it.',
  'rules'=>'BASE RULES','rules_t'=>'What a user can verify independently.',
  'next'=>'VERIFY SOFTWARE','next_t'=>'Run the release-verification checks before installation.','verify'=>'Verify Downloads','wallet'=>'Wallet','source'=>'Source code'
];

$rules=$isRu?[
 ['k'=>'01','t'=>'Секреты остаются локально','p'=>'Private key, wallet password и passphrase не нужны website, peers или Explorer.'],
 ['k'=>'02','t'=>'Проверяй адрес перед Send','p'=>'Transaction необратима после принятия сетью; destination и amount проверяются до подписи.'],
 ['k'=>'03','t'=>'Храни отдельный backup','p'=>'Encrypted wallet backup должен находиться отдельно от основного устройства и node data.'],
 ['k'=>'04','t'=>'RPC не публикуется по умолчанию','p'=>'Desktop-facing privileged operations остаются на localhost.'],
 ['k'=>'05','t'=>'Проверяй release','p'=>'Filename недостаточно: сверяй SHA-256, repository, workflow и exact source commit.'],
 ['k'=>'06','t'=>'Не верь случайным аккаунтам','p'=>'Официальность канала определяется ссылками с сайта и source repositories, а не именем или логотипом.']
]:[
 ['k'=>'01','t'=>'Keep secrets local','p'=>'Private keys, wallet passwords and passphrases are not needed by the website, peers or Explorer.'],
 ['k'=>'02','t'=>'Check the address before Send','p'=>'A transaction is irreversible after network acceptance; destination and amount are reviewed before signing.'],
 ['k'=>'03','t'=>'Keep a separate backup','p'=>'An encrypted wallet backup should live separately from the primary device and node data.'],
 ['k'=>'04','t'=>'Do not expose RPC by default','p'=>'Desktop-facing privileged operations stay on localhost.'],
 ['k'=>'05','t'=>'Verify releases','p'=>'A filename is not enough: verify SHA-256, repository, workflow and exact source commit.'],
 ['k'=>'06','t'=>'Do not trust random accounts','p'=>'An official channel is identified by links from the website and source repositories, not by a name or logo.']
];
?>
<section class="final-hero security-final-hero">
  <div>
    <div class="eyebrow"><?=h($c['eyebrow'])?></div>
    <h1><?=h($c['title'])?></h1>
    <p><?=h($c['lead'])?></p>
    <div class="final-status"><strong><?=h($c['status'])?></strong><span><?=h($c['status_text'])?></span></div>
  </div>
  <div class="security-shield" aria-hidden="true">
    <div class="shield-core">VDR</div>
    <span class="s1">KEYS</span><span class="s2">RPC</span><span class="s3">P2P</span><span class="s4">RELEASE</span>
  </div>
</section>

<section class="final-grid four security-layers">
  <?php foreach([
    [$c['keys'],$c['keys_t'],$c['keys_p'],'KEY'],
    [$c['desktop'],$c['desktop_t'],$c['desktop_p'],'APP'],
    [$c['node'],$c['node_t'],$c['node_p'],'RPC'],
    [$c['web'],$c['web_t'],$c['web_p'],'WEB']
  ] as $x): ?>
  <article><small><?=h($x[0])?></small><b><?=h($x[3])?></b><h2><?=h($x[1])?></h2><p><?=h($x[2])?></p></article>
  <?php endforeach; ?>
</section>

<section class="final-split dark">
  <div>
    <span><?=h($c['release'])?></span><h2><?=h($c['release_t'])?></h2><p><?=h($c['release_p'])?></p>
    <a class="text-link" href="<?=h(route_url('/verify',$lang))?>"><?=h($c['verify'])?> →</a>
  </div>
  <div class="security-release-diagram" aria-hidden="true">
    <div>PACKAGE</div><i>→</i><div>SHA-256</div><i>+</i><div>PROVENANCE</div><i>→</i><div>RUN</div>
  </div>
</section>

<section class="final-section">
  <div class="final-section-head"><span><?=h($c['rules'])?></span><h2><?=h($c['rules_t'])?></h2></div>
  <div class="final-grid three">
    <?php foreach($rules as $r): ?><article><small><?=h($r['k'])?></small><h3><?=h($r['t'])?></h3><p><?=h($r['p'])?></p></article><?php endforeach; ?>
  </div>
</section>

<section class="final-alert">
  <div class="alert-mark" aria-hidden="true">!</div>
  <div><span><?=h($c['threat'])?></span><h2><?=h($c['threat_t'])?></h2><p><?=h($c['threat_p'])?></p></div>
</section>

<section class="final-cta">
  <div><span><?=h($c['next'])?></span><h2><?=h($c['next_t'])?></h2></div>
  <div>
    <a class="button primary" href="<?=h(route_url('/verify',$lang))?>"><?=h($c['verify'])?></a>
    <a class="button ghost" href="<?=h(route_url('/wallet',$lang))?>"><?=h($c['wallet'])?></a>
    <a class="button ghost" href="<?=h(VALDR_SOURCE_URL)?>" target="_blank" rel="noopener noreferrer"><?=h($c['source'])?></a>
  </div>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
