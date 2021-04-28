<?php include 'locationinfo_header.php';

require_once 'controllers/insertinfoController.php';
require_once 'models/db_config.php';
?>



<div class="center">
	<form action ="" method ="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Place Name:</h4> 
			<input type="text" name="place_name" placeholder="Place Name" value="<?php echo $place_name;?>" class="form-control">
			<span><?php echo $err_place_name;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Category:</h4> 
			
				<input type="text" name="category" placeholder="Category" value="<?php echo $category;?>" class="form-control">
			<span><?php echo $err_category;?></span>
         </div>

		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" name="price" placeholder="Amount" value="<?php echo $price;?>" class="form-control">
			<span><?php echo $err_price;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" name="description"  value="<?php echo $description;?>"class="form-control"></textarea>
			<span><?php echo $err_description;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file"name="image" value="<?php echo $image;?>" class="form-control">
			<span><?php echo $err_image;?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Confirm" class="form-control">
		</div>
	</form>
</div>
<?php
		include 'travel_footer.php' ?>