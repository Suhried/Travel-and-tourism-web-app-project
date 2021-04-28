<?php require_once 'models/db_config.php';?>
<?php
$fname="";
$err_fname="";

$dname="";
$err_dname="";
$depature="";
$err_depature="";
$passangers="";
$err_passengers="";
$ticket="";
$err_ticket="";

$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){


	if(empty($_POST["fname"])){
		$err_fname="<br>Place Required";
		$hasError=true;
	}
	else{
		$fname=$_POST["fname"];
	}
if(empty($_POST["dname"])){
		$err_dname="<br>Place Required";
		$hasError=true;
	}
	else{
		$dname=$_POST["dname"];
	}

	if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
     	$err_depature="Depature Required";
     }
     else{$depature=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}

     if(!isset($_POST["passangers"]))
     	{$err_passengers="Passangers Required";}

 else{$passangers=$_POST["passangers"];}

 if(!isset($_POST["ticket"]))
     {
     	$err_ticket="Ticket Required";
     	$hasError=true;
     }
     else{$ticket=$_POST["ticket"];}

 	if(!$hasError){ insertair($fname,$dname,$depature,$passangers,$ticket);
        }
}	
 function insertair($fname,$dname,$depature,$passangers,$ticket)
   {
     echo  $query="INSERT INTO transport_by VALUES('NULL','$fname','$dname','$depature','$passangers','$ticket');";
      execute($query);
       
   }

?>