<?php

use Illuminate\Support\Collection;

const BASE_PATH=__DIR__.'/../';
require BASE_PATH.'/vendor/autoload.php';

$num=new Collection([1,2,34,5,6,7,8,9,8,88,64]);

if($num->contains(9  )){
  die('itsn js');
}