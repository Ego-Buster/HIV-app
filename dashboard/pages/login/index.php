<?php 

	include("../../tools/init_functions/redirection.php");

	if(isset($_SESSION['id'])){
	  header("location:../home");
	

	}else{
		redirection("HIV-project: Login", _APP_PATH."dashboard/pages/login/login.php", "login", "", _ROOT_PATH."dashboard/pages/login/css/login.css", _ROOT_PATH."dashboard/pages/login/js/login.js");
	}
	

?>
