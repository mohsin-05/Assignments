<?php
session_start();
if (isset($_SESSION['users'])) {
	header("location:chat.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Group Chat Application</title>
	<style>
		body{
			background-color: darkorange;
			color: firebrick;
			font-family: sans-serif;
		}
		h1{
			background-color: lightgoldenrodyellow;
			border: 2px solid red;
			padding: 10px;
			border-radius: 15px;
			width: 80%;
		}
		input{
			accent-color: red;
			border-radius: 4px;
			border-color: red;
		}
		fieldset{
			width: 30%;
			border: 3px dotted black;
			border-radius: 8px;
			background-color: orangered;
			color: black;
		}
		#login{
			background-color: black;
			color: red;
			border-radius: 8px;
			border-color: red;
			width: 60px;
			height: 30px;
		}
	</style>
</head>
<body>

	<center>
		<h1>Group Chat Application</h1>

		<?php
			if (isset($_REQUEST['msg'])) {
				echo "<p style='color:red'>".$_REQUEST['msg']."</p>";
			}
		?>

		<fieldset>
			<legend>Login Here</legend>
			<form action="login_process.php" method="POST">
				<table>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" required></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="login" id = "login" value="Login"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</center>

</body>
</html>