<?php 

session_start();

require_once '../../../tools/init_functions/init.php';
require_once _APP_PATH.'tools/init_functions/functions.php';
require_once _APP_PATH.'tools/init_functions/import-class.php';


$enrolment=new Enrolment($current_enrolment);
$enrollment=$enrolment->getEnrolment($_POST['id']);

$enrollment_name="Enrollment_".$enrollment->getId()."_".$enrollment->getFirst_name().".pdf";

$enrollment_folder=_APP_PATH."files/enrollment/".$enrollment->getId();

if(file_exists($enrollment_folder."/".$enrollment_name)){
	if(unlink($enrollment_folder."/".$enrollment_name)){
		if(rmdir($enrollment_folder)){
			$enrollment->setPrinted(0);
			$enrollment->editEnrolment($enrollment);
		}
	}
}


?>