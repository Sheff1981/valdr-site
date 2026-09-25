<?php
declare(strict_types=1);
$root=dirname(__DIR__); $errors=[];
$rii=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root,FilesystemIterator::SKIP_DOTS));
$php=[];
foreach($rii as $file){$path=$file->getPathname(); if(str_contains($path,DIRECTORY_SEPARATOR.'.git'.DIRECTORY_SEPARATOR))continue; if($file->getExtension()==='php')$php[]=$path;}
foreach($php as $path){$out=[];$code=0;exec('php -l '.escapeshellarg($path).' 2>&1',$out,$code);if($code!==0)$errors[]='PHP syntax: '.$path.' '.implode(' ',$out);}
foreach(['assets/css/site.css','assets/js/site.js','assets/img/valdr-mark.svg','assets/icons/favicon.svg','data/releases.json','data/roadmap.json','lang/en.php','lang/ru.php'] as $required){if(!is_file($root.'/'.$required))$errors[]='Missing required asset: '.$required;}
foreach(['releases.json','roadmap.json'] as $json){json_decode((string)file_get_contents($root.'/data/'.$json),true);if(json_last_error()!==JSON_ERROR_NONE)$errors[]='Invalid JSON: '.$json;}
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
  if(($verification['public_release_ready']??null)!==false && empty($rel['current_release']))$errors[]='Public release readiness cannot be true without current_release';
  if(!empty($rel['artifacts'])){foreach($rel['artifacts'] as $a){foreach(['filename','sha256','url','os','arch'] as $k){if(empty($a[$k]))$errors[]='Release artifact missing '.$k;}}}
}
if($errors){fwrite(STDERR,implode("\n",$errors)."\n");exit(1);} echo "Static validation passed\n";
