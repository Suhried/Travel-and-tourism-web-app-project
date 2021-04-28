<?php 
/*session_start();
  if(!isset($_SESSION["loggedin"]))
 {
    header("Location: registration.php");
 }*/
include 'Admin_Client_Header.php';
require_once 'models/db_config.php';
require_once 'controllers/Admin_ClientController.php';
$result = getAllValidClients();
?>
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Clients <br>
					25
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> New Clients <br>
					10
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<h3 class="text">All Clients Data</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Phone No.</th>
			<th>Join Date</th>
			<th>Client Type</th>
		</thead>

		<?php 
		foreach($result as $row):?>
		<tbody>
			<td><?php echo $row["sl"];?></td>
			<td><?php echo $row["name"];?></td>
			<td><?php echo $row["address"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["phone_no"]?></td>
			<td><?php echo $row["join_date"];?></td>
			<td><?php echo $row["type"];?></td>
            <td><a href="Admin_UpdateClient.php?id=<?php echo $row['sl'];?>" class="btn btn-warning">Update</a></td>
	        <td><a href="controllers/Admin_ClientDeleteController.php?id=<?php echo $row['sl'];?>" class="btn btn-danger">Delete</a></td>
		</tbody>
		<?php endforeach;?>
	</table>
</div>
<?php include 'Admin_Home_Footer.php';?>