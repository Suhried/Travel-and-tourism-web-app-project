<?php include 'locationinfo_header.php';

require_once "models/db_config.php";
require_once "controllers/insertinfocontroller.php";

$result =getAllValidlocation_info();

?>
<div class="center">
    <h3 class="text">Location Info </h3>
    <table class="table table-striped">
        <thead>
            <th>Sl#</th>
            <th> Place_name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Description</th>
            
            
        </thead>

        <?php 
        foreach ($result as $row ): ?> 
        
        <tbody>
            <td><?php echo $row["sl"];?></td>
            <td><?php echo $row["place_name"];?></td>
           
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["price"];?></td>
            <td><?php echo $row["description"];?></td>
            

            <td><a href="updateinfo.php?id=<?php echo $row['sl'];?>"class="btn btn-Success">View</a></td>
            <td><a href="controllers/location_deletcontroller.php?id=<?php echo $row['sl'];?>"class="btn btn-danger">Dismiss</td>
        </tbody>
        <?php endforeach;?>
    </table>
        
   
</div>

<?php include 'travel_footer.php';?>
		