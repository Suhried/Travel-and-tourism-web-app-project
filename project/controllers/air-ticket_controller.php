<?php


  require_once 'models/db_config.php';


$full_name="";
$err_full_name="";
$phone="";
$err_phone="";
$email="";
$err_email="";
$departure_airport="";
$err_departure_airport="";
$arrival_airport="";
$err_arrival_airport="";

$departure_date="";
$err_departure_date="";

$preffered_airlines="";
$err_preffered_airlines="";

$preffered_seating="";
$err_preffered_seating="";

$passenger="";
$err_passenger="";

$return_date="";
$err_return_date="";
$hasError=false;



    function validateEmail($email){
        $pos_at = strpos($email,"@");
        $pos_dot = strpos($email, ".",$pos_at+1);
        if($pos_at < $pos_dot){
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

    else{
        $email=$_POST["email"];

     }

    if(empty($_POST["full_name"])){
    $err_full_name=" * name required";
    $hasError = true;
    }

    else{
        $fname=$_POST["full_name"];

     }

    if(empty($_POST["phone"]))
    {
    $err_phone=" * phone number required";
    $hasError = true;
    }

    elseif(!preg_match('/^[0-9]*/', $phone))
    {
    echo " * enter valid mobile number";
    }
    else{
        $phone=$_POST["phone"];

     }

    if(!isset($_POST["departure_airport"])) 
    { 
      $err_departure_airport=" * please select airport"; 
      $hasError = true;
    } 
    else
    {
      $departure_airport=$_POST["departure_airport"];
      
    }

    if(!isset($_POST["arrival_airport"])) 
    { 
      $err_arrival_airport=" * please select airport";
      $hasError = true; 
    } 
    else
    {
      $arrival_airport=$_POST["arrival_airport"];
      
    }


    if(!isset($_POST["preffered_airlines"])) 
    { 
      $err_preffered_airlines=" * please select airlines"; 
      $hasError = true;
    } 
    else
    {
      $preffered_airlines=$_POST["preffered_airlines"];
      
    }


    if(!isset($_POST["preffered_seating"])) 
    { 
      $err_preffered_seating=" * please select seating"; 
      $hasError = true;
    } 
    else
    {
      $preffered_seating=$_POST["preffered_seating"];
      
    }


    if(!isset($_POST["passenger"])) 
    { 
      $err_passenger=" * please select the number of passengers"; 
      $hasError = true;
    } 
    else
    {
      $passenger=$_POST["passenger"];
      
    }


    if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
      $err_departure_date=" * please enter departure date";
      $hasError = true;
     }
      else{
        $departure_date=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];
        
    }



      if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
      $err_return_date=" * please enter return date";
      $hasError = true;
     }
      else{
        $return_date=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];
      
    }
    if(!$hasError)
    {
        
        insert_user($departure_airport, $arrival_airport,$departure_date,$preffered_airlines,$preffered_seating,$passenger,$return_date,$fname,$phone,$email);

        user($fname,$email,$departure_date);
        
    }

}



function insert_user($departure_airport, $arrival_airport,$departure_date,$preffered_airlines,$preffered_seating,$passenger,$return_date,$fname,$phone,$email)
{

    $query = "insert into air_ticket values (NULL, '$departure_airport', '$arrival_airport','$departure_date','$preffered_airlines','$preffered_seating','$passenger','$return_date','$fname','$phone','$email')"; 
    execute($query);
}

 function user($fname,$email,$departure_date)
 { 

        $query = "insert into t_activity values (NULL, '$fname', 'air_ticket','$email','$departure_date','pending')";
        execute($query);

}



?>