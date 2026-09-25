<?php
$pageKey='faq';
$pagePath='/faq';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';
$isRu=$lang==='ru';
$c=$isRu?[
 'eyebrow'=>'VALDR FAQ','title'=>'Коротко о том, что происходит.','lead'=>'Без рекламных обещаний: что уже существует, что сейчас тестируется и чего в VALDR пока нет.',
 'more'=>'НЕ НАШЁЛ ОТВЕТ?','more_t'=>'Иди к документации или исходному коду.','docs'=>'Documentation','source'=>'Source code'
]:[
 'eyebrow'=>'VALDR FAQ','title'=>'Straight answers about what is happening.','lead'=>'No promotional promises: what already exists, what is currently being tested and what VALDR does not have yet.',
 'more'=>'STILL HAVE A QUESTION?','more_t'=>'Go to the documentation or the source code.','docs'=>'Documentation','source'=>'Source code'
];
$faq=$isRu?[
 ['Что такое VALDR?','VALDR — независимый Proof-of-Work blockchain project со своей сетью, node software, wallet, miner, Explorer и native VDR. Текущий публичный этап — Testnet development.'],
 ['Что такое VDR?','VDR — native unit сети VALDR. Она создаётся и проверяется protocol rules внутри самой chain.'],
 ['Mainnet уже работает?','Нет. Mainnet не запущен. Mainnet profile, финальные launch parameters и Genesis должны появиться только в отдельной утверждённой спецификации после Testnet gates.'],
 ['Можно ли сейчас купить VDR?','Нет официальной продажи VDR и на текущем этапе нет buy/sell integration. Testnet VDR используется для тестирования software и сети.'],
 ['Можно ли майнить?','Да, Testnet software включает valdr-miner. Mining запускается явно, работает через VALDR node и каждый найденный block независимо проверяется node.'],
 ['Что делает Full Node?','Она хранит собственный validated chain state, проверяет consensus rules, синхронизируется с peers, обрабатывает mempool и участвует в P2P relay.'],
 ['Нужно ли открывать порт на роутере?','Обычному Desktop user — нет. Default mode outbound-only. Public inbound Full Node включается отдельно в Advanced mode.'],
 ['Где находятся private keys?','В локальном encrypted wallet. Официальный сайт, P2P и Explorer не должны получать private key или wallet passphrase.'],
 ['Можно ли скачать Desktop сейчас?','Development packages уже собираются и проходят CI/provenance checks, но публичный Testnet release ещё закрыт gates. Download page не показывает фиктивные installer links.'],
 ['Что такое Explorer?','Отдельный read-only service для blocks, transactions, addresses, mempool и network status. Он не подписывает transactions и не управляет wallet.'],
 ['Кто делает VALDR?','Проект ведёт один обычный человек, используя ChatGPT как AI-инструмент для исследования, ТЗ, кода, тестирования, документации и сайта. Ответственность и решения остаются у человека.'],
 ['Что будет дальше?','Сначала нужно закрыть Desktop/release acceptance, затем distributed user-run Testnet. Mainnet рассматривается только после подтверждённой работы Testnet.']
]:[
 ['What is VALDR?','VALDR is an independent Proof-of-Work blockchain project with its own network, node software, wallet, miner, Explorer and native VDR. The current public stage is Testnet development.'],
 ['What is VDR?','VDR is the native unit of the VALDR network. It is created and validated by protocol rules inside the chain itself.'],
 ['Is Mainnet live?','No. Mainnet has not launched. The Mainnet profile, final launch parameters and Genesis must be defined in a separately approved specification after Testnet gates.'],
 ['Can I buy VDR now?','There is no official VDR sale and no buy/sell integration at the current stage. Testnet VDR is used for software and network testing.'],
 ['Can I mine?','Yes, the Testnet software includes valdr-miner. Mining is explicitly started, works through a VALDR node and every solved block is independently validated by the node.'],
 ['What does a Full Node do?','It keeps its own validated chain state, checks consensus rules, synchronizes with peers, processes mempool policy and participates in P2P relay.'],
 ['Do I need to open a router port?','Not as an ordinary Desktop user. Default mode is outbound-only. Public inbound Full Node mode is an explicit Advanced option.'],
 ['Where are private keys stored?','In the local encrypted wallet. The official website, P2P network and Explorer should never receive your private key or wallet passphrase.'],
 ['Can I download Desktop now?','Development packages are already built and pass CI/provenance checks, but the public Testnet release is still gated. The Download page does not expose invented installer links.'],
 ['What is Explorer?','A separate read-only service for blocks, transactions, addresses, mempool and network status. It does not sign transactions or control wallets.'],
 ['Who is building VALDR?','The project is led by one ordinary person using ChatGPT as an AI tool for research, specifications, code, testing, documentation and the website. Responsibility and decisions remain human.'],
 ['What happens next?','Desktop/release acceptance must close first, followed by a distributed user-run Testnet. Mainnet is considered only after Testnet operation provides sufficient evidence.']
];
?>
<section class="final-hero faq-final-hero">
 <div><div class="eyebrow"><?=h($c['eyebrow'])?></div><h1><?=h($c['title'])?></h1><p><?=h($c['lead'])?></p></div>
 <div class="faq-mark" aria-hidden="true">?</div>
</section>

<section class="faq-list">
 <?php foreach($faq as $i=>$item):?>
 <details <?=$i===0?'open':''?>>
   <summary><span><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><b><?=h($item[0])?></b><i>+</i></summary>
   <p><?=h($item[1])?></p>
 </details>
 <?php endforeach;?>
</section>

<section class="final-cta">
 <div><span><?=h($c['more'])?></span><h2><?=h($c['more_t'])?></h2></div>
 <div><a class="button primary" href="<?=h(route_url('/docs',$lang))?>"><?=h($c['docs'])?></a><a class="button ghost" href="<?=h(VALDR_SOURCE_URL)?>" target="_blank" rel="noopener noreferrer"><?=h($c['source'])?></a></div>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
