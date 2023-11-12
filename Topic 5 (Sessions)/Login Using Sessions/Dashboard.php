<?php
session_start();
if (isset($_REQUEST['Login'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
		<style>
		body{
			background-color: skyblue;
			text-align: center;
		}

		h2{
			background-color: orange;
			padding: 40px;
			margin: 30px;
			border-radius: 15px;
			font-family: cursive;
		}
		fieldset{
			border-radius: 20px;
			border-color: green;
			margin: 50px;
		}

	</style>
</head>
<body>
	<h2>Dashboard</h2>

	<?php
	$name = "Mohsin";
	$fullname = "Mohsin Ali Sahito";
	$password = 123;
	$_SESSION['username'] = $_REQUEST['username'];
	$_SESSION['password'] = $_REQUEST['password'];
	$_SESSION['fullname'] = $fullname;

	if (isset($_REQUEST['Login'])) {
		if ($name == $_REQUEST['username'] && $password == $_REQUEST['password']) {
			?>
			<center>

				<table border="2px" cellpadding="5px">
					<tr>
						<th>Username</th>
						<th>Fullname</th>
						<th>Password</th>
					</tr>
					<tr>
						<td><?php echo $name ?></td>
						<td><?php echo $fullname ?></td>
						<td><?php echo $password ?></td>
					</tr>
				</table>

				<form action="Logout.php"><br>
					<input type="submit" value="Logout">
				</form>

			</center>
			<?php
		} else {
			header('Location: Login.php?msg= Invalid User');
		}
	}
} else {
	header('Location: Login.php?msg= Please Login First');
} ?>
</body>
</html>