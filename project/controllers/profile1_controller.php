<?php

require_once 'models/db_config.php';

function getinfo($email){
	$query= "select * from profile where email='$email'";
	$result= get($query);
	return $result;
}


?>