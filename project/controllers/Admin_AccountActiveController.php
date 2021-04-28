<?php
require_once '../models/db_config.php';

$id=$_GET["id"];

function accountActiveProfile($id){
   	$query="UPDATE profile SET status='active' WHERE sl='$id';";
   	execute($query);
   }

   accountActiveProfile($id);

 function accountActiveLogin($id){
 	$query="UPDATE login SET status='active' WHERE sl='$id';";
 	execute($query);
 }

 accountActiveLogin($id);

 header("Location: ../Admin_AccountCtrl_Travellers.php")

?>