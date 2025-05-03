<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 
$routes=require_once ('routes.php');



function routToController($uri,$routes){
if(array_key_exists($uri,$routes)){
  require $routes[$uri];
}else{
  abort();
}}
function abort($code=404){
  http_response_code(404);
  require "controllers/{$code}.php";
  die()
;
}

routToController($uri,$routes);