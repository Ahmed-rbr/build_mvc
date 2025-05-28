<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;


$email=$_POST['email'];
$pwd=$_POST['password'];

$form=new LoginForm();


if($form->validat($email,$pwd)){


if((new Authenticator)->attampt($email,$pwd)){
redirect('/pease/public/');

}


$form->error('email','no user acount with this email and password was found');


};


Session::flash('errs',$form->getErrs()) ;

return redirect('/pease/session');





