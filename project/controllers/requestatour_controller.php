<?php

require_once "models/db_config.php";

$full_name="";
$err_full_name="";
$email="";
$country="";
$err_email="";
$des="";
$err_des="";
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
    if(empty($_POST["full_name"]))
    {
    $err_full_name=" * First name required";
    $hasError = true;
    }
    else{
        $fname=$_POST["full_name"];

     }



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


     $country=$_POST["country"];
        
     

    if(empty($_POST["des"]))
    {
    $err_des=" * full description required";
    $hasError = true;
    }
    else{
        $des=$_POST["des"];

     }
     if(!$hasError)
    {
    
    insert_user($fname,$email,$des);

    user($fname,$email);
    
    }
}


function insert_user($fname,$email,$des)
{

        $query = "insert into requestatour values (NULL, '$fname', '$email', CURRENT_TIMESTAMP ,'$des')";
        execute($query);

}


 function user($fname,$email)
 { 

        $query = "insert into t_activity values (NULL, '$fname', 'tour request','$email', CURRENT_TIMESTAMP, 'pending')";
        execute($query);

}


?>

