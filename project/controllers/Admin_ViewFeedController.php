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

 if(isset($_POST["confirm"]) || isset($_POST["dismiss"])){deleteFeedBack($_GET["id"]);
    header("Location: Admin_FeedCtrl_Travellers.php");}
}

function getAllTravellersData($sl){
    $query="SELECT * from feedback WHERE sl=$sl";
    $result=get($query);
    if(count($result)>0)
        {return $result[0];}
    return false;
   }

function deleteFeedBack($sl){
    $query="DELETE FROM feedback WHERE sl='$sl';";
    execute($query);
}

 ?>
