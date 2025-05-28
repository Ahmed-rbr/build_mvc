<?php

use Core\Authenticator;
use Http\Forms\LoginForm;


$email=$_POST['email'];
$pwd=$_POST['password'];

$form=new LoginForm();


if($form->validat($email,$pwd)){


if((new Authenticator)->attampt($email,$pwd)){
redirect('location:/pease/public/');

}


$form->error('email','no user acount with this email and password was found');


};




return view('session/create.view.php',[
  'errs'=>$form->getErrs()
]);
exit;



