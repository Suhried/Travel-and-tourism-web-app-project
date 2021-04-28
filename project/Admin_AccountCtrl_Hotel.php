<?php 
include 'Admin_AccountCtrl_Header.php';
require_once "controllers/Admin_AccountController.php";
$result = getAllHotelsAcc();
?>
<div class="center">
	<h3 class="text">All HO Account</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Account Type</th>
			<th>Status</th>
		</thead>

		<?php 
		foreach($result as $row):?>
		<tbody>
			<td><?php echo $row["sl"];?></td>
			<td><?php echo $row["name"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["type"];?></td>
			<td><?php echo $row["status"];?></td>
            <td><a href="controllers/Admin_AccountActiveController.php?id=<?php echo $row['sl'];?>" class="btn btn-success">Active</a></td>
            <td><a href="controllers/Admin_AccountDeactiveController.php?id=<?php echo $row['sl'];?>" class="btn btn-danger">Deactive</a></td>
		</tbody>
		<?php endforeach;?>
	</table>
		</tbody>
	</table>
</div>
<?php include 'Admin_Home_Footer.php';?>