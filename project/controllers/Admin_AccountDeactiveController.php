<?php
require_once '../models/db_config.php';

$id=$_GET["id"];

function accountInactiveProfile($id){
   	$query="UPDATE profile SET status='inactive' WHERE sl='$id';";
   	execute($query);
   }

   accountInactiveProfile($id);

 function accountInactiveLogin($id){
 	$query="UPDATE login SET status='inactive' WHERE sl='$id';";
 	execute($query);
 }

 accountInactiveLogin($id);

 header("Location: ../Admin_AccountCtrl_Travellers.php")

?>