<?php 

	include("../../tools/init_functions/redirection.php");

	if(!isset($_SESSION['id'])){
	  header("location:../home");
	

	}else{
		redirection("HIV-project: Enrollments", _APP_PATH."dashboard/pages/enrollment-document/enrollment-document.php", "enrollment-document", "", _ROOT_PATH."dashboard/pages/enrollment-document/css/enrollment-document.css", _ROOT_PATH."dashboard/pages/enrollment-document/js/enrollment-document.js");
	}
	

?>
