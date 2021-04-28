<?php 
require_once '../models/db_config.php';

$id=$_GET["id"];

function updateStatus($id){
	$query="UPDATE t_activity SET status='Booked(A)' WHERE sl='$id'";
    execute($query);
}

updateStatus($id);


header("Location: ../Admin_HotelActivity.php");

?>