<?php 
session_start();
  if(!isset($_SESSION["loggedin"]))
 {
    header("Location: registration.php");
 }
include 'Admin_Agency_Header.php';
require_once 'controllers/Admin_AgencyController.php';
$sl=$_GET ["id"];
$result = getValidAgency($sl);

?>
<html>
<body>
<div class="center">
	<h3 class="text">Agency UpdateInfo</h3>
	<form action="" method="post" class="form-horizontal form-material">
		
		<div class="form-group">
			<h4 class="text">Agency Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" name="agency_Name" value ="<?php echo $result["name"];?>" class="form-control">
			<span><?php echo $err_agency_Name;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Location:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" name="agency_Address" value ="<?php echo $result["address"];?>" class= "form-control">
			<span><?php echo $err_agency_Address;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Org. Email:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" name="agency_Email" value ="<?php echo $result["email"];?>" class="form-control">
			<span><?php echo $err_agency_Email;?></span>
		</div>


		<div class="form-group">
			<h4 class="text">License:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" name="agency_License" value ="<?php echo $result["license"];?>" class="form-control">
			<span><?php echo $err_agency_License;?></span>
		</div>
		

	    <div class="form-group">
			<h4 class="text">Join Date:</h4> 
			<input type="hidden" name="id" value="<?php echo $result["date"];?>">
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
			<input type="hidden" name="id" value="<?php echo $result["sl"];?>">
			<input type="text" name="agency_Phone" value ="<?php echo $result["phone"];?>" class="form-control">
			<span><?php echo $err_agency_Phone;?></span>
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" name="edit_info" value="Update Account" class="form-control">
		</div>
	</form>
</div>
<?php include 'Admin_Home_Footer.php';?>
