<?php require_once 'models/db_config.php';?>


<?php
$name="";
$err_name="";
$category="";
$err_category="";
$price="";
$err_price="";
$discription="";
$err_discription="";
$image="";
$err_image="";
$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){


if (!isset($_POST["Confirm"])){
	if(empty($_POST["name"])){
		$err_name="<br>Name Required";
		$hasError=true;
	}
	else{
		$name=$_POST["name"];
	}
  if(!isset($_POST["category"]))
     {
     	$err_category="Category Required";
     }
     else{$category=$_POST["category"];}

	if(empty($_POST["price"])){
		$err_price="<br>Price Required";
		$hasError=true;
	}
	else{
		$price=$_POST["price"];
	}
	if(empty($_POST["discription"])){
		$err_discription="<br>Description Required";
		$hasError=true;
	}
	else{
		$discription=$_POST["discription"];
	}
	if(empty($_POST["image"])){
		$err_image="<br>Image Required";
		$hasError=true;
	}
	else{
		$image=$_POST["image"];}
	}
}
?>