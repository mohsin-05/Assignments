<?php

mysqli_report(MYSQLI_REPORT_OFF);

define("host_name", "localhost");
define("user_name", "root");
define("password", "");
define("database_name", "filing_register");

$connection = mysqli_connect(host_name,user_name,password,database_name);

$query = "SELECT CONCAT(first_name, last_name) AS 'Fullname', destination FROM users";

$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<style>
		h2{
			background-color: orange;
			border: 2px solid darkred;
			border-radius: 10px;
			margin: 10px 20px;
			padding: 10px;
			font-family: cursive;
			color: navy;
		}
		img{
			width: 120px;
			height: 100px;
		}
		th{
			background-color: green;
			color: white;
		}
		td{
			background-color: skyblue;
		}
		table{
			width: 100%;
			text-align: center; 
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<center>
		<h2>User Page</h2>
				<table border="1" style="text-align: center; width: 100%; border-collapse: collapse;">
				<tr>
					<th>Name</th>
					<th>Profile</th>
				</tr>
		<?php
			while ($row = mysqli_fetch_array($result)) {
				?>

				<table border="1" style="text-align: center; width: 100%; border-collapse: collapse;">
				<tr>
					<td><?php echo $row[0];?></td>
					<td><img src="<?php echo $row[1];?>"></td>
				</tr>
			</table>

				<?php
			}
		?>
	</center>

</body>
</html>