
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
		$err_place_name="<br>Place Name Required";
		$hasError=true;
	}
	else{
		$place_name=$_POST["place_name"];
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
	if(!$hasError){ insertcreate($place_name,$category,$price,$description);
        }
	}


function insertcreate($place_name,$category,$price,$description)
   {
     echo  $query="INSERT INTO create_package VALUES('NULL','$place_name','$category','$price','$description');";
      execute($query);
       
   }

 function getcreate(){
      $query="SELECT * from create_package ";
      $result=get($query);
      return $result;
   }

    function getAllValidcreate(){
    $query="SELECT * from create_package";
    $result=get($query);
    return $result;
   }
?>
