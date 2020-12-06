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
			<td colspan="6"><h2>View Left Members</h2><br></td>
		</tr>
		<tr>
			<th>User No</th>
			<th>User Name</th>
			<th>User Contact</th>
			
		</tr>
		<?php 
		$i=0;
			$sel_user="SELECT * FROM left_members";
			$run_user=mysqli_query($con, $sel_user);
			while ($row_user=mysqli_fetch_array($run_user)) {
				$user_id=$row_user['id'];
				$user_name=$row_user['name'];
			
				$user_contact=$row_user['contact_no'];

				$i++;
			
		?>
		<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $user_name; ?></td>
			<td><?php echo $user_contact; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>