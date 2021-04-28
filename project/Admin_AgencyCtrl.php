<?php 

include 'Admin_Agency_Header.php';
require_once 'controllers/Admin_AgencyController.php';
$result = getAllAgency();

;?>
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Agencies <br>
					25
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> New Agencies <br>
					10
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<h3 class="text">Agencies Data</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>License No.</th>
			<th>Join Date</th>
			<th>Phone No.</th>
		</thead>

		<?php 
		foreach($result as $row):?>
		<tbody>
			<td><?php echo $row["sl"];?></td>
			<td><?php echo $row["name"];?></td>
			<td><?php echo $row["address"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["license"]?></td>
			<td><?php echo $row["date"];?></td>
			<td><?php echo $row["phone"];?></td>
            <td><a href="Admin_UpdateAgency.php?id=<?php echo $row['sl'];?>" class="btn btn-warning">Update</a></td>
	        <td><a href="controllers/Admin_AgencyDeleteController.php?id=<?php echo $row['sl'];?>" class="btn btn-danger">Delete</a></td>
		</tbody>
		<?php endforeach;?>
	</table>
		</tbody>
	</table>
</div>
<?php include 'Admin_Home_Footer.php';?>