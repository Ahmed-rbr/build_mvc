<?php
use Core\Database;
use Core\Response;

$config=require basePath('config.php');
$db=new Database($config['database']);
$curentUser=1;

if($_SERVER['REQUEST_METHOD']==='POST'){
$id=$_POST['id'];
$note=$db->query("SELECT * from notes where id=:id",
[':id'=>$_GET['id']])->findOrFail();
authorize($note['user_id']===$curentUser);

  $note=$db->query("DELETE from  notes where id=:id",
[':id'=>$id]);
header('Location: /pease/notes');
exit();
} else{

$note=$db->query("SELECT * from notes where id=:id",
[':id'=>$_GET['id']])->findOrFail();

authorize($note['user_id']===$curentUser);
 
view("notes/show.view.php",[
  'note'=>$note
]);

}
