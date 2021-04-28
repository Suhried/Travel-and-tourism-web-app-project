
<?php 
include 'travelhome.php';
require_once "db_config.php";
$query="SELECT * from t_activity ";
$result = get($query);

?>


<div class="center">
    <h3 class="text">Client Activity </h3>
    <table class="table table-striped">
        <thead>
            <th>Sl#</th>
            <th> Name</th>
            <th>Service</th>
            <th>Email</th>
            <th>Date</th>
            <th>Status</th>
             <th>Package_info</th>
            
        </thead>

        <?php 
        while($row=mysqli_fetch_assoc($result)):?>
        <tbody>
            <td><?php echo $row["sl"];?></td>
            <td><?php echo $row["name"];?></td>
           
            <td><?php echo $row["service"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["date"];?></td>
            <td><?php echo $row["status"];?></td>
            <td><?php echo $row["package_info"];?></td>
            
            <td><a href="travel_view.php" class="btn btn-Success">View</a></td>
            <td><a class="btn btn-danger">Delete</td>
        </tbody>
        <?php endwhile;?>
    </table>
        </tbody>
    </table>
</div>
		<?php
		include 'travel_footer.php' ?>