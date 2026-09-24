<?php
declare(strict_types=1);
$base=rtrim($argv[1]??'http://127.0.0.1:8080','/');
$routes=['/','/download','/about','/story','/technology','/mining','/node','/wallet','/explorer','/security','/roadmap','/community','/faq','/docs','/verify','/releases'];
$errors=[];
foreach(['','?lang=ru'] as $suffix){foreach($routes as $route){$url=$base.$route.$suffix;$ctx=stream_context_create(['http'=>['ignore_errors'=>true,'timeout'=>8]]);$html=@file_get_contents($url,false,$ctx);$headers=$http_response_header??[];$status=$headers[0]??'';if($html===false||!str_contains($status,'200')){$errors[]="Route failed: $url ($status)";continue;}if(!str_contains($html,'VALDR'))$errors[]="VALDR marker missing: $url";if(str_contains($route,'download')&&preg_match('~href=["\'][^"\']+\.(exe|dmg|msi|zip|tar\.gz)["\']~i',$html))$errors[]="Unexpected executable download link: $url";}}
$ctx=stream_context_create(['http'=>['method'=>'HEAD','ignore_errors'=>true,'timeout'=>8]]);@file_get_contents($base.'/',false,$ctx);$headers=implode("\n",$http_response_header??[]);foreach(['Content-Security-Policy:','X-Content-Type-Options:','Referrer-Policy:'] as $needle){if(stripos($headers,$needle)===false)$errors[]='Missing security header: '.$needle;}
foreach(['/assets/css/site.css','/assets/js/site.js','/assets/img/valdr-mark.svg','/assets/icons/favicon.svg','/site.webmanifest'] as $asset){$body=@file_get_contents($base.$asset);if($body===false)$errors[]='Missing HTTP asset: '.$asset;}
if($errors){fwrite(STDERR,implode("\n",$errors)."\n");exit(1);}echo "HTTP smoke passed\n";
