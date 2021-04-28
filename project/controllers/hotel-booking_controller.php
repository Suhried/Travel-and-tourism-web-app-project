<?php


require_once 'models/db_config.php';


$full_name="";
$err_full_name="";
$phone="";
$err_phone="";
$hasDigit="";
$email="";
$err_email="";
$city="";
$err_city="";
$checkin="";
$err_checkin="";
$checkout="";
$err_checkout="";
$hasError=false;


    function validateEmail($email)
    {
        $pos_at = strpos($email,"@");
        $pos_dot = strpos($email, ".",$pos_at+1);
        if($pos_at < $pos_dot)
        {
            return true;
        }
        return false;

    }



    if($_SERVER["REQUEST_METHOD"]=="POST")
  {



    if(empty($_POST["email"]))
    {

    $err_email=" * email required";
    $hasError = true;
    }
    elseif(!validateEmail($_POST["email"]))
    {
    $err_email= " * not a valid email";
    $hasError = true;
    }
    else
    {
        $email=$_POST["email"];

    }

    if(empty($_POST["full_name"])){
    $err_full_name=" * name required";
    $hasError = true;
    }
    else
    {
        $fname=$_POST["full_name"];

    }


    if(empty($_POST["phone"]))
    {
    $err_phone=" * phone number required";
    $hasError = true;
    }
    else
    {
        $phone=$_POST["phone"];

    }


    if(!isset($_POST["city"])) { 
    $err_city=" * please select city";
    $hasError = true; 
    } 
    else
    {
    $city=$_POST["city"];
    }


    if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
      $err_checkin=" * please enter checkin date";
     }
      else{$checkin=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}



      if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
      $err_checkout=" * please enter checkout date";
     }
      else{$checkout=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}


      if(!$hasError)
    {
        
        insert_user($fname,$phone,$email,$checkin,$checkout,$city);

        user($fname,$email,$checkin);
        
    }
  }


function insert_user($fname,$phone,$email,$checkin,$checkout,$city)
{
    
    $query = "insert into hotel_booking values (NULL, '$city', '$checkin','$checkout','$fname','$phone','$email')"; 
    execute($query);

}

 function user($fname,$email,$checkin)
 { 

        $query = "insert into t_activity values (NULL, '$fname', 'hotel booking','$email','$checkin','pending')";
        execute($query);

}


?>