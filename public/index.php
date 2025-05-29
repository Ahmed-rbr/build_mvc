<?php
session_start();


 use Core\Session;
use Core\ValidationException;

const BASE_PATH=__DIR__.'/../';
require BASE_PATH.'/vendor/autoload.php';

require_once BASE_PATH.'func.php';



require basePath('bootstrap.php');

$router= new \Core\Router();

$routes=require_once basePath('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 

$method=$_POST['__method']?? $_SERVER['REQUEST_METHOD'];
try
{$router->route($uri,$method);
}
catch(ValidationException $e){
  Session::flash('errs',$e->errs) ;
Session::flash('old',$e->old) ;
return redirect($router->previouse());
}
Session::unflash();