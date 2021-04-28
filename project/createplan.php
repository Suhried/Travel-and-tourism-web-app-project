<?php include 'meal_header.php';?>


<?php
$name="";
$err_name="";
$category="";
$err_category="";
$price="";
$err_price="";
$discription="";
$err_discription="";
$image="";
$err_image="";
$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){


if (!isset($_POST["Confirm"])){
	if(empty($_POST["name"])){
		$err_name="<br>Name Required";
		$hasError=true;
	}
	else{
		$name=$_POST["name"];
	}
  if(!isset($_POST["category"]))
     {
     	$err_category="Category Required";
     }
     else{$category=$_POST["category"];}

	if(empty($_POST["price"])){
		$err_price="<br>Price Required";
		$hasError=true;
	}
	else{
		$price=$_POST["price"];
	}
	if(empty($_POST["discription"])){
		$err_discription="<br>Description Required";
		$hasError=true;
	}
	else{
		$discription=$_POST["discription"];
	}
	if(empty($_POST["image"])){
		$err_image="<br>Image Required";
		$hasError=true;
	}
	else{
		$image=$_POST["image"];}
	}
}
?>
<div class="center">
	<form action ="" method ="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Package Name:</h4> 
			<input type="text" name="name" placeholder="Package Name" value="<?php echo $name;?>" class="form-control">
			<span><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Category:</h4> 
			<select  class="form-control">
				<option selected disabled>Choose</option>
				
                <?php $Choose=array("Breakfast
                	","Lunch","Dinner","Breakfast+Lunch","Lunch+Dinner","Breakfast+Dinner","Dinner+Lunch","Breakfast+Lunch+Dinner");
                
                for($i=0;$i<count($Choose);$i++)
                	{echo "<option>$Choose[$i]</oprion>";}
                ?>

				<span><?php echo $err_category;?></span>

			</select>
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" name="price" placeholder="Amount" value="<?php echo $price;?>" class="form-control">
			<span><?php echo $err_price;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" name="discription"  value="<?php echo $discription;?>"class="form-control"></textarea>
			<span><?php echo $err_discription;?></span>
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