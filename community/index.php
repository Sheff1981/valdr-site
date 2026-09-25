<?php
$pageKey='community';
$pagePath='/community';
require dirname(__DIR__).'/includes/bootstrap.php';
require dirname(__DIR__).'/includes/header.php';
$isRu=$lang==='ru';
$c=$isRu?[
 'eyebrow'=>'VALDR COMMUNITY','title'=>'Сеть становится реальной, когда её запускают другие люди.','lead'=>'Пока главный официальный development channel VALDR — открытый source repository. Социальные каналы будут добавляться только после их фактического создания и подтверждения на этом сайте.',
 'now'=>'СЕЙЧАС','now_t'=>'Код, issues и development history.','now_p'=>'VALDR Core открыт для проверки. Именно там видны commits, CI и фактические изменения software.',
 'help'=>'КАК МОЖНО ПОМОЧЬ','help_t'=>'Полезнее всего независимая техническая помощь.',
 'future'=>'БУДУЩИЕ КАНАЛЫ','future_t'=>'Никаких выдуманных ссылок.','future_p'=>'Telegram, VK, X, Reddit, Discord и другие площадки появятся здесь только после создания официальных аккаунтов. Аккаунт с названием VALDR сам по себе не является официальным.',
 'thanks'=>'СПАСИБО','thanks_t'=>'Если тебе не безразлично, получится ли этот эксперимент — спасибо.','thanks_p'=>'Особенно ценны честные bug reports, независимые nodes, тестирование, review, документация, переводы и замечания по UX. Это помогает проекту больше, чем громкие обещания.',
 'source'=>'Open VALDR Core','story'=>'История проекта'
]:[
 'eyebrow'=>'VALDR COMMUNITY','title'=>'A network becomes real when other people run it.','lead'=>'For now, the primary official VALDR development channel is the open source repository. Social channels will appear only after they actually exist and are verified on this website.',
 'now'=>'RIGHT NOW','now_t'=>'Code, issues and development history.','now_p'=>'VALDR Core is open for independent review. Commits, CI and concrete software changes are visible there.',
 'help'=>'HOW TO HELP','help_t'=>'Independent technical participation is the most useful contribution.',
 'future'=>'FUTURE CHANNELS','future_t'=>'No invented links.','future_p'=>'Telegram, VK, X, Reddit, Discord and other channels will be listed only after official accounts are created. An account using the VALDR name is not automatically official.',
 'thanks'=>'THANK YOU','thanks_t'=>'If you care whether this experiment can work, thank you.','thanks_p'=>'Honest bug reports, independently operated nodes, testing, review, documentation, translations and UX criticism are especially useful. They help the project more than hype.',
 'source'=>'Open VALDR Core','story'=>'Project story'
];
$help=$isRu?[
 ['01','Запустить Testnet node','Когда distributed Testnet gate откроется, независимые nodes станут ключевой проверкой сети.'],
 ['02','Тестировать Desktop','Повторять реальные user flows и прикладывать точные steps/logs к найденным ошибкам.'],
 ['03','Проверять code','Искать consensus, networking, wallet, release и security defects.'],
 ['04','Писать bug reports','Описывать воспроизводимый сценарий, environment и наблюдаемый результат.'],
 ['05','Помогать с docs','Исправлять непонятные места, переводы и operator instructions.'],
 ['06','Давать UX feedback','Показывать, где обычному человеку непонятно, что происходит или что безопасно нажимать.']
]:[
 ['01','Run a Testnet node','When the distributed Testnet gate opens, independently operated nodes become a key network test.'],
 ['02','Test Desktop','Repeat real user flows and attach precise steps/logs to defects.'],
 ['03','Review code','Look for consensus, networking, wallet, release and security defects.'],
 ['04','Write bug reports','Describe a reproducible scenario, environment and observed result.'],
 ['05','Improve docs','Fix unclear explanations, translations and operator instructions.'],
 ['06','Give UX feedback','Show where an ordinary user cannot tell what is happening or what is safe to click.']
];
?>
<section class="final-hero community-final-hero">
 <div><div class="eyebrow"><?=h($c['eyebrow'])?></div><h1><?=h($c['title'])?></h1><p><?=h($c['lead'])?></p></div>
 <div class="community-nodes" aria-hidden="true"><div>YOU</div><i></i><div>NODE</div><i></i><div>PEER</div><i></i><div>NETWORK</div></div>
</section>

<section class="final-split dark">
 <div><span><?=h($c['now'])?></span><h2><?=h($c['now_t'])?></h2><p><?=h($c['now_p'])?></p><a class="button primary" href="<?=h(VALDR_SOURCE_URL)?>" target="_blank" rel="noopener noreferrer"><?=h($c['source'])?></a></div>
 <div class="community-repo" aria-hidden="true"><small>OFFICIAL DEVELOPMENT</small><strong>Sheff1981/valdr-core</strong><span>COMMITS</span><span>CI</span><span>ISSUES</span><span>SOURCE</span></div>
</section>

<section class="final-section">
 <div class="final-section-head"><span><?=h($c['help'])?></span><h2><?=h($c['help_t'])?></h2></div>
 <div class="final-grid three"><?php foreach($help as $h):?><article><small><?=h($h[0])?></small><h3><?=h($h[1])?></h3><p><?=h($h[2])?></p></article><?php endforeach;?></div>
</section>

<section class="final-split light">
 <div><span><?=h($c['future'])?></span><h2><?=h($c['future_t'])?></h2><p><?=h($c['future_p'])?></p></div>
 <div class="future-channels" aria-hidden="true"><span>TELEGRAM —</span><span>VK —</span><span>X —</span><span>REDDIT —</span><span>DISCORD —</span></div>
</section>

<section class="community-thanks">
 <span><?=h($c['thanks'])?></span><h2><?=h($c['thanks_t'])?></h2><p><?=h($c['thanks_p'])?></p>
 <a class="text-link" href="<?=h(route_url('/story',$lang))?>"><?=h($c['story'])?> →</a>
</section>
<?php require dirname(__DIR__).'/includes/footer.php'; ?>
