<?php 
define('DIR','img/');
define('MAXSIZE',50000);
$allowExt=['png','gif','pdf','doc'];
$tempLoc=$_FILES['file'];
$fileSize=$_FILES['file']['size'];
$tempLoc=$_FILES['file']['tmp_name'];
$ext=explode('/',$_FILES['file']['type'])[1];
if(!in_array($ext,$allowExt)){
  echo 'please chose correct extin';
  exit;
}
if($fileSize>=MAXSIZE){
  echo 'chose small size';
  exit;
}

$fileName=$_FILES['file']['name'];
$fileMove=DIR.$fileName;
move_uploaded_file($tempLoc,$fileMove);
print_r($_FILES['file']);
echo $ext;
?>