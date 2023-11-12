<!DOCTYPE html>
<html>
<head>
	<title>Login & Register Form Functions</title>
	<style>
		body{
			background-color: skyblue;
			color: navy;
		}
		fieldset{
			width: 200px;
			border: 2px solid red;
		}
	</style>
</head>
<body>
	<?php
	function login($method, $action) {
	?>
<center>
	<h2>Login</h2>

	<fieldset>
		<legend>Login Here...!</legend>
	<form method="<?php echo $method; ?>" action="<?php echo $action; ?>">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Enter Your Username..."></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Enter Your Password..."></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
	</fieldset>
</center>

<?php
}

	function register($method, $action) {
?>
<center>
	<h2>Register</h2>

	<fieldset>
		<legend>Register Here...!</legend>
	<form method="<?php echo $method; ?>" action="<?php echo $action; ?>">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Enter Your Name..."></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" placeholder="Enter Your Email..."></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" placeholder="Enter Your Address..."></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Enter Your Username..."></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Enter Your Password..."></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Register"></td>
			</tr>
		</table>
	</form>
	</fieldset>
</center>

<?php
} 
?>
</body>
</html>