
<?php
	require 'controllers/registation_controller.php';
	$email=$_GET["email"];
	$rs=checkemail($email);
	if($rs){
	echo "true";
	}
	else echo "false";
?>