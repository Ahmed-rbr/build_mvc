<?php 
use Core\Response;

function dd($value){
  echo'<pre>';
var_dump($value);
echo'</pre>';
die();
}
function urli($value){
  return $_SERVER['REQUEST_URI']=== $value;

}
function authorize($condition,$status=Response::NOT_AUTH){
  if (!$condition){
    abort(Response::NOT_AUTH);
  
  } 
}
 
function basePath($path){

  return BASE_PATH .$path;
}

function view($path,$attributs=[]){
extract($attributs);
  require basePath('views/'.$path) ;
}

