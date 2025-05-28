<?php

$router->get('/pease/public/','index.php');
$router->get('/pease/about','about.php');
$router->get('/pease/contact',"contact.php");
 
$router->get('/pease/notes','notes/index.php')->only('auth');
$router->get('/pease/note','notes/show.php')->only("auth");
$router->get('/pease/notes/create','notes/create.php');
$router->post('/pease/notes','notes/store.php');
$router->delete('/pease/note/update','notes/destroy.php');
$router->get('/pease/note/update','notes/update.php');
$router->patch('/pease/note','notes/upd.php');
$router->get('/pease/register','registration/create.php')->only("guest");
$router->post('/pease/register','registration/store.php')->only("guest");
$router->get('/pease/session','session/create.php')->only("guest");
$router->post('/pease/session','session/store.php')->only("guest");
$router->delete('/pease/session','session/destroy.php')->only('auth');
