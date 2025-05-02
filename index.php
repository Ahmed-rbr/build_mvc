<?php
require_once 'func.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 
// dd($uri);

$routes=[ '/pease/' =>     'controllers/index.php',  
'/pease/index.php'=> 'controllers/index.php',
'/pease/about.php'=> 'controllers/about.php',
'/pease/contact.php'=> 'controllers/contact.php',
'*'=>'controllers/404.php'
];

if(array_key_exists($uri,$routes)){
  require $routes[$uri];
}else{
  require$routes['*'];
}

