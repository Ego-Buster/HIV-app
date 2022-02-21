<?php

session_start();


require_once "../../../tools/init_functions/init.php";
require_once _APP_PATH."tools/init_functions/import-class.php";
require_once _APP_PATH."tools/init_functions/functions.php";

$admin=new Admin($current_admin);

$admin->setEmail($_POST['email']);
$admin->setPassword($_POST['password']);

echo $admin->logIn($admin);

?>