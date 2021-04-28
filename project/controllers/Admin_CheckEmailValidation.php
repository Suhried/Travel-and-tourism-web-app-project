<?php
  require_once '../models/db_config.php';
  
  $email=$_GET["client_Email"];

  function checkEmailAvailability($email)
   {
   	  $query="SELECT * FROM profile WHERE email='$email'";

   	  $result=get($query);
   	  if(count($result)>0){return false;}
   	  return true;
   }

  $result=checkEmailAvailability($email);

  if($result){
  	echo "true";
  }
  else echo "false";
?>