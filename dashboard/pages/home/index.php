<?php 

	include("../../tools/init_functions/redirection.php");
	
	if(!isset($_SESSION['id'])){
	  header("location:../login");
	
	
	}else{
		redirection("HIV-project", _APP_PATH."dashboard/pages/home/home.php", "home", "", _ROOT_PATH."dashboard/pages/home/css/home.css", _ROOT_PATH."dashboard/pages/home/js/home.js");	
	}


	

?>
