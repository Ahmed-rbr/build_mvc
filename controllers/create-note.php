<?php
$config=require 'config.php';
$db=new Database($config['database']);

if($_SERVER['REQUEST_METHOD']==='POST'){

$db->query('INSERT into notes (body,user_id) values(:body,:user_id)',[':body'=>$_POST['body'],':user_id'=>1]);
}





require_once ('views/create-note.view.php');
