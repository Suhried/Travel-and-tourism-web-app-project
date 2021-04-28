<?php

include 'Admin_Hotel_Header.php';
require_once "controllers/Admin_HotelController.php";
$result = getAllInfo();

?>
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Hotels <br>
					25
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> New Registered <br>
					10
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>

<div class="center">
	<h3 class="text">Registry Data</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th>Address</th>
			<th>Org. Email</th>
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
            <td><a href="controllers/Admin_BanController.php?id=<?php echo $row['sl'];?>" class="btn btn-warning">Ban</a></td>
		</tbody>
		<?php endforeach;?>
	</table>
		</tbody>
	</table>
</div>
<?php include 'Admin_Home_Footer.php';?>