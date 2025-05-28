<?php

use Core\App;

use Core\Database;

use Core\Response;

$db=App::resolve(Database::class);
$user_id=$_SESSION['user']['user_id'];


$note=$db->query("SELECT * from notes where id=:id",
[':id'=>$_POST['id']])->findOrFail();
authorize($note['user_id']===$user_id);

  $note=$db->query("DELETE from  notes where id=:id",
[':id'=>$_POST['id']]);
header('Location: /pease/notes');
exit();

