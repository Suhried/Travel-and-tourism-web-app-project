<?php 

include 'Admin_Hotel_Header.php';
require_once "controllers/Admin_HotelController.php";
$result = getAllHotelBookInfo();

?>
<div class="center">
	<h3 class="text">Travellers Activity</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Traveller Name</th>
			<th>Service Type</th>
			<th>Email</th>
			<th>Occer Date</th>
			<th>Booking Status</th>
		</thead>

		<?php 
		foreach($result as $row):?>
		<tbody>
			<td><?php echo $row["sl"];?></td>
			<td><?php echo $row["name"];?></td>
			<td><?php echo $row["service"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["date"];?></td>
			<td><?php echo $row["status"];?></td>
            <td><a href="controllers/Admin_HotelBookControllers.php?id=<?php echo $row['sl']?>" class="btn btn-Success">Accept</a></td>
	        <td><a href="controllers/Admin_HotelRejectController.php?id=<?php echo $row['sl']?>"class="btn btn-danger">Reject</td>
		</tbody>
		<?php endforeach;?>
	</table>
		</tbody>
	</table>
</div>
<?php include 'Admin_Home_Footer.php';?>