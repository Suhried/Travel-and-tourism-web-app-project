<?php

include 'Admin_Feed_Header.php';
require_once "controllers/Admin_FeedBackController.php";
$result = getAllAgenciesData();
?>
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Feedback Count <br>
					25
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> New FeedBack <br>
					10
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<h3 class="text">Agency FeedBack</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Messege</th>
			<th>Issue Date</th>
			<th>Client Type</th>
		</thead>

		<?php 
		foreach($result as $row):?>
		<tbody>
			<td><?php echo $row["sl"];?></td>
			<td><?php echo $row["name"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["messege"]?></td>
			<td><?php echo $row["date"];?></td>
			<td><?php echo $row["type"];?></td>
            <td><a href="Admin_ViewFeed.php?id=<?php echo $row['sl']?>" class="btn btn-warning">View</a></td>
            <td><a href="controllers/Admin_FeedDismissController.php?id=<?php echo $row['sl']?>" class="btn btn-danger">Dismiss</a></td>
		</tbody>
		<?php endforeach;?>
	</table>
		</tbody>
	</table>
</div>
<?php include 'Admin_Home_Footer.php';?>