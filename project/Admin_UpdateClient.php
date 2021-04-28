<?php 
include 'Admin_Client_Header.php';
require_once 'models/db_config.php';
require_once 'controllers/Admin_ClientController.php';
$sl=$_GET ["id"];
$result = getValidClients($sl);

?>
<html>
<body>
<div class="center">
	<h3 class="text">Client Info Update</h3>
	<form action="" method="post" class="form-horizontal form-material">
		
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" placeholder="Client Name" name="client_Name" value ="<?php echo $result["name"];?>" class="form-control">
			<span><?php echo $err_client_Name;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Address:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" placeholder="House No,Road,City,Country" name="client_Address" value="<?php echo $result["address"]?>" class= "form-control">
			<span><?php echo $err_client_Address;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" placeholder="Enter a Valid Email" name="client_Email" value="<?php echo $result["email"]?>" class="form-control">
			<span><?php echo $err_client_Email;?></span>
		</div>
		

	    <div class="form-group">
			<h4 class="text">Join Date:</h4>
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>"> 
			<select name="Day">
				<option selected disabled>Day</option>
				<?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
				?>
			</select>

			<select name="Month">
				<option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                	{echo "<option>$month[$i]</oprion>";}
                ?>
			</select>

			<select name="Year">
				<option selected disabled>Year</option>
				<?php
                   for($i=1990;$i<=2021;$i++){echo "<option>$i</option>";}
				?>
			</select>
			<span><?php echo $err_client_joinDate;?></span>
		</div>

        <div class="form-group">
			<h4 class="text">Client Type:</h4>
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" placeholder="Travellers/Agency/HOwner" name="client_type" value="<?php echo $result["type"]?>" class="form-control">
			<span><?php echo $err_client_type;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Phone No:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" placeholder="Phone Number" name="client_Phone" value="<?php echo $result["phone_no"]?>" class="form-control">
			<span><?php echo $err_client_Phone;?></span>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" name="edit_info" value="Update Account" class="form-control">
		</div>
	</form>
</div>
<?php include 'Admin_Home_Footer.php';?>
