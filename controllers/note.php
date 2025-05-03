<?php
$config=require 'config.php';
$db=new Database($config['database']);
$curentUser=1;
$note=$db->query("SELECT * from notes where id=:id",[
  ':id'=>$_GET['id']  ])->findOrFail();

authorize($note['user_id']===$curentUser);

require_once "views/note.view.php";

