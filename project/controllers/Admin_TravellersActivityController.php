<?php 
require_once "models/db_config.php";

function getAllActivity(){
	$query="SELECT * from t_activity WHERE status='pending'";
    $result=get($query);
   	return $result;
}

?>