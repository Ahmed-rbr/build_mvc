<?php

use Core\App;

use Core\Database;
use Core\Validation;

$db=App::resolve(Database::class);
$curentUser=1;



$note=$db->query("SELECT * from notes where id=:id",
[':id'=>$_POST['id']])->findOrFail();

authorize($note['user_id']===$curentUser);

$errs=[];

if(!Validation::string($_POST['body'],1,1000))
{
  $errs['body']='A body of no more then 1000 characters is required';
}

if(count($errs)){

return view('notes/update.view.php',[
  'errs'=>$errs,
  'note'=>$note

]);

}


  $db->query('UPDATE notes SET body = :body WHERE id = :id',
[':body'=>$_POST['body'],
':id'=>$_POST['id']]);  

header('location: /pease/notes');
die;



