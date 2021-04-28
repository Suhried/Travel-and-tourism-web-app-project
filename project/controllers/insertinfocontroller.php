<?php require_once 'models/db_config.php';?>


<?php
$place_name="";
$err_place_name="";
$category="";
$err_category="";
$price="";
$err_price="";
$discription="";
$err_description="";

$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){



	if(empty($_POST["place_name"])){
		$err_place_name="<br>Name Required";
		$hasError=true;
	}
	else{
		$place_name=$_POST["place_name"];
	}

if(empty($_POST["category"])){
		$err_category="<br>Category Required";
		$hasError=true;
	}
	else{
		$category=$_POST["category"];
	}

	if(empty($_POST["price"])){
		$err_price="<br>Price Required";
		$hasError=true;
	}
	else{
		$price=$_POST["price"];
	}
	if(empty($_POST["description"])){
		$err_description="<br>Description Required";
		$hasError=true;
	}
	else{
		$description=$_POST["description"];
	}
	
	
	if(!$hasError){ insertlocation_Info($place_name,$category,$price,$description);
        }

}

function insertlocation_info($place_name,$category,$price,$description)
   {
       $query="INSERT INTO location_info VALUES('NULL','$place_name','$category','$price','$description');";
      execute($query);
       
   }

   function getlocation_info(){
      $query="SELECT * from location_info";
      $result=get($query);
      return $result;
   }

    function getAllValidlocation_info(){
    $query="SELECT * from location_info";
    $result=get($query);
    return $result;
   }
?>
