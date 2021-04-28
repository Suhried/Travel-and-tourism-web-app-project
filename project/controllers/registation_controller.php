<?php require_once 'models/db_config.php';
$name="";
$err_name="";
$address="";
$err_address="";
$email="";
$err_email="";
$l_number="";
$err_l_number="";
$join_date="";
$err_join_date="";
$phone_number="";
$err_phone_number="";
$password="";
$err_password="";
 $hasError=false;
function validEmail($Email){
     $pos_at = strpos($Email, "@");
     $pos_dot = strpos($Email, ".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 function validPassword($Password){
     $hasUpper = false;
     $hasLower = false;
     $hasDigit = false;

     for($i = 0; $i<strlen($Password);$i++){
         if(ctype_upper($Password[$i])){
             $hasUpper = true;
         }
         if(ctype_lower($Password[$i])){
             $hasLower = true;
         }
         if(ctype_digit($Password[$i])){
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


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["name"]))
    {
        $err_name="Name Required";
         $hasError=true;
    }
    else{$name=$_POST["name"];}

    if(empty($_POST["address"]))
    {
        $err_address="Address Required";
         $hasError=true;
    }
    else{$address=$_POST["address"];}

    if(empty($_POST["email"])){
         $err_email = "Email Required";
          $hasError=true;
     }
    elseif(!validEmail($_POST["email"])){
         $err_email = "Not a valid email";
         $hasError=true;
     }
    else{$email=htmlspecialchars($_POST["email"]);}

    if(empty($_POST["l_number"])){
        $err_l_number="License Required";
        $hasError=true;
    }
    else{$l_number=$_POST["l_number"];}


     if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
        $err_join_date="Date Required";
         $hasError=true;
     }
     else{$join_date=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}

     if(empty($_POST["phone_number"]))
    {
        $err_phone_number="Phone Number Required";
         $hasError=true;
    }
    else{$phone_number=$_POST["phone_number"];}

    if(empty($_POST["password"])){
         $err_password= "Password Required";
          $hasError=true;
     }
    elseif(!validPassword($_POST["password"])){
        $err_password = "Password must contain 1 upper_character 1 lower_character and 1 digit";}
    else{$password=$_POST["password"];}

    if(!$hasError){ inserttemp_registry($name,$address,$email,$l_number,$join_date,$phone_number,$password);
        }
}
  
   function inserttemp_registry($name,$address,$email,$l_number,$join_date,$phone_number,$password)
   {
       $query="INSERT INTO agencydata VALUES('NULL','$name','$address','$email','$l_number','$join_date','$phone_number');";
      execute($query);
      
       $query1="INSERT INTO login VALUES('NULL','$email','$password','agency','active')";
      execute($query1);
   }

  function checkemail($email){
    $query="SELECT * FROM temp_registry WHERE email='$email'";
    $result=get($query);
    if(count($result)>0){
        return false;
    }
   return true;
  }

?>



