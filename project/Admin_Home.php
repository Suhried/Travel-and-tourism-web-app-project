<?php 
// session_start();
  //if(!isset($_SESSION["loggedin"]))
 //{
    //header("Location: registration.php");
 //}
include 'Admin_Home_Header.php';
require_once 'models/db_config.php';
require_once 'controllers/Admin_ClientController.php';
$result = getAllClient();

?>
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Clients <br>
					5
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Hotel Owners <br>
					10
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Travel Agencies <br>
					10
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<h3 class="text">New Activity</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Join Date</th>
			<th>Phone No.</th>
		</thead>
		<?php 
		foreach($result as $row): ?>
		<tbody>
			<td><?php echo $row["sl"];?></td>
			<td><?php echo $row["name"];?></td>
			<td><?php echo $row["address"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["join_date"];?></td>
			<td><?php echo $row["phone_number"];?> </td>
		</tbody>
	<?php endforeach;?>
	</table>
</div>
<?php include 'Admin_Home_Footer.php';?>