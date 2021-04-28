<?php 
require_once 'models/db_config.php';

$traveller_Email="";
$err_traveller_Email="";

$traveller_Messege="";
$err_traveller_Messege="";

function validEmail($client_Email){
     $pos_at = strpos($client_Email, "@");
     $pos_dot = strpos($client_Email, ".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 if(empty($_POST["traveller_Email"])){
      $err_traveller_Email = "Email Required";
     }
 elseif(!validEmail($_POST["traveller_Email"])){
         $err_traveller_Email = "Not a valid email";
     }
 else{$traveller_Email=htmlspecialchars($_POST["traveller_Email"]);}

 if(empty($_POST["traveller_Messege"]))
 {
 	$err_traveller_Messege="Messege Required";
 }
 else{$traveller_Messege=$_POST["traveller_Messege"];}


 if(isset($_POST["confirm"])){ header("Location: Admin_TravellerCtrl.php");}
}
 ?>