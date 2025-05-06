<?php
use Core\Database;
use Core\Response;

$config=require basePath('config.php');
$db=new Database($config['database']);
$curentUser=1;


$note=$db->query("SELECT * from notes where id=:id",
[':id'=>$_POST['id']])->findOrFail();
authorize($note['user_id']===$curentUser);

  $note=$db->query("DELETE from  notes where id=:id",
[':id'=>$_POST['id']]);
header('Location: /pease/notes');
exit();

