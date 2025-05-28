<?php
use Core\App;

use Core\Database;
use Core\Response;
$db=App::resolve(Database::class);


$user_id=$_SESSION['user']['user_id'];



$note=$db->query("SELECT * from notes where id=:id",
[':id'=>$_GET['id']])->findOrFail();

authorize($note['user_id']===$user_id);
 
view("notes/show.view.php",[
  'note'=>$note
]);


