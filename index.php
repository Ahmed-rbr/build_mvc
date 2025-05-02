<?php
require_once 'func.php';
require_once 'Db.php';
// require_once 'router.php';


$config=require 'config.php';
$db=new Database($config['database']);



$posts=$db->query("select * from posts")->fetchAll();

dd($posts);
