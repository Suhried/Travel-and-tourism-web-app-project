<?php 
require_once "db_config.php";
$agency_Name="";
$err_agency_Name="";
$agency_Address="";
$err_agency_Address="";
$agency_Email="";
$err_agency_Email="";
$agency_License="";
$err_agency_License="";
$agency_joinDate="";
$err_agency_joinDate="";
$agency_Phone="";
$err_agency_Phone="";
$agency_Password="";
$err_agency_Password="";
$hasError=false;

function validEmail($agency_Email){
     $pos_at = strpos($agency_Email, "@");
     $pos_dot = strpos($agency_Email, ".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 function validPassword($agency_Password){
     $hasUpper = false;
     $hasLower = false;
     $hasDigit = false;

     for($i = 0; $i<strlen($agency_Password);$i++){
         if(ctype_upper($agency_Password[$i])){
             $hasUpper = true;
         }
         if(ctype_lower($agency_Password[$i])){
             $hasLower = true;
         }
         if(ctype_digit($agency_Password[$i])){
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

 function validLicense($agency_License)
 {
 	$hasDigit=false;
 	for($i=0 ;$i<strlen($agency_License);$i++)
 	{
 		if(ctype_digit($agency_License[$i]))
 		{
 			$hasDigit=true;
 		}
 		else {$hasDigit=false;}
 	}
    if($hasDigit=false){return false;}
    else{return true;}
 }

  function validPhone($agency_Phone){
    $hasDigit=false;
    for($i = 0; $i<strlen($agency_Phone);$i++)
    {
         if(ctype_digit($agency_Phone[$i])){
             $hasDigit = true;}
             else{$hasDigit= false;}
    }
    if($hasDigit=false){return false;}
    else{return true;}
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["agency_Name"]))
	{
		$err_agency_Name="Name Required";
        $hasError=true;
	}
	else{$agency_Name=$_POST["agency_Name"];}
	if(empty($_POST["agency_Address"]))
	{
		$err_agency_Address="Address Required";
        $hasError=true;
	}
	else{$agency_Address=$_POST["agency_Address"];}

	if(empty($_POST["agency_Email"])){
         $err_agency_Email = "Email Required";
         $hasError=true;
     }
    elseif(!validEmail($_POST["agency_Email"])){
         $err_agency_Email = "Not a valid email";
         $hasError=true;
     }
     else{
         $agency_Email=htmlspecialchars($_POST["agency_Email"]);
     }

     if(empty($_POST["agency_License"]))
     {
     	$err_agency_License="License Requried";
        $hasError=true;
     }
     elseif (!validLicense($_POST["agency_License"])) {
     	$err_agency_License="License not valid";
        $hasError=true;
     }
     elseif(strlen($_POST["agency_License"])<10){$err_agency_License="Must be 10 Digit";$hasError=true;}
     else {$agency_License=$_POST["agency_License"];}

     if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
     	$err_agency_joinDate="Date Required";
        $hasError=true;
     }
     else{$agency_joinDate=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}

    if(empty($_POST["agency_Password"])){
         $err_agency_Password= "Password Required";
         $hasError=true;
     }
    elseif(!validPassword($_POST["agency_Password"])){
        $err_agency_Password = "Password must contain 1 upper_character 1 lower_character and 1 digit";$hasError=true;}
    elseif(strlen($_POST["agency_Password"])<6){$err_agency_Password="Pass Must be 6 digit";$hasError=true;}
    else{$agency_Password=$_POST["agency_Password"];}

    if(empty($_POST["agency_Phone"])){
        $err_agency_Phone="Phone No. required";
        $hasError=true;
     }
     elseif(!validPhone($_POST["agency_Phone"])){$err_agency_Phone="Must be digit";
     $hasError=true;}
     elseif(strlen($_POST["agency_Phone"])<11){$err_agency_Phone="Must be 11 digit";$hasError=true;}
     else{$agency_Phone=$_POST["agency_Phone"];}

    if(!$hasError){insertAgency($agency_Name,$agency_Address,$agency_Email,$agency_License,$agency_joinDate,$agency_Phone);
        loginData($agency_Email,$agency_Password);}
    
    if(isset($_POST["edit_info"])){
        updateAgencyInfo($_GET["id"],$agency_Name,$agency_Address,$agency_Email,$agency_License,$agency_joinDate,$agency_Phone); 
    }

}

function loginData($agency_Email,$agency_Password){
    $query="INSERT INTO login VALUES('NULL','$agency_Email','$agency_Password','agency');";
    execute($query);
  }

function insertAgency($agency_Name,$agency_Address,$agency_Email,$agency_License,$agency_joinDate,$agency_Phone)
   {
       echo $query="INSERT INTO agencydata VALUES('NULL','$agency_Name','$agency_Address','$agency_Email','$agency_License','$agency_joinDate','$agency_Phone');";
       execute($query);
       echo $query1="INSERT INTO profile VALUES('NULL','$agency_Name','$agency_Address','$agency_Email','$agency_Phone','$agency_joinDate','agency','active');";
      execute($query1);
   }
function getAllAgency(){
      $query="SELECT * from agencydata";
      $result=get($query);
      return $result;
   }

function getValidAgency($sl){
    $query="SELECT * from agencydata WHERE sl=$sl";
    $result=get($query);
    if(count($result)>0)
        {return $result[0];}
    return false;
   }
   function updateAgencyInfo($id,$agency_Name,$agency_Address,$agency_Email,$agency_License,$agency_joinDate,$agency_Phone){
       $query="UPDATE agencydata SET name='$agency_Name',address='$agency_Address',email='$agency_Email',license='$agency_License',date='$agency_joinDate',phone='$agency_Phone'WHERE sl=$id;";
         execute($query);

        $query1="UPDATE profile SET name='$agency_Name',address='$agency_Address',email='$agency_Email',phone_no='$agency_Phone',join_date='$agency_joinDate',type='agency',status='active' WHERE sl=$id;";
         execute($query1);
        $query2="UPDATE login SET email='$agency_Email' WHERE sl=$id;";

        execute($query2);

   }

?>