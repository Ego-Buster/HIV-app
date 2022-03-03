<?php 

	include("../../tools/init_functions/redirection.php");

	if(!isset($_SESSION['id'])){
	  header("location:../home");
	

	}else{
		redirection("HIV-project: Form-enrollment", _APP_PATH."dashboard/pages/form-enrolment/form-enrolment.php", "form-enrolment", "", _ROOT_PATH."dashboard/pages/form-enrolment/css/form-enrolment.css", _ROOT_PATH."dashboard/pages/form-enrolment/js/form-enrolment.js");
	}
	

?>
