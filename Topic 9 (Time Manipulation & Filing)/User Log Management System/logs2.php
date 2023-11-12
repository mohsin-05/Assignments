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
	session_start();

	$user_id = $_GET['id'];
	$fullname = $_GET['name'];

	$query = "SELECT * FROM `user_logs` WHERE `user_id` = $user_id";
	$stmt = mysqli_prepare($connection,$query);

	mysqli_stmt_execute($stmt);

	$data = mysqli_stmt_get_result($stmt);

	?>
	<center>
	<h2><?php echo $fullname; ?>'s Log</h2>
	<table border="1" width="100%">
	<tr>
		<th>Logs</th>
	</tr>
	<?php
	$filename = $user_id."_".$fullname;
	$file_resource = fopen("logs/$filename.txt", "a+");
	
	while (!feof($file_resource)) {
		
		?>
	<tr align="center">
	<td>
		<?php 
		echo fgets($file_resource); 
		?>
	</td>
	</tr>
	<?php
	}
	?>
	</table>
</center>