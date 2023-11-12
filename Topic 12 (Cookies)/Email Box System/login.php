<!DOCTYPE html>
<html>
<head>
	<title>Email Box System</title>
	<style>
		body{
			background-color: lightseagreen;
			color: seagreen;
			font-family: sans-serif;
		}
		h1{
			background-color: lightgoldenrodyellow;
			border: 2px solid green;
			padding: 10px;
			border-radius: 15px;
			width: 80%;
		}
		input{
			accent-color: green;
			border-radius: 4px;
			border-color: green;
		}
		fieldset{
			width: 30%;
			border: 3px dashed; black;
			border-radius: 8px;
			background-color: lightgreen;
			color: black;
		}
		#login{
			background-color: black;
			color: green;
			border-radius: 8px;
			border-color: green;
			width: 60px;
			height: 30px;
		}
	</style>
</head>
<body>

	<center>
		<h1>Email Box System</h1>

		<fieldset>
			<legend>Login Here</legend>

			<?php
			if (isset($_REQUEST['msg'])) {
				echo "<p style='color:".$_REQUEST['color']."'>".$_REQUEST['msg']."</p>";
			}
			?>

			<form action="login_process.php" method="POST">
				<table cellpadding="5">
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" placeholder="Enter Email..." required></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Enter Password..." required></td>
					</tr>
					<tr>
						<td>Remember: </td>
						<td><input type="checkbox" name="remember" value="remember"></td>
					</tr>
					<tr>
						<td><input type="submit" name="login" id="login" value="Login"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</center>

</body>
</html>