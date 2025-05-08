<?php

$router->get('/pease/public/','controllers/index.php');
$router->get('/pease/about','controllers/about.php');
$router->get('/pease/contact',"controllers/contact.php");
 
$router->get('/pease/notes','controllers/notes/index.php')->only('auth');
$router->get('/pease/note','controllers/notes/show.php')->only("auth");
$router->get('/pease/notes/create','controllers/notes/create.php');
$router->post('/pease/notes','controllers/notes/store.php');
$router->delete('/pease/note/update','controllers/notes/destroy.php');
$router->get('/pease/note/update','controllers/notes/update.php');
$router->patch('/pease/note','controllers/notes/upd.php');
$router->get('/pease/register','controllers/registration/create.php')->only("guest");
$router->post('/pease/register','controllers/registration/store.php');
