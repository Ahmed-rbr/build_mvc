<?php
namespace Core;

class ValidationException extends \Exception {
public readonly array $errs;
public readonly array $old;
public static function throw($errors,$old){


  $instance=new static;
$instance->errs=$errors;
$instance->old=$old;
  throw $instance;
}

}
