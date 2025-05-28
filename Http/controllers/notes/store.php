<?php

use Core\App;

use Core\Database;
use Core\Validation;

$db=App::resolve(Database::class);
$user_id=$_SESSION['user']['user_id'];

$errs=[];
if(!Validation::string($_POST['body'],1,1000))
{
  $errs['body']='A body of no more then 1000 characters is required';
}

if(! empty($errs)){

return view('notes/create.view.php',[
  'errs'=>$errs
]);

}

  $db->query('INSERT into notes (body,user_id) 
  values(:body,:user_id)',
[':body'=>$_POST['body'],
':user_id'=>$user_id]);  

header('location: /pease/notes');
die;



