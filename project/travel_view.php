<?php include 'travel_header.php';

$Name="";
$err_Name="";
$Service="";
$err_Service="";
$Email="";
$err_Email="";
$Date="";
$err_Date="";
$Status="";
$err_Status="";
$Package_info="";
$err_Package_info="";

function validEmail($client_Email){
     $pos_at = strpos($Email, "@");
     $pos_dot = strpos($Email, ".", $pos_at+1);

     if($pos_at < $pos_dot){
         return true;
     }
     return false;
 }
 
 
 


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["Name"]))
	{
		$err_client_Name="Name Required";
	}
	else{$Name=$_POST["Name"];}

	if(empty($_POST["Service"]))
	{
		$err_Service="Service Required";
	}
	else{$Service=$_POST["Service"];}

	if(empty($_POST["Email"])){
         $err_Email = "Email Required";
     }
    elseif(!validEmail($_POST["Email"])){
         $err_Email = "Not a valid email";
     }
     else{
         $Email=htmlspecialchars($_POST["Email"]);
     }

     if(!isset($_POST["Day"])||!isset($_POST["Month"])||!isset($_POST["Year"]))
     {
     	$err_Date="Date Required";
     }
     else{$Date=$_POST["Day"]."-".$_POST["Month"]."-".$_POST["Year"];}

    if(empty($_POST["Status"])){
         $err_Status= "Status Required";
     }
    
    else{$Status=$_POST["Status"];}

     if(empty($_POST["Package_info"])){
         $err_Package_info= "Package_info Required";
     }
    
    else{$Package_info=$_POST["Package_info"];}
}

?>
<html>
<body>
<div class="center">
	<h3 class="text">Client Activity </h3>
	<form action="" method="post" class="form-horizontal form-material">
		
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text"  name="Name" value ="<?php echo $Name;?>" class="form-control">
			<span><?php echo $err_Name;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Service:</h4> 
			<input type="text" name="Service" value="<?php echo $Service?>" class= "form-control">
			<span><?php echo $err_Service;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="text"  name="Email" value="<?php echo $Email?>" class="form-control">
			<span><?php echo $err_Email;?></span>
		</div>
		

	    <div class="form-group">
			<h4 class="text"> Date:</h4> 
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
                   for($i=2021;$i<=2025;$i++){echo "<option>$i</option>";}
				?>
			</select>
			<span><?php echo $err_Date;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Status:</h4> 
			<input type="text"  name="Status" value="<?php echo $Status?>" class="form-control">
			<span><?php echo $err_Status;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Package_info:</h4> 
			<input type="text"  name="Package_info" value="<?php echo $Package_info?>" class="form-control">
			<span><?php echo $err_Package_info;?></span>
		</div>

		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" value="Confrim" class="form-control">
			<input type="submit" class="btn btn-danger" value="Dismiss" class="form-control">
		</div>
	</form>
</div>
<?php include 'travel_footer.php';?>
