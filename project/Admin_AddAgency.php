<?php 

include 'Admin_Agency_Header.php';
require_once 'controllers/Admin_AgencyController.php';
?>
<html>
<body>
<div class="center">
	<h3 class="text">Agency Registraion</h3>
	<form action="" method="post" class="form-horizontal form-material">
		
		<div class="form-group">
			<h4 class="text">Agency Name:</h4> 
			<input type="text" placeholder="Agency Name" name="agency_Name" value ="<?php echo $agency_Name;?>" class="form-control">
			<span><?php echo $err_agency_Name;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Location:</h4> 
			<input type="text" placeholder="House No,Road,City,Country" name="agency_Address" value="<?php echo $agency_Address?>" class= "form-control">
			<span><?php echo $err_agency_Address;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Org. Email:</h4> 
			<input type="text" placeholder="Enter a Valid Email" name="agency_Email" value="<?php echo $agency_Email?>" class="form-control">
			<span><?php echo $err_agency_Email;?></span>
		</div>


		<div class="form-group">
			<h4 class="text">License:</h4> 
			<input type="text" placeholder="Enter Your License" name="agency_License" value="<?php echo $agency_License?>" class="form-control">
			<span><?php echo $err_agency_License;?></span>
		</div>
		

	    <div class="form-group">
			<h4 class="text">Join Date:</h4> 
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
			<span><?php echo $err_agency_joinDate;?></span>
		</div>

        <div class="form-group">
			<h4 class="text">Phone:</h4> 
			<input type="text" placeholder="Enter Phone No." name="agency_Phone" value="<?php echo $agency_Phone?>" class="form-control">
			<span><?php echo $err_agency_Phone;?></span>
		</div>


		<div class="form-group">
			<h4 class="text">Password:</h4> 
			<input type="text" placeholder="Create a Temp Password" name="agency_Password" value="<?php echo $agency_Password?>" class="form-control">
			<span><?php echo $err_agency_Password;?></span>
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" value="Create Account" class="form-control">
		</div>
	</form>
</div>
<?php include 'Admin_Home_Footer.php';?>
