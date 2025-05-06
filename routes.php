<?php

$router->get('/pease/public/','controllers/index.php');
$router->get('/pease/about','controllers/about.php');
$router->get('/pease/contact',"controllers/contact.php");
 
$router->get('/pease/notes','controllers/notes/index.php');
$router->get('/pease/note','controllers/notes/show.php');
$router->get('/pease/notes/create','controllers/notes/create.php');
$router->post('/pease/notes','controllers/notes/store.php');
$router->delete('/pease/note','controllers/notes/destroy.php');
