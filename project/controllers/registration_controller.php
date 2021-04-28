<?php

require_once 'models/db_config.php';


 $email = "";
 $err_email = "";
 $pass = "";
 $err_pass = "";
 $type="";
 $err_type="";
$hasError=false;

 function validEmail($email){
     $pos_at = strpos($email, "@");
     $pos_dot = strpos($email, ".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 function validPassword($password){
     $hasUpper = false;
     $hasLower = false;
     $hasDigit = false;

     for($i = 0; $i<strlen($password);$i++){
         if(ctype_upper($password[$i])){
             $hasUpper = true;
         }
         if(ctype_lower($password[$i])){
             $hasLower = true;
         }
         if(ctype_digit($password[$i])){
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
     if(empty($_POST["email"])){
         $err_email = "Email Required";
         $hasError = true;
     }
     elseif(!validEmail($_POST["email"])){
         $err_email = "Not a valid email";
         $hasError = true;
     }

     else{
        $email=$_POST["email"];

     }
     
     if(empty($_POST["password"])){
         $err_pass= " Password Required";
         $hasError = true;
     }
     elseif(!validPassword($_POST["password"])){
        $err_pass = " Password must contain 1 upper_character 1 lower_character and 1 digit";
        $hasError = true;
     }
     else{
        $pass=$_POST["password"];

     }

    
    if(!$hasError)
    {
        
        insert_user($email,$pass);
        
    }


}


    if(isset($_POST["login"])){
        $result=authenticateUser($_POST["email"],$_POST["password"]);
        $userType="";
        $userStatus="";



        if($result){
            foreach($result as $row){
                $userType=  $row['type'];
                $userStatus=$row['status'];
            }
        }
        
        if($userStatus=="inactive"){echo "Account Inactive!";}
        elseif($userStatus=="active"){
               if($userType=="admin"){
                    session_start();
        $_SESSION["email"]=$result["email"];

                header("Location: Admin_Home.php");}

               elseif($userType=="agency"){
                        session_start();
        $_SESSION["email"]=$result["email"];

                header("Location: travelhome.php");}

               else
                {
                        session_start();
        $_SESSION["email"]=$result["email"];
                    header("Location: home.php?id=".$_POST["email"]);}
               
            }
        elseif(!$result){
            echo "invalid email or password";
        }
    }


 



function insert_user($email,$pass)
{

        $query="select * from login where email='$email' and password='$pass' ";
        $result = get($query);
        return $result;
        

}

function authenticateUser($userEmail,$password){
    $query= "SELECT * FROM login WHERE email='$userEmail' AND password='$password'";
    $result=get($query);
    return $result;
}

?>