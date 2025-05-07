<?php

use Core\App;
use Core\Database;

use Core\Response;
$db=App::resolve(Database::class);



$curentUser=1;



$note=$db->query("SELECT * from notes where id=:id",
[':id'=>$_GET['id']])->findOrFail();

authorize($note['user_id']===$curentUser);
 
view("notes/update.view.php",[
  'note'=>$note
]);