<?php
require_once '../models/db_config.php';

$id=$_GET["id"];

 function deleteData($id){
 	$query="DELETE FROM temp_registry WHERE sl=$id;";
     execute($query);
 }

 deleteData($id);

 header("Location: ../Admin_TravellerCtrl.php");

?>