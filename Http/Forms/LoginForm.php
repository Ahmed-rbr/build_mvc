<?php
namespace Http\Forms;
use Core\Validation;

class LoginForm{

  protected $errs=[];
public function validat($email,$pwd){
  


if(Validation::isempty($email)||Validation::isempty($email)){
  $this->errs['empty']='please fill all valids';
}

if(!Validation::email($email)){
    $this->errs['email']='please provide a valid email';

}
if(!Validation::pwd($pwd)){
    $this->errs['pwd']='please provide a valid password';

}



return empty($this->errs);

}

public function error($filde,$msg){

$this->errs[$filde]=$msg;
}
public function getErrs(){
  return $this->errs;
}

}