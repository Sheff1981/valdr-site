<?php
$pageKey='docs';
$pagePath='/docs';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';
$isRu=$lang==='ru';
$c=$isRu?[
 'eyebrow'=>'VALDR DOCUMENTATION','title'=>'Начни с задачи. Потом углубляйся.','lead'=>'Документация VALDR разделена по роли: обычный пользователь, участник сети и developer/operator. Публичные тексты следуют фактическому software и verified development state.',
 'user'=>'ДЛЯ ПОЛЬЗОВАТЕЛЯ','user_t'=>'Установить, создать wallet, отправить и получить VDR.',
 'network'=>'ДЛЯ УЧАСТНИКА СЕТИ','network_t'=>'Запустить node, майнить Testnet, смотреть chain.',
 'dev'=>'ДЛЯ DEVELOPER / OPERATOR','dev_t'=>'Protocol, source code, RPC и deployment.',
 'source'=>'SOURCE OF TRUTH','source_t'=>'Код — первичный публичный технический источник.','source_p'=>'Если публичная документация расходится с исполняемым protocol code, это ошибка документации, которую нужно исправить. Consensus определяется software rules, а не marketing copy.',
 'source_btn'=>'Open VALDR Core'
]:[
 'eyebrow'=>'VALDR DOCUMENTATION','title'=>'Start with the task. Then go deeper.','lead'=>'VALDR documentation is organized by role: ordinary user, network participant and developer/operator. Public material follows the software and verified development state.',
 'user'=>'FOR USERS','user_t'=>'Install, create a wallet, send and receive VDR.',
 'network'=>'FOR NETWORK PARTICIPANTS','network_t'=>'Run a node, mine Testnet, inspect the chain.',
 'dev'=>'FOR DEVELOPERS / OPERATORS','dev_t'=>'Protocol, source code, RPC and deployment.',
 'source'=>'SOURCE OF TRUTH','source_t'=>'Code is the primary public technical source.','source_p'=>'If public documentation disagrees with executable protocol code, the documentation is wrong and should be corrected. Consensus is defined by software rules, not marketing copy.',
 'source_btn'=>'Open VALDR Core'
];

$groups=[
 [$c['user'],$c['user_t'],[
  ['/download',$isRu?'Скачать VALDR':'Download VALDR',$isRu?'Официальные platform packages и release gates.':'Official platform packages and release gates.'],
  ['/wallet','Wallet',$isRu?'Addresses, local keys, Send, Receive, backup и restore.':'Addresses, local keys, Send, Receive, backup and restore.'],
  ['/security','Security',$isRu?'Как защищать keys, software и локальные boundaries.':'Protect keys, software and local boundaries.'],
  ['/verify','Verify',$isRu?'SHA-256 и cryptographic provenance перед запуском.':'SHA-256 and cryptographic provenance before launch.']
 ]],
 [$c['network'],$c['network_t'],[
  ['/node','Full Node',$isRu?'Local validation, sync, peers, chainwork и RPC boundary.':'Local validation, sync, peers, chainwork and RPC boundary.'],
  ['/mining','Mining',$isRu?'Candidate blocks, Proof of Work, rewards и hashrate.':'Candidate blocks, Proof of Work, rewards and hashrate.'],
  ['/explorer','Explorer',$isRu?'Read-only blocks, transactions, addresses и mempool.':'Read-only blocks, transactions, addresses and mempool.'],
  ['/roadmap','Roadmap',$isRu?'Что реализовано, что проходит gates и что запланировано.':'What is implemented, gated and planned.']
 ]],
 [$c['dev'],$c['dev_t'],[
  ['/technology','Technology',$isRu?'Consensus, UTXO, P2P v2, storage и network profiles.':'Consensus, UTXO, P2P v2, storage and network profiles.'],
  ['/releases','Releases',$isRu?'Artifact matrix, manifest, provenance и publication gates.':'Artifact matrix, manifest, provenance and publication gates.'],
  ['/community','Community',$isRu?'Где находится официальный development channel.':'Where the official development channel lives.'],
  ['/faq','FAQ',$isRu?'Короткие ответы по продукту и текущему состоянию.':'Short answers about the product and current state.']
 ]]
];
?>
<section class="final-hero docs-final-hero">
 <div><div class="eyebrow"><?=h($c['eyebrow'])?></div><h1><?=h($c['title'])?></h1><p><?=h($c['lead'])?></p></div>
 <div class="docs-tree" aria-hidden="true"><div>USER</div><i></i><div>NETWORK</div><i></i><div>PROTOCOL</div><i></i><div>SOURCE</div></div>
</section>

<?php foreach($groups as $index=>$g):?>
<section class="docs-group <?=$index===1?'alt':''?>">
 <div class="docs-group-head"><span><?=h($g[0])?></span><h2><?=h($g[1])?></h2></div>
 <div class="docs-cards"><?php foreach($g[2] as $item):?><a href="<?=h(route_url($item[0],$lang))?>"><small><?=h(strtoupper(trim($item[1])))?></small><h3><?=h($item[1])?></h3><p><?=h($item[2])?></p><b>→</b></a><?php endforeach;?></div>
</section>
<?php endforeach;?>

<section class="final-split dark">
 <div><span><?=h($c['source'])?></span><h2><?=h($c['source_t'])?></h2><p><?=h($c['source_p'])?></p><a class="button primary" href="<?=h(VALDR_SOURCE_URL)?>" target="_blank" rel="noopener noreferrer"><?=h($c['source_btn'])?></a></div>
 <div class="docs-repo" aria-hidden="true"><small>Sheff1981/valdr-core</small><code>core/</code><code>p2p/</code><code>wallet/</code><code>desktop/</code><code>explorer/</code><code>cmd/</code><code>tests/</code></div>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
