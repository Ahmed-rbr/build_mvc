<?php
require_once 'func.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 

if ($uri === '/pease/' || $uri === '/pease/index.php') {
    require 'controllers/index.php';
} elseif ($uri === '/pease/about.php') {
    require 'controllers/about.php';
} elseif ($uri === '/pease/contact.php') {
    require 'controllers/contact.php';
} else {
    require 'controllers/404.php'; 
}
