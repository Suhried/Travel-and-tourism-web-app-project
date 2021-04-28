<?php require_once 'models/db_config.php';

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

function validEmail($client_Email){
     $pos_at = strpos($Email, "@");
     $pos_dot = strpos($Email, ".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 
 
 


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["Name"]))
	{
		$err_client_Name="Name Required";
	}
	else{$Name=$_POST["Name"];}

	if(empty($_POST["Service"]))
	{
		$err_Service="Service Required";
	}
	else{$Service=$_POST["Service"];}

	if(empty($_POST["Email"])){
         $err_Email = "Email Required";
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
     }
     else{$Date=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}

    if(empty($_POST["Status"])){
         $err_Status= "Status Required";
     }
    
    else{$Status=$_POST["Status"];}

     if(empty($_POST["Package_info"])){
         $err_Package_info= "Package_info Required";
     }
    
    else{$Package_info=$_POST["Package_info"];}
}

?>