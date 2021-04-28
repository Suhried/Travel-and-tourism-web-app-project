<?php require_once 'models/db_config.php';


$place_name="";
$err_place_name="";
$category="";
$err_category="";
$price="";
$err_price="";
$description="";
$err_description="";

$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){


	if(empty($_POST["place_name"])){
		$err_place_name="<br>PlaceName Required";
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
	else {
		$description=$_POST["description"];
	}
		
	if(isset($_POST["location_info"])){
    	updatelocation_info($_GET["id"],$place_name,$category,$price,$description);

    }
	
	
}



function getValidlocation_info(){
   	$query="SELECT * from location_info ";
   	$result=get($query);
   	
   	return $result;
}

 function getlocation_info($sl){
   	$query="SELECT * from location_info WHERE sl=$sl";
   	$result=get($query);
   	if(count($result)>0)
   		{return $result[0];}
   	return false;
   }
 	

 function updatelocation_info($id,$place_name,$category,$price,$description){
    $query="UPDATE location_info SET place_name='$place_name',category='$category', price='$price',description='$description' WHERE sl=$id;";

  execute($query);
   	  

   }
?>