<?php 

include 'Admin_Traveller_Header.php';
require_once 'controllers/Admin_MailController.php';

$mail=$_GET["id"];
?>

 <html>
<body>
<div class="center">
	<h3 class="text">Mail Secttion</h3>
	<form action="" method="post" class="form-horizontal form-material">
		
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="text" placeholder="To" name="traveller_Email" value ="<?php echo $mail;?>" class="form-control">
			<span><?php echo $err_traveller_Email;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Messege:</h4> 
			<textarea type="text" placeholder="Enter Your Messege" name="traveller_Messege" value="<?php echo $traveller_Messege?>" class= "form-control"></textarea>
			<span><?php echo $err_traveller_Messege;?></span>
		</div>

		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" name= "confirm" value="Send Confirmation" class="form-control">
		</div>

<?php include 'Admin_Home_Footer.php';?>
