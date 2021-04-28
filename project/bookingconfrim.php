<?php include 'travel_header.php';
require_once 'controllers/bookinfconfrimController.php';
require_once 'models/db_config.php';

?>
<html>
<body>
<div class="center">
	<h3 class="text">Booking Info</h3>
	<form action="" onsubmit="return validate()" method="post" class="form-horizontal form-material">
		
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" id="uname" name="Name" value ="<?php echo $Name;?>" class="form-control">
			<span id="err_uname"><?php echo $err_Name;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Service:</h4> 
			<input type="text" id="sname" name="Service" value="<?php echo $Service?>" class= "form-control">
			<span id="err_sname"><?php echo $err_Service;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="text" id="ename" name="Email" value="<?php echo $Email?>" class="form-control">
			<span id= "err_ename"><?php echo $err_Email;?></span>
		</div>
		

	    <div class="form-group">
			<h4 class="text"> Date:</h4> 
			<select id="zdate" name="Day">
				<option selected disabled>Day</option>
				<?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
				?>
			</select>

			<select id="zdate" name="Month">
				<option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                	{echo "<option>$month[$i]</oprion>";}
                ?>
			</select>

			<select id="zdate" name="Year">
				<option selected disabled>Year</option>
				<?php
                   for($i=2021;$i<=2025;$i++){echo "<option>$i</option>";}
				?>
			</select>
			<span id="err_zdate"><?php echo $err_Date;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Status:</h4> 
			<input type="text" id="stname" name="Status" value="<?php echo $Status?>" class="form-control">
			<span id="err_stname"><?php echo $err_Status;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Package_info:</h4> 
			<input type="text" id="paname" name="Package_info" value="<?php echo $Package_info?>" class="form-control">
			<span id="err_paname"><?php echo $err_Package_info;?></span>
		</div>

		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" value="Confrim" class="form-control">
			<td><a href="bookinginfo.php" class="btn btn-danger">Back</a></td>
		</div>
	</form>

		<script>
		function get(id){
			return document.getElementById(id);

		}
		function validate(){
			refresh();
			var hasError=false;
		
		if (get("uname").value == ""){
			get("err_uname").innerHTML=" * Name Required";
		
		get("err_uname").style.color=" orange";
         hasError=true;
	}

		if (get("sname").value== ""){
			get("err_sname").innerHTML=" *Service Required";
		
		get("err_sname").style.color=" orange";
         hasError=true;
	}
    
    if (get("ename").value == ""){
			get("err_ename").innerHTML=" *Email Required";
		
		get("err_ename").style.color=" orange";
         hasError=true;
	}
    
     	if (get("zdate").options.selectedIndex == 0){
			get("err_zdate").innerHTML=" *Date Required";
		
		get("err_zdate").style.color=" orange";
         hasError=true;
	}

	if (get("stname").value == ""){
			get("err_stname").innerHTML=" *Status Required";
		
		get("err_stname").style.color=" orange";
         hasError=true;
	}

	if (get("paname").value == ""){
			get("err_paname").innerHTML=" *Package Required";
		
		get("err_paname").style.color=" orange";
         hasError=true;
	}

	return !hasError;
}
	function refresh(){
		get("err_uname").innerHTML= "";
		get("err_sname").innerHTML="";
		get("err_ename").innerHTML="";
		get("err_zdate").innerHTML="";
		get("err_stname").innerHTML="";
		get("err_paname").innerHTML="";

	}
	</script>

<?php include 'travel_footer.php';?>
