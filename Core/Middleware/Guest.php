<?php
namespace Core\Middleware;


class Guest{

public function handle(){
 if($_SESSION['user'] ?? false){
        header('location:/pease/public/');
        exit;
      }

}

}