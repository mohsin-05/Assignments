<?php

mysqli_report(MYSQLI_REPORT_OFF);

define("host_name", "localhost");
define("user_name", "root");
define("password", "");
define("database_name", "register_login");

$connection = mysqli_connect(host_name,user_name,password,database_name);

if(mysqli_connect_errno())   
	{
		echo "Error No: ".mysqli_connect_errno();
		echo "<br />";
		echo "Error Msg: ".mysqli_connect_error();
		echo "<br />";
		die("Database Connection Failed !...");	

	}

extract($_REQUEST);

if (isset($_REQUEST['username'])) {

$query = "SELECT * FROM users WHERE user_name = ? AND users.`password` = ?";

$stmt = mysqli_prepare($connection, $query);

mysqli_stmt_bind_param($stmt, 'ss', $username, $password);

mysqli_stmt_bind_result($stmt, $id, $full_name, $email, $address, $user_name, $password);

mysqli_stmt_execute($stmt);

if ($stmt) {
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
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
	<h2>Logged in Successfully</h2>
	<?php
	while (mysqli_stmt_fetch($stmt)) {
		?>
		<table border="1" style="text-align: center; cellspacing: 5px;">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
			<tr>
				<td><?php echo $full_name;?></td>
				<td><?php echo $email;?></td>
				<td><?php echo $address;?></td>
				<td><?php echo $user_name;?></td>
				<td><?php echo $password;?></td>
			</tr>
		</table>
		<?php
	}
	?>
</center>

</body>
</html>


<?php

}
else{
	echo "User does not exist";
}

}else{
	header("location:login_page.php?msg=Please Login First");
}

?>