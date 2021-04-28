<?php 
include 'travel_header.php';
require_once "models/db_config.php";
require_once "controllers/requestviewcontroller.php";
$result = getValidTravellersRequest();

?>
<div class="center">
    <h3 class="text">Travellers Request </h3>
    <table class="table table-striped">
        <thead>
            <th>Sl#</th>
            <th> Name</th>
            <th> Email</th>
            <th> Date</th>
            <th>Description</th>
            
        </thead>

        <?php 
        foreach($result as $row):?>
        <tbody>
            <td><?php echo $row["sl"];?></td>
            <td><?php echo $row["fname"];?></td>
           <td><?php echo $row["email"];?></td>
           <td><?php echo $row["date"];?></td>
            
            <td><?php echo $row["description"];?></td>
            
            <td><a href="requestview.php?id=<?php echo $row['sl'];?>"class="btn btn-Success">View</a></td>
            <td><a href="controllers/request_deletcontroller.php?id=<?php echo $row['sl'];?>" class="btn btn-danger">Dismiss</td>
        </tbody>
        <?php endforeach;?>
    </table>
        </tbody>
    </table>  
    
</div>
<?php include 'travel_footer.php';?>