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

$query = "SELECT * FROM users WHERE user_name = '".$username."' AND users.`password` = $password";

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
	

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
	while ($row = mysqli_fetch_array($result)) {
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
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
				<td><?php echo $row[3];?></td>
				<td><?php echo $row[4];?></td>
				<td><?php echo $row[5];?></td>
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