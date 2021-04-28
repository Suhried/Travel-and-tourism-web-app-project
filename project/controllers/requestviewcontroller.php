<?php 
require_once 'models/db_config.php';

$name="";
$err_name="";
$Email="";
$err_Email="";
$country="";
$err_country="";
$description="";
$err_description="";

$hasError=false;

function validEmail($Email){
     $pos_at = strpos($Email,"@");
     $pos_dot = strpos($Email,".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 
if($_SERVER["REQUEST_METHOD"]=="POST"){




	if(empty($_POST["name"])){
		$err_name="<br>Name Required";
		$hasError=true;
	}
	else{
		$name=$_POST["name"];
	}

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


	
	if(empty($_POST["description"])){
		$err_description="<br>Description Required";
		$hasError=true;
	}
	else{
		$description=$_POST["description"];
	}
	if(!$hasError){
	      
        if(isset($_POST["requestatour"])){
    	           updateTravellersRequest($name,$Email,$description);
                 DeleteData($_GET["id"]);

                 header("Location: clientrequest.php");

    }
  }
}


function getValidTravellersRequest(){
   	$query="SELECT * from requestatour ";
   	$result=get($query);
   	
   	return $result;
}

 function getTravellersRequest($sl){
   	$query="SELECT * from requestatour WHERE sl=$sl";
   	$result=get($query);
   	if(count($result)>0)
   		{return $result[0];}
   	return false;
   }
 	

 function updateTravellersRequest($name,$Email,$description){
   	  $query="INSERT INTO t_activity VALUES('NULL','$name','tour request','$Email','CURRENT_TIMESTARP','Booked')";

    execute($query);
   	  

   }

   function DeleteData($id){
    $query="DELETE FROM requestatour WHERE sl=$id";
    execute($query);
   }

?>