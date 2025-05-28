<?php

use Core\Session;

view('session/create.view.php',[
  'errs'=>Session::get('errs')
]);
