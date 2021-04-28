<?php 
require_once 'models/db_config.php';


function getAllTravellers(){
	$query="SELECT * from temp_registry WHERE type='traveller'";
	execute($query);
	$result=get($query);
    return $result;
}
?>