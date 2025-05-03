<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 

$routes=[ '/pease/' =>     'controllers/index.php',  
'/pease/index.php'=> 'controllers/index.php',
'/pease/about.php'=> 'controllers/about.php',
'/pease/contact.php'=> 'controllers/contact.php',
'/pease/notes.php'=> 'controllers/notes.php',
'/pease/note.php'=> 'controllers/note.php',
];


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