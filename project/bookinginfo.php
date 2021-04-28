

<?php 
include 'travel_header.php';
require_once "models/db_config.php";
require_once "controllers/bookinfconfrimcontroller.php";

$result =getAllValidBookingInfo();

?>
<div class="center">
    <h3 class="text">Booking Info </h3>
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
        foreach ($result as $row ): ?> 
        
        <tbody>
            <td><?php echo $row["sl"];?></td>
            <td><?php echo $row["name"];?></td>
           
            <td><?php echo $row["service"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["date"];?></td>
            <td><?php echo $row["status"];?></td>
            <td><?php echo $row["package_info"];?> </td>

            <td><a href="bookingconfrim.php" class="btn btn-Success">View</a></td>
            <td><a href="controllers/booking_deletcontroller.php?id=<?php echo $row['sl'];?>"class="btn btn-danger">Dismiss</td>
        </tbody>
        <?php endforeach;?>
    </table>
        
   
</div>

<?php include 'travel_footer.php';?>
