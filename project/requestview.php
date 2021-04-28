
<?php include 'travel_header.php';
require_once 'controllers/requestviewController.php';
$sl= $_GET["id"];
$TravellersRequest = getTravellersRequest($sl);
?>
<div class="center">
	<form action ="" method ="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text"> Name:</h4> 
			<input type="hidden" name="sl" value="<?php echo $TravellersRequest ["sl"];?>">

			<input disab type="text" name="name" value="<?php echo $TravellersRequest ["fname"];?>" class="form-control">
			<span><?php echo $err_name;?></span>
		</div>
		


			<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="hidden" name="sl" value="<?php echo $TravellersRequest ["sl"];?>">
			<input  type="text"  name="Email" value="<?php echo $TravellersRequest["email"]?>"  class="form-control">
			<span><?php echo $err_Email;?></span>
		</div>	

		
		<div class="form-group">
			<h4 class="text">Description:</h4>
			<input type="hidden" name="sl" value="<?php echo $TravellersRequest ["sl"];?>"> 
			<textarea  type="text" name="description" class="form-control"><?php echo $TravellersRequest["description"];?></textarea>
			<span><?php echo $err_description;?></span>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="requestatour" class="btn btn-success" value="Confirm" class="form-control">
		</div>
	</form>
</div>
<?php
		include 'travel_footer.php' ?>