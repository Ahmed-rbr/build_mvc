<?php

use Core\App;
use Core\Database;
use Core\Validation;

$username=$_POST['username'];
$email=$_POST['email'];
$pwd=$_POST['password'];

$errs=[];
if(!Validation::string($email,1,50)||!Validation::string($pwd,1,255)||!Validation::string($username,1,24)){
  $errs['username']='check length of email or pwd or username its to long';

}

if(!Validation::username($username)){
  $errs['username']='Username must start with a letter and contain only letters, numbers, and underscores.';
}
if(!Validation::email($email)){
  $errs['email']='please enter a valid email';
}

if(!Validation::pwd($pwd)){
  $errs['pwd']='Password must be at least 6 characters long and contain at least one letter and one number.';
}

if(count($errs)){

return view('registration/create.view.php',[
  'errs'=>$errs
]);

}
$db=App::resolve(Database::class);

$user=$db->query('SELECT * from usr where email=:email',[
  'email'=>$email
  ])->find();

  
  if($user){
header('location:/pease/public/');
exit;
  }
  else{

    $db->query('INSERT INTO usr (username, email, pwd) VALUES (:username, :email,:pwd)',[
      'username'=>$username,
      'email'=>$email,
      'pwd'=>$pwd,
      ]);

      $_SESSION['user']=['email'=>$email];
      
      header('location:/pease/public/');
exit;

  }