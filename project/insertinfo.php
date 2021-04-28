<?php include 'locationinfo_header.php';

require_once 'controllers/insertinfoController.php';
require_once 'models/db_config.php';
?>



<div class="center">
	<form action ="" onsubmit="return validate()" method ="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Place Name:</h4> 
			<input type="text" id="pname" name="place_name" placeholder="Place Name" value="<?php echo $place_name;?>" class="form-control">
			<span id="err_pname"><?php echo $err_place_name;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Category:</h4> 
			
				<input type="text" id="cname" name="category" placeholder="Category" value="<?php echo $category;?>" class="form-control">
			<span id="err_cname"><?php echo $err_category;?></span>
         </div>

		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" id="prname" name="price" placeholder="Amount" value="<?php echo $price;?>" class="form-control">
			<span id="err_prname"><?php echo $err_price;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" id="dsname" name="description"  value="<?php echo $description;?>"class="form-control"></textarea>
			<span id="err_dsname"><?php echo $err_description;?></span>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Confirm" class="form-control">
			<td><a href="locationinfo.php" class="btn btn-danger">Back</a></td>
		</div>
	</form>

	<script>
		function get(id){
			return document.getElementById(id);

		}
		function validate(){
			refresh();
			var hasError=false;
		
		if (get("pname").value == ""){
			get("err_pname").innerHTML=" *Place Name Required";
		
		get("err_pname").style.color=" orange";
         hasError=true;
	}

		if (get("cname").value == ""){
			get("err_cname").innerHTML=" *Category Required";
		
		get("err_cname").style.color=" orange";
         hasError=true;
	}
    
    if (get("prname").value == ""){
			get("err_prname").innerHTML=" *Price Required";
		
		get("err_prname").style.color=" orange";
         hasError=true;
	}
    
     if (get("dsname").value == ""){
			get("err_dsname").innerHTML=" *Description Required";
		
		get("err_dsname").style.color=" orange";
         hasError=true;
	}

	return !hasError;
}
	function refresh(){
		get("err_pname").innerHTML= "";
		get("err_prname").innerHTML="";
		get("err_dsname").innerHTML="";
		get("err_cname").innerHTML="";

	}
	</script>
</div>
<?php
		include 'travel_footer.php' ?>