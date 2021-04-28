<?php
	require_once 'models/db_config.php';


	function getAllProducts(){
		
		$query= "select * from location_info";
		$result = get($query);
		return $result;
	} 

	function search_package($key){
		$query= "SELECT place_name, category FROM location_info WHERE place_name like '%$key%'";
		$result= get($query);
		return $result;
	}


?>