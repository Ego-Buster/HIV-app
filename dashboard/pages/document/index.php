<?php 

include("../../tools/init_functions/redirection.php");

if(!isset($_SESSION['id'])){
	header("location:../home");
	

}else{
	redirection("HIV-project: Enrollments", _APP_PATH."dashboard/pages/document/document.php", "document", "", _ROOT_PATH."dashboard/pages/document/css/document.css", _ROOT_PATH."dashboard/pages/document/js/document.js");
}


?>
