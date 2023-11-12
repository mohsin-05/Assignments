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

if (isset($_REQUEST['name']) && strlen($_REQUEST['name']) > 0 && isset($_REQUEST['email']) && strlen($_REQUEST['email']) > 0 && isset($_REQUEST['address']) && strlen($_REQUEST['address']) > 0 && isset($_REQUEST['username']) && strlen($_REQUEST['username']) > 0 && isset($_REQUEST['password']) && strlen($_REQUEST['password']) > 0) {

extract($_REQUEST);

$query = "INSERT INTO users (full_name, email, address, user_name, users.`password`) VALUES (?,?,?,?,?)";

$stmt = mysqli_prepare($connection, $query);

mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $address, $username, $password);

$result = mysqli_stmt_execute($stmt);

if ($result) {
	echo "Data Inserted <br>";
	echo "Last Inserted Employee ID ".mysqli_insert_id($connection);
}
else{
	echo "Error: ".mysqli_error($connection)."<br>";
	echo "Error no: ".mysqli_errno($connection)."<br>";
	echo "Data not inserted due to some reason";
}
}


echo $_REQUEST['msg']??'';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		function login_form(){
			var flag = true
			
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
	<h2>Login</h2>

	<fieldset>
		<legend>Login Here...!</legend>
		<form action="result_page.php">
			<table>
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
					<td><input type="submit" name="login" value="Login" onclick="return login_form()"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</center>

</body>
</html>