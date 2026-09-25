<?php
$pageKey='releases';
$pagePath='/releases';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';
$rel=json_data('releases.json');
$isRu=$lang==='ru';
$current=is_array($rel['current_release']??null)?$rel['current_release']:null;
$dev=is_array($rel['development']??null)?$rel['development']:[];
$verification=is_array($rel['verification']??null)?$rel['verification']:[];
$publicReady=$current!==null && (($verification['public_release_ready']??false)===true);

$c=$isRu?[
 'eyebrow'=>'VALDR RELEASES','title'=>'Release — это замороженное доказательство.','lead'=>'Публичный VALDR package должен быть связан с конкретной version, network, source commit, checksum и provenance. Development build сам по себе release не становится.',
 'state'=>$publicReady?'PUBLIC TESTNET RELEASE':'PUBLIC RELEASE NOT PUBLISHED',
 'state_p'=>$publicReady?'Ниже показан текущий опубликованный release.':'Development packaging и provenance уже проходят CI, но public Testnet release закрыт до завершения Stage 12 manual Windows acceptance и явной заморозки release candidate.',
 'matrix'=>'PACKAGE MATRIX','matrix_t'=>'Что уже умеет собирать release pipeline.',
 'manifest'=>'CANONICAL MANIFEST','manifest_t'=>'Один набор metadata для всех artifacts.','manifest_p'=>'Manifest связывает version, exact git commit, network identity, OS/architecture, filename, size, SHA-256 и signing/provenance status.',
 'gates'=>'PUBLICATION GATES','gates_t'=>'Пока хотя бы один обязательный gate открыт — download остаётся закрыт.',
 'history'=>'RELEASE HISTORY','history_t'=>'Публичная история начнётся с первого принятого Testnet release.',
 'download'=>'Download','verify'=>'Verify','source'=>'Source code'
]:[
 'eyebrow'=>'VALDR RELEASES','title'=>'A release is frozen evidence.','lead'=>'A public VALDR package must be bound to a specific version, network, source commit, checksum and provenance. A development build does not become a release by existing.',
 'state'=>$publicReady?'PUBLIC TESTNET RELEASE':'PUBLIC RELEASE NOT PUBLISHED',
 'state_p'=>$publicReady?'The currently published release is shown below.':'Development packaging and provenance are already CI-verified, but the public Testnet release remains gated by Stage 12 manual Windows acceptance and an explicit frozen release candidate.',
 'matrix'=>'PACKAGE MATRIX','matrix_t'=>'What the release pipeline can already build.',
 'manifest'=>'CANONICAL MANIFEST','manifest_t'=>'One metadata set for every artifact.','manifest_p'=>'The manifest binds version, exact git commit, network identity, OS/architecture, filename, size, SHA-256 and signing/provenance status.',
 'gates'=>'PUBLICATION GATES','gates_t'=>'If any mandatory gate is still open, downloads stay closed.',
 'history'=>'RELEASE HISTORY','history_t'=>'Public history begins with the first accepted Testnet release.',
 'download'=>'Download','verify'=>'Verify','source'=>'Source code'
];

$matrix=$isRu?[
 ['WINDOWS x64','Installer + portable ZIP','CI development gate green'],
 ['macOS ARM64','DMG','CI development gate green'],
 ['macOS Intel','DMG','CI development gate green'],
 ['LINUX x64','AppImage + .deb','CI development gate green']
]:[
 ['WINDOWS x64','Installer + portable ZIP','CI development gate green'],
 ['macOS ARM64','DMG','CI development gate green'],
 ['macOS Intel','DMG','CI development gate green'],
 ['LINUX x64','AppImage + .deb','CI development gate green']
];

$gates=$isRu?[
 ['01','Stage 12','Manual Windows GUI acceptance','OPEN'],
 ['02','Version freeze','Non-development Testnet release candidate','OPEN'],
 ['03','Website CI','Executing website runner + integration validation','OPEN'],
 ['04','Final verification','SHA-256 + provenance on frozen RC','OPEN'],
 ['05','Publication','Exact accepted artifacts → official release storage','WAIT']
]:[
 ['01','Stage 12','Manual Windows GUI acceptance','OPEN'],
 ['02','Version freeze','Non-development Testnet release candidate','OPEN'],
 ['03','Website CI','Executing website runner + integration validation','OPEN'],
 ['04','Final verification','SHA-256 + provenance on frozen RC','OPEN'],
 ['05','Publication','Exact accepted artifacts → official release storage','WAIT']
];
?>
<section class="final-hero releases-final-hero">
 <div><div class="eyebrow"><?=h($c['eyebrow'])?></div><h1><?=h($c['title'])?></h1><p><?=h($c['lead'])?></p><div class="final-status"><strong><?=h($c['state'])?></strong><span><?=h($c['state_p'])?></span></div></div>
 <div class="release-box" aria-hidden="true"><small>VALDR DESKTOP</small><strong><?=h((string)($dev['line']??'v0.2 development'))?></strong><span>TESTNET</span><div>SHA-256 ✓</div><div>PROVENANCE ✓</div><b>PUBLICATION GATED</b></div>
</section>

<section class="final-section">
 <div class="final-section-head"><span><?=h($c['matrix'])?></span><h2><?=h($c['matrix_t'])?></h2></div>
 <div class="release-matrix"><?php foreach($matrix as $m):?><article><small><?=h($m[0])?></small><h3><?=h($m[1])?></h3><p><?=h($m[2])?></p></article><?php endforeach;?></div>
</section>

<section class="final-split dark">
 <div><span><?=h($c['manifest'])?></span><h2><?=h($c['manifest_t'])?></h2><p><?=h($c['manifest_p'])?></p></div>
 <div class="manifest-demo" aria-hidden="true">
  <code>{</code><code>"version": "…",</code><code>"commit": "40-char…",</code><code>"network": "testnet",</code><code>"sha256": "64-char…",</code><code>"provenance": true</code><code>}</code>
 </div>
</section>

<section class="final-section">
 <div class="final-section-head"><span><?=h($c['gates'])?></span><h2><?=h($c['gates_t'])?></h2></div>
 <div class="release-gates"><?php foreach($gates as $g):?><article><small><?=h($g[0])?></small><div><b><?=h($g[1])?></b><p><?=h($g[2])?></p></div><strong class="<?=strtolower($g[3])?>"><?=h($g[3])?></strong></article><?php endforeach;?></div>
</section>

<section class="final-split light">
 <div><span><?=h($c['history'])?></span><h2><?=h($c['history_t'])?></h2><p><?=h($isRu?'Сейчас current_release = null, поэтому сайт не создаёт фиктивную версию и не показывает несуществующие download links.':'current_release is null today, so the site does not invent a version or show non-existent download links.')?></p></div>
 <div class="release-history-empty"><strong>NO PUBLIC RELEASES YET</strong><span><?=h($isRu?'Development line остаётся отделена от release history.':'The development line remains separate from release history.')?></span></div>
</section>

<section class="final-cta">
 <div><span>VALDR SOFTWARE</span><h2><?=h($isRu?'Скачивание откроется только после прохождения gates.':'Downloads open only after the gates are satisfied.')?></h2></div>
 <div><a class="button primary" href="<?=h(route_url('/download',$lang))?>"><?=h($c['download'])?></a><a class="button ghost" href="<?=h(route_url('/verify',$lang))?>"><?=h($c['verify'])?></a><a class="button ghost" href="<?=h(VALDR_SOURCE_URL)?>" target="_blank" rel="noopener noreferrer"><?=h($c['source'])?></a></div>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
