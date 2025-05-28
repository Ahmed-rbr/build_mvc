<?php
use Core\App;

use Core\Database;
$db=App::resolve(Database::class);
$user_id=$_SESSION['user']['user_id'];

$config=require basePath( 'config.php');
$db=new Database($config['database']);
$notes=$db->query("SELECT * from notes where user_id=:id",['id'=>$user_id])->get();

view('notes/index.view.php',[
  'notes'=>$notes
]);
