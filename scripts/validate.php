<?php
declare(strict_types=1);
$root=dirname(__DIR__); $errors=[];
$rii=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root,FilesystemIterator::SKIP_DOTS));
$php=[];
foreach($rii as $file){$path=$file->getPathname(); if(str_contains($path,DIRECTORY_SEPARATOR.'.git'.DIRECTORY_SEPARATOR))continue; if($file->getExtension()==='php')$php[]=$path;}
foreach($php as $path){$out=[];$code=0;exec('php -l '.escapeshellarg($path).' 2>&1',$out,$code);if($code!==0)$errors[]='PHP syntax: '.$path.' '.implode(' ',$out);}
foreach(['assets/css/site.css','assets/js/site.js','assets/img/valdr-mark.svg','assets/icons/favicon.svg','data/releases.json','data/roadmap.json','lang/en.php','lang/ru.php'] as $required){if(!is_file($root.'/'.$required))$errors[]='Missing required asset: '.$required;}
foreach(['releases.json','roadmap.json'] as $json){json_decode((string)file_get_contents($root.'/data/'.$json),true);if(json_last_error()!==JSON_ERROR_NONE)$errors[]='Invalid JSON: '.$json;}
$requiredRoutes=['about','getting-started','using-valdr','technology','wallet','node','mining','explorer','docs','security','community','story','faq','download','verify','releases','roadmap'];
foreach($requiredRoutes as $route){if(!is_file($root.'/'.$route.'/index.php'))$errors[]='Stage 13C route missing: /'.$route;}
foreach(['en','ru'] as $locale){
  $copy=require $root.'/lang/'.$locale.'.php';
  foreach(['home','getting_started','using_valdr','technology','wallet','node','mining','explorer','docs','security','community','story','faq','download','verify','releases','roadmap'] as $pageKey){
    if(empty($copy['pages'][$pageKey]['title'])||empty($copy['pages'][$pageKey]['lead']))$errors[]='Stage 13C '.$locale.' copy missing page '.$pageKey;
  }
  foreach(['getting_started','using_valdr'] as $navKey){if(empty($copy['nav'][$navKey]))$errors[]='Stage 13C '.$locale.' navigation missing '.$navKey;}
}
$activeContent=(string)file_get_contents($root.'/technology/index.php').(string)file_get_contents($root.'/lang/en.php').(string)file_get_contents($root.'/lang/ru.php');
foreach(['ACTIVE BASELINE: v0.2.8','planned VALDR Desktop','The planned VALDR Desktop','Планируемый VALDR Desktop','Devnet2 and Testnet','между Devnet2 и Testnet'] as $stale){
  if(str_contains($activeContent,$stale))$errors[]='Stage 13C stale active content: '.$stale;
}

$danger=['BEGIN PRIVATE KEY','BEGIN OPENSSH PRIVATE KEY','AWS_SECRET_ACCESS_KEY','ghp_','github_pat_'];
foreach($rii as $file){if(!$file->isFile()||$file->getSize()>1500000||$file->getPathname()===__FILE__)continue;$data=@file_get_contents($file->getPathname());if($data===false)continue;foreach($danger as $needle){if(str_contains($data,$needle))$errors[]='Potential secret marker '.$needle.' in '.$file->getPathname();}}
$rel=json_decode((string)file_get_contents($root.'/data/releases.json'),true);
if(!is_array($rel)){$errors[]='Release data must decode to an object';}else{
  $dev=$rel['development']??[];
  if(!is_array($dev)||!preg_match('/^[0-9a-f]{40}$/',(string)($dev['commit']??'')))$errors[]='Development release data requires exact 40-character commit';
  if(($dev['provenance_verified']??null)!==true)$errors[]='Development provenance must be explicitly verified';
  $verification=$rel['verification']??[];
  foreach(['method','repository','signer_workflow','provenance'] as $k){if(empty($verification[$k]))$errors[]='Release verification missing '.$k;}
  if(($verification['repository']??'')!=='Sheff1981/valdr-core')$errors[]='Unexpected release provenance repository';
  if(($rel['network_profile']??'')!=='testnet2')$errors[]='Active website release profile must be testnet2';
  if(($rel['chain_id']??'')!=='valdr-testnet-2')$errors[]='Active website release Chain ID must be valdr-testnet-2';
  if(($rel['network_status']??'')!=='TESTNET2')$errors[]='Active website network_status must be TESTNET2';
  if(($verification['signer_workflow']??'')!=='Sheff1981/valdr-core/.github/workflows/valdr-v02-ci.yml')$errors[]='Unexpected release signer workflow';
  if(preg_match('/testnet[-_ ]?1|valdr-testnet-1/i',(string)file_get_contents($root.'/download/index.php').(string)file_get_contents($root.'/verify/index.php').(string)file_get_contents($root.'/releases/index.php').json_encode($rel)))$errors[]='Stale Testnet1 identity found in active release surfaces';
  $current=$rel['current_release']??null; $artifacts=$rel['artifacts']??[];
  if($current===null){
    if(($verification['public_release_ready']??null)!==false)$errors[]='Public release readiness must be false without current_release';
    if(!empty($artifacts))$errors[]='Release artifacts must stay empty until current_release exists';
  }else{
    if(!is_array($current))$errors[]='current_release must be an object';
    if(($verification['public_release_ready']??null)!==true)$errors[]='Published current_release requires public_release_ready=true';
    if(!preg_match('/^[0-9a-f]{40}$/',(string)($current['commit']??'')))$errors[]='current_release requires exact 40-character commit';
    foreach(['version','release_date','network'] as $k){if(empty($current[$k]))$errors[]='current_release missing '.$k;}
    if(!is_array($artifacts)||count($artifacts)===0)$errors[]='Published current_release requires artifacts';
  }
  if(!empty($artifacts)){foreach($artifacts as $a){
    if(!is_array($a)){$errors[]='Release artifact must be an object';continue;}
    foreach(['filename','sha256','url','os','arch','size_bytes','minimum_os','signing_status','notarization_status','provenance_verified'] as $k){if(!array_key_exists($k,$a)||$a[$k]==='')$errors[]='Release artifact missing '.$k;}
    if(!preg_match('/^[0-9a-f]{64}$/',(string)($a['sha256']??'')))$errors[]='Release artifact has invalid SHA-256';
    if(!in_array((string)($a['os']??''),['windows','macos','linux'],true))$errors[]='Release artifact has unsupported os';
    if(!in_array((string)($a['arch']??''),['amd64','arm64','universal'],true))$errors[]='Release artifact has unsupported arch';
    if(!is_int($a['size_bytes']??null)||($a['size_bytes']??0)<=0)$errors[]='Release artifact size_bytes must be a positive integer';
    $url=(string)($a['url']??'');
    if(filter_var($url,FILTER_VALIDATE_URL)===false||parse_url($url,PHP_URL_SCHEME)!=='https')$errors[]='Release artifact URL must be valid HTTPS';
    if(($a['provenance_verified']??null)!==true)$errors[]='Release artifact provenance must be verified';
  }}
}
if($errors){fwrite(STDERR,implode("\n",$errors)."\n");exit(1);} echo "Static validation passed\n";
