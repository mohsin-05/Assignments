<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
		span{
			color: red;
		}
		li{
			color: red;
			list-style: none;
		}
		input{
			accent-color: red;
		}
		fieldset{
			border-radius: 10px;
			margin: 20px;
			border: 2px dotted blue;
		}
	</style>
	<script>
		function register_form(){
			var flag = true
			if (document.getElementById('name').value == "") {
				flag = false
			}
			if (document.getElementById('email').value == "") {
				flag = false
			}
			if (document.getElementById('address').value == "") {
				flag = false
			}
			if (document.getElementById('username').value == "") {
				flag = false
			}
			if (document.getElementById('password').value == "") {
				flag = false
			}
			if (flag) {
				return true;
			}else{
				return false;
			}
		}
	</script>
</head>
<body>

<center>
	<h2>Register</h2>

	<fieldset>
		<legend>Register Here...!</legend>
		<form action="login_page.php">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" id="name" name="name" placeholder="Enter Your Name..."></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email" placeholder="Enter Your Email..."></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" id="address" name="address" placeholder="Enter Your Address..."></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" placeholder="Enter Your Username..."></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" placeholder="Enter Your Password..."></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="login" value="Register" onclick="return register_form()"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</center>

</body>
</html>