<?php

use Core\App;
use Core\Database;
use Core\Validation;

$email=$_POST['email'];
$pwd=$_POST['password'];

$errs=[];


if(Validation::isempty($email)||Validation::isempty($email)){
  $errs['empty']='please fill all valids';
}


if(count($errs)){

return view('session/create.view.php',[
  'errs'=>$errs
]);

}
$db=App::resolve(Database::class);

$user=$db->query('SELECT * from usr where email=:email',[
  'email'=>$email
  ])->find();

  
  if($user){

    if(password_verify($pwd,$user['pwd'])){

 login(['email'=>$email,'user_id'=>$user['id']]);
      header('location:/pease/public/');
exit;
}

  }





return view('session/create.view.php',[
  'errs'=>['email'=>'no user acount with this email and password was found']
]);exit;
  
    

  