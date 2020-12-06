<html>
<head>
	<title>MyGym | View Users</title>
<style type="text/css">
	table{
		background-color: darkgrey;
	}
	tr,th{
		border: 2px solid white;
	}
</style>
</head>
<body>
	<table align="center" width="794" style="color:white;">
		<tr align="center">
			<td colspan="6"><h2>View Trainers Assigned To Users</h2><br></td>
		</tr>
		<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Trainer Name</th>
			
		</tr>
		<?php 
		$i=0;
			$sel_user="SELECT * FROM trainer_user";
			$run_user=mysqli_query($con, $sel_user);
			while ($row_user=mysqli_fetch_array($run_user)) {
				$user_id=$row_user['user_id'];
				$user_name=$row_user['user_name'];
				$tran_name=$row_user['tran_name'];

				$i++;
			
		?>
		<tr align="center">
			<td><?php echo $user_id; ?></td>
			<td><?php echo $user_name; ?></td>
			<td><?php echo $tran_name; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>