<?php 

session_start();

require_once '../../../tools/init_functions/init.php';
require_once _APP_PATH.'tools/init_functions/functions.php';
require_once _APP_PATH.'tools/init_functions/import-class.php';


$enrolment=new Enrolment($current_enrolment);
echo $enrolment->archiveEnrolment($_POST['id']);
?>