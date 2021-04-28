<?php require_once 'models/db_config.php';

$package_name="";
$err_package_name="";
$category="";
$err_category="";
$price="";
$err_price="";
$description="";
$err_description="";

$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){



	if(empty($_POST["package_name"])){
		$err_package_name="<br>Package_Name Required";
		$hasError=true;
	}
	else{
		$package_name=$_POST["package_name"];
	}
  if(!isset($_POST["category"]))
     {
     	$err_category="Category Required";
     	$hasError=true;
     }
     else{$category=$_POST["category"];}

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
	if(!$hasError){ insertmeal($package_name,$category,$price,$description);
        }

}
function insertmeal($package_name,$category,$price,$description)
   {
       $query="INSERT INTO meal VALUES('NULL','$package_name','$category','$price','$description');";
      execute($query);
       
   }

   function getmeal(){
      $query="SELECT * from meal";
      $result=get($query);
      return $result;
   }

    function getAllValidmeal(){
    $query="SELECT * from meal";
    $result=get($query);
    return $result;
   }


?>