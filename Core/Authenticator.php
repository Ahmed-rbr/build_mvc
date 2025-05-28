<?php
namespace Core;

class Authenticator{
  protected $errs;
public function  attampt($email,$pwd){
$user=App::resolve(Database::class)->query('SELECT * from usr where email=:email',[
  'email'=>$email
  ])->find();

  
  if($user){

    if(password_verify($pwd,$user['pwd'])){

 $this->login(['email'=>$email,'user_id'=>$user['id']]);
   return true;
}

  }


  return false;
    


}
public function login($user) {
    $_SESSION['user'] = [
        'email' => $user['email'],
        'user_id'    => $user['user_id']
    ];


session_regenerate_id(true);
}

public function logout(){
Session::destroy();
}
public function getErrs(){
  return $this->errs;
}

}