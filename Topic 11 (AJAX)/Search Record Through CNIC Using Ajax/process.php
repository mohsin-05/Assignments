<?php

mysqli_report(false);
$connection = mysqli_connect("localhost", "root", '', "filing_register");

if (mysqli_connect_error()) {
	die("<h1>Database Connection Failed...!</h1>");
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'search') {
	$query = "SELECT * FROM users WHERE cnic = '".$_REQUEST['cnic']."'";
	$result = mysqli_query($connection, $query);	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Record Through CNIC Using Ajax</title>
	<style>
		img{
			width: 120px;
		}
		table{
			width: 80%;
			text-align: center;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<center>
	<?php
		if ($result->num_rows > 0) {
			while ($person = mysqli_fetch_assoc($result)) { ?>
				<table border="3" cellpadding="10">
					<tr>
						<th>Fullname</th>
						<th>Email</th>
						<th>Gender</th>
						<th>CNIC</th>
						<th>Phone Number</th>
						<th>Country</th>
						<th>Profile</th>
					</tr>
					<tr>
						<td><?php echo $person['first_name']." ".$person['last_name'] ?></td>
						<td><?php echo $person['email'] ?></td>
						<td><?php echo $person['gender'] ?></td>
						<td><?php echo $person['cnic'] ?></td>
						<td><?php echo $person['phone_number'] ?></td>
						<td><?php echo $person['country'] ?></td>
						<td><img src="<?php echo $person['destination'] ?>"></td>
					</tr>
				</table>
			<?php
			}
		} else {
			echo "<h2 style='color:orange'> Record Not Found...! </h2>";
		}
	?>
	</center>

</body>
</html>