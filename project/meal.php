<?php include 'meal_header.php';

	
require_once "models/db_config.php";
require_once "controllers/foodpackagecontroller.php";

$result =getAllValidmeal();

?>
<div class="center">
    <h3 class="text">Food package </h3>
    <table class="table table-striped"> 
        <thead>
            <th>Sl#</th>
            <th> Package_name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Description</th>
            
            
        </thead>

        <?php 
        foreach ($result as $row ): ?> 
        
        <tbody>
            <td><?php echo $row["sl"];?></td>
            <td><?php echo $row["package_name"];?></td>
           
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["price"];?></td>
            <td><?php echo $row["description"];?></td>
            

            
            <td><a  href="controllers/food_deletcontroller.php?id=<?php echo $row['sl'];?>" class="btn btn-danger">Cancel</td>
        </tbody>
        <?php endforeach;?>
    </table>
        
   
</div>

<?php include 'travel_footer.php';?>