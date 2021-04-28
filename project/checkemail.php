<?php
	require 'controllers/signupcontroller.php';
	$email = $_GET["email"];
	$rs = checkemail($email);
	if($rs){
		echo "true";
	}
	else echo "false";
?>