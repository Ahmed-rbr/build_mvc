<?php
$config=require 'config.php';
$db=new Database($config['database']);


$note=$db->query("SELECT * from notes where id=:id",[
  ':id'=>$_GET['id']  ])->fetch();

if(!$note){
  abort(Response::NOT_FOUNDE);
}
$curentUser=1;
if ($note['user_id']!==$curentUser){
  abort(Response::NOT_AUTH);

}
require_once "views/note.view.php";

