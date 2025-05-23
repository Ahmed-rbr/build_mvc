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
function abort($code=404){
  http_response_code($code);
  require basePath("controllers/{$code}.php");
  die()
;
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


function login($user) {
    $_SESSION['user'] = [
        'email' => $user['email'],
        'user_id'    => $user['user_id']
    ];


session_regenerate_id(true);
}

function logout(){
  $_SESSION=[];
session_destroy();

$params=session_get_cookie_params();
setcookie('PHPSESSID','',time()-3600,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

}