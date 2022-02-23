<?php 

	include("../../tools/init_functions/redirection.php");

	if(!isset($_SESSION['id'])){
	  header("location:../home");
	

	}else{
		redirection("HIV-project: enrolments", _APP_PATH."dashboard/pages/enrolment/enrolment.php", "enrolment", "", _ROOT_PATH."dashboard/pages/enrolment/css/enrolment.css", _ROOT_PATH."dashboard/pages/enrolment/js/enrolment.js");
	}
	

?>
