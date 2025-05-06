<?php

use Core\Database;
use Core\Validation;
$config=require basePath('config.php');

$db=new Database($config['database']);
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
':user_id'=>1]);  

header('location: /pease/notes');
die;



