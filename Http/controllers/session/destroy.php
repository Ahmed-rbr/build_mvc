<?php
use Core\Authenticator;

$logOut=new Authenticator();
$logOut->logout();

redirect('/pease/public/');