<?php
namespace Core\Middleware;

use Error;
use Exception;

class Middleware{

public const MAP = [
'guest' => Guest::class,
'auth' => Auth::class
];

public static function resolve($key){

  if(!$key){
    return;
  }

  
    $middleware=static::MAP[$key]??false;

    if(!$middleware){
      throw new \Exception('you dont have middleware for this key').$key;

    }
  (new $middleware)->handle();
  
      

}
}