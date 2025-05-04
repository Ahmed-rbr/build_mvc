<?php
const BASE_PATH=__DIR__.'/../';
require_once BASE_PATH.'func.php';
spl_autoload_register(function($class){
  require  basePath("Core/{$class}.php");
});
require_once basePath('Core/router.php');





