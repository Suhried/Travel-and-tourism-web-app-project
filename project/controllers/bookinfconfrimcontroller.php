<?php 

/*session_start();
  if(!isset($_SESSION["loggedin"]))
  {
    header("Location: registration.php");
  }
  require_once "models/db_config.php";*/
require_once 'models/db_config.php'; 

$Name="";
$err_Name="";
$Service="";
$err_Service="";
$Email="";
$err_Email="";
$Date="";
$err_Date="";
$Status="";
$err_Status="";
$Package_info="";
$err_Package_info="";
$hasError=false;
function validEmail($Email){
     $pos_at = strpos($Email,"@");
     $pos_dot = strpos($Email,".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 
 
 


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["Name"]))
	{
		$err_Name="Name Required";
        $hasError=true;
	}
	else{$Name=$_POST["Name"];}

	if(empty($_POST["Service"]))
	{
		$err_Service="Service Required";
        $hasError=true;
	}
	else{$Service=$_POST["Service"];}

	if(empty($_POST["Email"])){
         $err_Email = "Email Required";
         $hasError=true;
     }
    elseif(!validEmail($_POST["Email"])){
         $err_Email = "Not a valid email";
     }
     else{
         $Email=htmlspecialchars($_POST["Email"]);
     }

     if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
     	$err_Date="Date Required";
        $hasError=true;
     }
     else{$Date=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}

    if(empty($_POST["Status"])){
         $err_Status= "Status Required";
         $hasError=true;
     }
    
    else{$Status=$_POST["Status"];}

     if(empty($_POST["Package_info"])){
         $err_Package_info= "Package_info Required";
         $hasError=true;
     }
    
    else{$Package_info=$_POST["Package_info"];}

    if(!$hasError){ insertBookingInfo($Name,$Service,$Email,$Date,$Status,$Package_info);
        }
       
}
 function insertBookingInfo($Name,$Service,$Email,$Date,$Status,$Package_info)
   {
       $query="INSERT INTO t_activity VALUES('NULL','$Name','$Service','$Email','$Date','$Status');";
      execute($query);
       $query1="INSERT INTO masterbooking VALUES('NULL','$Name','$Service','$Email','$Date','$Status','$Package_info');";
      execute($query1);
   }

   function getBookingInfo(){
      $query="SELECT * from masterbooking";
      $result=get($query);
      return $result;
   }

    function getAllValidBookingInfo(){
    $query="SELECT * from masterbooking";
    $result=get($query);
    return $result;
   }
?>