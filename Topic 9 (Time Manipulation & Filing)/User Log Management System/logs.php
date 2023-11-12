	<style type="text/css">
		h2{
			background-color: steelblue;
			padding: 10px;
			height: auto;
			text-align: center;
			border-radius: 10px;
			border: 2px solid darkred;
		}

		table tr th{
			background-color: blue;
			color: white;
		}
		body{
			font-family: cursive;
			background-color: lightcyan;
		}
	</style>
<?php

	require_once("require/connection.php");

	$user_id = $_GET['id'];
	$fullname = $_GET['name'];

	$query = "SELECT * FROM `user_logs` WHERE `user_id` = $user_id";
	$stmt = mysqli_prepare($connection, $query);

	mysqli_stmt_execute($stmt);

	$data = mysqli_stmt_get_result($stmt);

	?>
	<center>
	<h2><?php echo $fullname; ?>'s Log</h2>
	<table border="1" width="100%">
	<tr>
		<th>User ID</th>
		<th>Logged In</th>
		<th>Logged Out</th>
	</tr>
	<?php
	while ($post = mysqli_fetch_assoc($data)) {
		?>
	<tr align="center">
	<td>
		<?php echo $post['user_id']; ?>		
	</td>
	<td>
		<?php 
		echo $post['logged_in']; 
		?>
	</td>
	<td>
		<?php 
		echo $post['logged_out']; 
		?>
	</td>
	</tr>
	<?php
	}
	?>
	</table>
</center>