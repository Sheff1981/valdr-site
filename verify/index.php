<?php
$pageKey='verify';
$pagePath='/verify';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';
$rel=json_data('releases.json');
$isRu=$lang==='ru';
$ready=is_array($rel['current_release']??null) && (($rel['verification']['public_release_ready']??false)===true);
$c=$isRu?[
 'eyebrow'=>'VERIFY VALDR','title'=>'Проверь файл до запуска.','lead'=>'Имя package ничего не доказывает. VALDR использует SHA-256 для проверки bytes и GitHub/Sigstore provenance для проверки происхождения build.',
 'state'=>$ready?'PUBLIC RELEASE READY':'NO PUBLIC RELEASE YET',
 'state_p'=>$ready?'Используй metadata конкретного опубликованного release.':'Сейчас публичный Testnet release ещё не опубликован. Команды ниже — официальный verification procedure для будущего frozen release.',
 'chain'=>'VERIFICATION CHAIN','chain_t'=>'Четыре проверки до первого запуска.',
 'hash'=>'SHA-256','hash_t'=>'Проверяет точные bytes package.','hash_p'=>'Checksum скачанного файла должен точно совпасть со значением в canonical release metadata.',
 'origin'=>'PROVENANCE','origin_t'=>'Проверяет происхождение artifact.','origin_p'=>'Attestation связывает artifact с ожидаемым public repository, signer workflow и exact source commit.',
 'limits'=>'ЧТО ЭТО НЕ ДОКАЗЫВАЕТ','limits_t'=>'Provenance — не security audit.','limits_p'=>'Успешная проверка не означает, что Microsoft, Apple, GitHub или Sigstore проверяли безопасность VALDR или одобряли проект.',
 'unsigned'=>'OS SIGNING','unsigned_t'=>'Vendor signing — дополнительная защита, а не подмена provenance.','unsigned_p'=>'Если Authenticode или Developer ID/notarization недоступны, metadata должна сообщать об этом прямо. Не отключай OS security глобально.',
 'download'=>'Download','releases'=>'Releases','source'=>'Source code'
]:[
 'eyebrow'=>'VERIFY VALDR','title'=>'Verify the file before you run it.','lead'=>'A package name proves nothing. VALDR uses SHA-256 to verify exact bytes and GitHub/Sigstore provenance to verify where a build came from.',
 'state'=>$ready?'PUBLIC RELEASE READY':'NO PUBLIC RELEASE YET',
 'state_p'=>$ready?'Use the metadata for the exact published release.':'A public Testnet release is not published yet. The commands below are the official verification procedure for a future frozen release.',
 'chain'=>'VERIFICATION CHAIN','chain_t'=>'Four checks before first launch.',
 'hash'=>'SHA-256','hash_t'=>'Verifies the exact package bytes.','hash_p'=>'The checksum of the downloaded file must exactly match the value in canonical release metadata.',
 'origin'=>'PROVENANCE','origin_t'=>'Verifies artifact origin.','origin_p'=>'The attestation binds an artifact to the expected public repository, signer workflow and exact source commit.',
 'limits'=>'WHAT THIS DOES NOT PROVE','limits_t'=>'Provenance is not a security audit.','limits_p'=>'A successful verification does not mean Microsoft, Apple, GitHub or Sigstore audited VALDR security or endorsed the project.',
 'unsigned'=>'OS SIGNING','unsigned_t'=>'Vendor signing is additive hardening, not a replacement for provenance.','unsigned_p'=>'If Authenticode or Developer ID/notarization is unavailable, metadata must say so plainly. Do not disable OS security globally.',
 'download'=>'Download','releases'=>'Releases','source'=>'Source code'
];
$steps=$isRu?[
 ['01','Скачай комплект','Package + release-manifest.json + SHA256SUMS только из официального release location.'],
 ['02','Сверь SHA-256','Hash локального файла должен совпасть с canonical metadata.'],
 ['03','Сверь commit','Возьми exact 40-character source commit из release manifest.'],
 ['04','Проверь attestation','Repository, workflow и source digest должны совпасть.']
]:[
 ['01','Get the release set','Package + release-manifest.json + SHA256SUMS from the official release location only.'],
 ['02','Check SHA-256','The local file hash must match canonical metadata exactly.'],
 ['03','Check the commit','Read the exact 40-character source commit from the release manifest.'],
 ['04','Verify attestation','Repository, workflow and source digest must all match.']
];
?>
<section class="final-hero verify-final-hero">
 <div><div class="eyebrow"><?=h($c['eyebrow'])?></div><h1><?=h($c['title'])?></h1><p><?=h($c['lead'])?></p><div class="final-status"><strong><?=h($c['state'])?></strong><span><?=h($c['state_p'])?></span></div></div>
 <div class="verify-visual" aria-hidden="true"><div>ARTIFACT</div><b>SHA-256 ✓</b><b>REPOSITORY ✓</b><b>WORKFLOW ✓</b><b>COMMIT ✓</b></div>
</section>

<section class="final-section">
 <div class="final-section-head"><span><?=h($c['chain'])?></span><h2><?=h($c['chain_t'])?></h2></div>
 <div class="final-grid four"><?php foreach($steps as $s):?><article><small><?=h($s[0])?></small><h3><?=h($s[1])?></h3><p><?=h($s[2])?></p></article><?php endforeach;?></div>
</section>

<section class="final-split light">
 <div><span><?=h($c['hash'])?></span><h2><?=h($c['hash_t'])?></h2><p><?=h($c['hash_p'])?></p></div>
 <div class="verify-code-stack">
   <div><small>WINDOWS</small><code>Get-FileHash .\VALDR-Desktop-&lt;version&gt;-windows-x64-setup.exe -Algorithm SHA256</code></div>
   <div><small>macOS</small><code>shasum -a 256 VALDR-Desktop-&lt;version&gt;-macos-arm64.dmg</code></div>
   <div><small>LINUX</small><code>sha256sum VALDR-Desktop-&lt;version&gt;-linux-x64.AppImage</code></div>
 </div>
</section>

<section class="final-split dark">
 <div><span><?=h($c['origin'])?></span><h2><?=h($c['origin_t'])?></h2><p><?=h($c['origin_p'])?></p></div>
 <pre class="verify-command"><code>gh attestation verify &lt;VALDR-release-file&gt; \
  --repo Sheff1981/valdr-core \
  --signer-workflow Sheff1981/valdr-core/.github/workflows/valdr-v02-ci.yml \
  --source-digest &lt;40-character-release-commit&gt;</code></pre>
</section>

<section class="final-grid two verify-notes">
 <article><small><?=h($c['limits'])?></small><h2><?=h($c['limits_t'])?></h2><p><?=h($c['limits_p'])?></p></article>
 <article><small><?=h($c['unsigned'])?></small><h2><?=h($c['unsigned_t'])?></h2><p><?=h($c['unsigned_p'])?></p></article>
</section>

<section class="final-cta">
 <div><span>VALDR RELEASES</span><h2><?=h($isRu?'Проверка начинается с официальных metadata.':'Verification starts with official release metadata.')?></h2></div>
 <div><a class="button primary" href="<?=h(route_url('/download',$lang))?>"><?=h($c['download'])?></a><a class="button ghost" href="<?=h(route_url('/releases',$lang))?>"><?=h($c['releases'])?></a><a class="button ghost" href="<?=h(VALDR_SOURCE_URL)?>" target="_blank" rel="noopener noreferrer"><?=h($c['source'])?></a></div>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
