<?php include 'package&place_header.php';
require_once "models/db_config.php";
require_once "controllers/aircontroller.php";
?>
<div class="center">
	<form action ="" onsubmit="return validate()" method ="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">From:</h4> 
			<input type="text" id="rm" name="fname" placeholder="Place Name" value="<?php echo $fname;?>" class="form-control">
			<span id="err_rm" ><?php echo $err_fname;?></span>
		</div>
		
		
		<div class="form-group">
			<h4 class="text">Destination:</h4> 
			<input type="text" id="on" name="dname" placeholder="Place Name" value="<?php echo $dname;?>" class="form-control">
			<span id="err_on"><?php echo $err_dname;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Depature:</h4> 
				<select id="te" name="Day">
				<option selected disabled>Day</option>
				<?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
				?>
			</select>

			<select id="te" name="Month">
				<option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                	{echo "<option>$month[$i]</oprion>";}
                ?>
			</select>

			<select id="te" name="Year">
				<option selected disabled>Year</option>
				<?php
                   for($i=2021;$i<=2030;$i++){echo "<option>$i</option>";}
				?>
			</select>
			<span id="err_te"><?php echo $err_depature;?></span>
		</div>
			<div class="form-group">
			<h4 class="text">Number of Passangers:</h4> 
			<select id="ss" name="passangers" class="form-control">
				<option selected disabled>Passengers</option>
				<?php
                   for($i=1;$i<=6;$i++){echo "<option>$i</option>";}
				?>
		</select>
		<span id="err_ss"><?php echo $err_passengers;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Ticket Type:</h4> 
			<select id="ic" name="ticket" class="form-control">
				<option selected disabled>Choose</option>
				<?php $choose=array("Buiness Class","Economic");
                for($i=0;$i<count($choose);$i++)
                	{echo "<option>$choose[$i]</option>";}
                ?>
                 </select>
				<span id="err_ic" > <?php echo $err_ticket;?> </span>
		</div>

		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="BOOK" class="form-control">
			<td><a href="transport.php" class="btn btn-danger">Back</a></td>
		</div>
	</form>
   <script>
		function get(id){
			return document.getElementById(id);

		}
		function validate(){
			refresh();
			var hasError=false;
		
		if (get("rm").value == ""){
			get("err_rm").innerHTML=" *Place Required";
		
		get("err_rm").style.color=" orange";
         hasError=true;
	}

		if (get("on").value== ""){
			get("err_on").innerHTML=" *Place Required";
		
		get("err_on").style.color=" orange";
         hasError=true;
	}
    
         if (get("te").options.selectedIndex == 0){
			get("err_te").innerHTML=" *Depature Required";
		
		get("err_te").style.color=" orange";
         hasError=true;
	}

	  if (get("ss").options.selectedIndex == 0){
			get("err_ss").innerHTML=" *Passengers Required";
		
		get("err_ss").style.color=" orange";
         hasError=true;
	}

	 if (get("ic").options.selectedIndex == 0){
			get("err_ic").innerHTML=" *Ticket Required";
		
		get("err_ic").style.color=" orange";
         hasError=true;
	}

	return !hasError;
}
	function refresh(){
		get("err_rm").innerHTML= "";
		get("err_on").innerHTML="";
		get("err_te").innerHTML="";
		get("err_ss").innerHTML="";
		get("err_ic").innerHTML="";
		;

	}
	</script>

<?php
		include 'travel_footer.php' ?>