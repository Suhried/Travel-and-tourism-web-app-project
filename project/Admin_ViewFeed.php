<?php 
session_start();
  if(!isset($_SESSION["loggedin"]))
 {
    header("Location: registration.php");
 }
include 'Admin_Feed_Header.php';
require_once 'controllers/Admin_ViewFeedController.php';

$sl=$_GET["id"];

$result=getAllTravellersData($sl);

?>

 <html>
<body>
<div class="center">
	<h3 class="text">View Secttion</h3>
	<form action="" method="post" class="form-horizontal form-material">
		
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" name="traveller_Email" value ="<?php echo $result["email"];?>" class="form-control">
			<span><?php echo $err_traveller_Email;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Messege:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<textarea class="form-control"> <?php echo $result["messege"]?></textarea>
			<span><?php echo $err_traveller_Messege;?></span>
		</div>

		<div class="form-group text-center">
			<input type="submit" name= "confirm" class="btn btn-success" value="Send Confirmation" class="form-control">
			<input type="submit" name="dismiss" class="btn btn-warning" value="Dismiss" class="form-control">
		</div>

<?php include 'Admin_Home_Footer.php';?>
