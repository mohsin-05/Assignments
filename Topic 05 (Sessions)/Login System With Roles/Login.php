<?php
session_start();

if(isset($_SESSION['user'])) {
	if ($_SESSION['user']['role_type'] == 1) {
		header('location: Admin.php');
	} elseif ($_SESSION['user']['role_type'] == 2) {
		header('location: Teacher.php');
	} elseif ($_SESSION['user']['role_type'] == 3) {
		header('location: Student.php');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	<style>
		body{
			background-color: skyblue;
			color: navy;
		}
		h1{
			background-color: yellow;
			margin: 10px;
			padding: 10px;
			border-radius: 5px;
			font-family: cursive;
		}
		fieldset{
			width: 30px;
			border-radius: 5px;
			border-color: green;
		}
		p{
			color: red;
		}
	</style>
</head>
<body>
<center>
	<h1>Login System</h1>

	<fieldset>
		<legend>Login Here...</legend>
	<form action="Login Process.php">
		<table>
			<p><?php echo $_REQUEST['msg']??''; ?></p>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Enter Your Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Enter Your Password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
	</fieldset>
</center>
</body>
</html>