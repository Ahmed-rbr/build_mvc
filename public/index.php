<?php
use Core\Router;

const BASE_PATH=__DIR__.'/../';
require_once BASE_PATH.'func.php';


spl_autoload_register(function($class){
  $class=str_replace('\\',DIRECTORY_SEPARATOR,$class);
  require  basePath("{$class}.php");
});



$router= new \Core\Router();

$routes=require_once basePath('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 

$method=$_POST['__method']?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);



