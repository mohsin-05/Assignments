<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			border-radius: 15px;
			border-color: green;
			margin-left: 350px;
			margin-right: 350px;
			border-style: dotted;
			padding: 20px;
		}

	</style>
</head>
<body>

	<h2>Login Page</h2>

	<?php
	if (isset($_REQUEST['msg'])) {
		$msg = $_REQUEST['msg'];
		echo $msg;
	}
	?>

	<br><br>

	<form action="Dashboard.php">

		<fieldset><legend>Login</legend>

		Name: <input type="text" name="username"><br><br>

		Password: <input type="password" name="password"><br><br>

		<input type="submit" name="Login" value="Login">

		</fieldset>

	</form>

</body>
</html>