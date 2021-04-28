<?php include 'locationinfo_header.php';
require_once 'controllers/updateinfoController.php';
require_once 'models/db_config.php';
$sl= $_GET["id"];
$location_info = getlocation_info($sl);
?>

<div class="center">
	<form action ="" method ="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Place Name:</h4> 
			<input type="hidden" name="sl" value="<?php echo $location_info["sl"];?>">
			<input type="text" name="place_name" placeholder="Place Name" value="<?php echo $location_info ["place_name"];?>" class="form-control">
			<span><?php echo $err_place_name;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Category:</h4>
			<input type="hidden" name="sl" value="<?php echo $location_info["sl"];?>"> 
			<input type="text" name="category" placeholder="Category" value="<?php echo $location_info ["category"];?>" class="form-control">
			<span><?php echo $err_category;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Price:</h4>
			<input type="hidden" name="sl" value="<?php echo $location_info["sl"];?>"> 
			<input type="text" name="price" placeholder="Amount" value="<?php echo $location_info ["price"];?>" class="form-control">
			<span><?php echo $err_price;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<input type="hidden" name="sl" value="<?php echo $location_info["sl"];?>">
			<textarea name="description" value="<?php echo $description;?>" class="form-control"><?php echo $location_info ["description"]?></textarea>
			<span><?php echo $err_description;?></span> 
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="location_info" class="btn btn-success" value="Update" class="form-control">
			<td><a href="locationinfo.php" class="btn btn-danger">Back</a></td>
		</div>
	</form>
</div>
<?php
		include 'travel_footer.php' ?>