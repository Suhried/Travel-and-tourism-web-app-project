<?php


  require_once "models/db_config.php";


$full_name="";
$err_full_name="";
$email="";
$err_email="";
$date="";
$err_date="";
$service="";
$err_service="";
$hasError=false;

function validEmail($email){
     $pos_at = strpos($email, "@");
     $pos_dot = strpos($email, ".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }


 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     if(empty($_POST["email"])){
         $err_email = " * Email Required";
         $hasError = true;
     }
     elseif(!validEmail($_POST["email"])){
         $err_email = " * Not a valid email";
         $hasError = true;
     }
     else{
        $email=$_POST["email"];
        

     }

    if(empty($_POST["full_name"])){
    $err_full_name=" *  Name required";
    $hasError = true;
    }
    else{
        $fname=$_POST["full_name"];

     }

    if(empty($_POST["service"])){
    $err_service=" * please type the package no. ";
    $hasError = true;
    }
    else{
        $service=$_POST["service"];

     }

    if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
      $err_date=" * please select your travel date";
      $hasError = true;
     }
      else{
        $date=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];
        
    }

     if(!$hasError)
    {
        
        insert_user($fname,$email,$date,$service);
        
    }
    
 }

 function insert_user($fname,$email,$date,$service)
 { 

        $query = "insert into t_activity values (NULL, '$fname', '$service','$email','$date','pending')";
        execute($query);

}



?>
