<?php


  require_once "models/db_config.php";

$email1=$_GET["id"];
$full_name="";
$err_full_name="";
$email="";
$err_email="";
$mobile="";
$err_mobile="";
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
     
    
    
        

 

    if(empty($_POST["full_name"])){
    $err_full_name=" *  Name required";
    $hasError = true;
    }
    else{
        $full_name=$_POST["full_name"];

     }

    if(empty($_POST["des"])){
    $err_des=" * full description required";
    $hasError = true;
    }
    else{
        $des=$_POST["des"];

     }

    if(empty($_POST["mobile"]))
    {
    $err_mobile=" * phone number required";
    $hasError = true;
    }
    else
    {
        $mobile=$_POST["mobile"];

     }
     if(isset($_POST["update"])){

     if(!$hasError)
    {
        
        update_user($full_name,$email1,$mobile,$des);

    }


        
    }
    
 }

 function update_user($full_name,$email1,$mobile,$des)
 { 


        $query = "update profile set  name='$full_name', address='$des', email='$email1', phone_no='$mobile' join_date='CURRENT_TIMESTRAP', type='traveller', status='active' where email='$email1'";
        execute($query);

}

function getdata($email)
 { 

        $query = "select * from profile where email='$email'";
        $result= get($query);
        if(count ($result) > 0){
            return $result[0]; 
        }
        return false;
        

}



?>
