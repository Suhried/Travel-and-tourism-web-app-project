<?php
require_once '../models/db_config.php';
 
 $id=$_GET["id"];

   function getClient($id){
   	$query="SELECT * from temp_registry WHERE sl=$id";
   	$result=get($query);
   	if(count($result)>0){return $result[0];}
   	return false;
   }
$result=getClient($id);  

$name=$result["name"];
$address=$result["address"];
$email=$result["email"];
$phone=$result["phone_number"];
$joinDate=$result["join_date"];
$type=$result["type"];
$password=$result['password'];


 function insertClient($name,$address,$email,$phone,$joinDate,$type){
      $query="INSERT INTO profile VALUES('NULL','NULL','NULL','$email','NULL','CURRENT_TIMESTRAP','$type','active');";
   	  execute($query);
 }
 insertClient($name,$address,$email,$phone,$joinDate,$type);
 function loginData($email,$password,$type){
 	$query="INSERT INTO login VALUES('NULL','$email','$password','$type');";
  	execute($query);
 }
 loginData($email,$password,$type);
 function deleteData($id){
 	$query="DELETE FROM temp_registry WHERE sl=$id;";
     execute($query);
 }
 deleteData($id);

 header("Location: ../Admin_MailSection.php?id=$email");

?>