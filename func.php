<?php 

function dd($value){
  echo'<pre>';
var_dump($value);
echo'</pre>';
die();
}
function urli($value){
  return $_SERVER['REQUEST_URI']=== $value;

}
function authorize($condition,$status=Response::NOT_AUTH){
  if (!$condition){
    abort(Response::NOT_AUTH);
  
  }
}
