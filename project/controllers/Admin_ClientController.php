<?php
require_once 'models/db_config.php';
$client_Name="";
$err_client_Name="";
$client_Address="";
$err_client_Address="";
$client_Email="";
$err_client_Email="";
$client_joinDate="";
$err_client_joinDate="";
$client_Password="";
$err_client_Password="";
$client_type="";
$err_client_type="";
$client_Phone="";
$err_client_Phone="";
$hasError=false;

function validEmail($client_Email){
     $pos_at = strpos($client_Email, "@");
     $pos_dot = strpos($client_Email, ".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 function validPassword($client_Password){
     $hasUpper = false;
     $hasLower = false;
     $hasDigit = false;

     for($i = 0; $i<strlen($client_Password);$i++){
         if(ctype_upper($client_Password[$i])){
             $hasUpper = true;
         }
         if(ctype_lower($client_Password[$i])){
             $hasLower = true;
         }
         if(ctype_digit($client_Password[$i])){
             $hasDigit = true;
         }
     }
     if($hasUpper==false || $hasLower==false || $hasDigit==false){
         return false;
     }
     else{
         return true;
     }
 }

 function validPhone($client_Phone){
 	$hasDigit=false;
 	for($i = 0; $i<strlen($client_Phone);$i++)
 	{
         if(ctype_digit($client_Phone[$i])){
             $hasDigit = true;}
             else{return false;}
 	}
 	if($hasDigit=false){return false;}
 	else{return true;}

 }
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["client_Name"]))
	{
		$err_client_Name="Name Required";
		$hasError=true;
	}
	else{$client_Name=$_POST["client_Name"];}
	if(empty($_POST["client_Address"]))
	{
		$err_client_Address="Address Required";
		$hasError=true;
	}
	else{$client_Address=$_POST["client_Address"];}

	if(empty($_POST["client_Email"])){
         $err_client_Email = "Email Required";
         $hasError=true;
     }
    elseif(!validEmail($_POST["client_Email"])){
         $err_client_Email = "Not a valid email";
         $hasError=true;
     }
     else{
         $client_Email=htmlspecialchars($_POST["client_Email"]);
     }

     if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
     	$err_client_joinDate="Date Required";
     	$hasError=true;
     }
     else{$client_joinDate=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}

     if(empty($_POST["client_type"])){
     	$err_client_type="Type Required";
     	$hasError=true;
     }
     else{$client_type=$_POST["client_type"];}

    if(empty($_POST["client_Password"])){
         $err_client_Password= "Password Required";
         $hasError=true;
     }
    elseif(!validPassword($_POST["client_Password"])){
        $err_client_Password = "Password must contain 1 upper_character 1 lower_character and 1 digit";
    $hasError=true;}
    elseif(strlen($_POST["client_Password"])<6){$err_client_Password="Pass Must be 6 digit";$hasError=true;}
    else{$client_Password=$_POST["client_Password"];}

     if(empty($_POST["client_Phone"])){
     	$err_client_Phone="Phone No. required";
     	$hasError=true;
     }
     elseif(!validPhone($_POST["client_Phone"])){$err_client_Phone="Must be digit";
     $hasError=ture;}
     elseif(strlen($_POST["client_Phone"])<11){$err_client_Phone="Must be 11 digit";$hasError=true;}
     else{$client_Phone=$_POST["client_Phone"];}


    if(!$hasError){insertClient($client_Name,$client_Address,$client_Email,$client_Phone,$client_joinDate,$client_type);
    	loginData($client_Email,$client_Password,$client_type);}

    if(isset($_POST["edit_info"])){
    	updateClientInfo($_GET["id"],$client_Name,$client_Address,$client_Email,$client_Phone,$client_joinDate,$client_type);
    }

  }

  function loginData($client_Email,$client_Password,$client_type){
  	$query="INSERT INTO login VALUES('NULL','$client_Email','$client_Password','$client_type');";
  	execute($query);
  }

 function insertClient($client_Name,$client_Address,$client_Email,$client_joinDate,$client_type,$client_Phone)
   {
   	   $query="INSERT INTO profile VALUES('NULL','$client_Name','$client_Address','$client_Email','$client_joinDate','$client_type','$client_Phone','active');";
   	  execute($query);
   }

   function getAllClient(){
   	  $query="SELECT * from temp_registry";
   	  $result=get($query);
   	  return $result;
   }

   function getAllValidClients(){
   	$query="SELECT * from profile";
   	$result=get($query);
   	return $result;
   }

   function getValidClients($sl){
   	$query="SELECT * from profile WHERE sl=$sl";
   	$result=get($query);
   	if(count($result)>0){return $result[0];}
   	return false;
   }
   function updateClientInfo($id,$client_Name,$client_Address,$client_Email,$client_Phone,$client_joinDate,$client_type){
   	 $query="UPDATE profile SET name='$client_Name',address='$client_Address',email='$client_Email',phone_no='$client_Phone',join_date='$client_joinDate',type='$client_type',status='active' WHERE sl=$id;";
   	execute($query);
   	  $query2="UPDATE login SET email='$client_Email' WHERE sl=$id;";
   	  execute($query2);

   }


?>
