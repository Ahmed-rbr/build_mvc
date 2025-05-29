<?php

use Core\Authenticator;

use Http\Forms\LoginForm;



$form= LoginForm::validate($attributs=[
  'email'=>$_POST['email'],
  'pwd'=>$_POST['password']
]);


$singedin=(new Authenticator)->attampt(
  $attributs['email'],$attributs['pwd']

);
if(!$singedin){

$form->error(
  'email','no user acount with this email and password was found')
->throw();
}



redirect('/pease/public/');



