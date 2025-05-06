<?php
use Core\App;

use Core\Database;
$db=App::resolve(Database::class);

$config=require basePath( 'config.php');
$db=new Database($config['database']);
$notes=$db->query("SELECT * from notes where user_id=1")->get();

view('notes/index.view.php',[
  'notes'=>$notes
]);
