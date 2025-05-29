<?php
namespace Http\Forms;
use Core\Validation;
use Core\ValidationException;

class LoginForm{

  protected $errs=[];
public function __construct( public array $attributes)
{
  if(Validation::isempty($attributes['email'])||Validation::isempty($attributes['pwd'])){
  $this->errs['empty']='please fill all valids';
}

if(!Validation::email($attributes['email'])){
    $this->errs['email']='please provide a valid email';

}
if(!Validation::pwd($attributes['pwd'])){
    $this->errs['pwd']='please provide a valid password';

}
  
}


public static function validate($attributes){
  
$instance=new static($attributes);


return $instance->failed()?  $instance->throw():$instance;


}


public function throw(){
  ValidationException::throw($this->errors(),$this->attributes);


}


public function failed(){

  return count($this->errs);

}
public function error($filde,$msg){

$this->errs[$filde]=$msg;
return $this;
}
public function errors(){
  return $this->errs;
}

}