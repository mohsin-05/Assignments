<center>
<?php 
	require_once("require/database_setting.php");
	require_once("require/database_class.php");
	
	$database = new Database($hostname, $username, $password, $database);

	if(isset($_POST['login'])){

		$result = $database->login_process($_POST['email'], $_POST['password']);

		if($result->num_rows > 0){
			echo "<h1>You Are Login Successfully...!</h1>";
		} else {
			$messag = "Incorrect Email Or Password";
			header("location:19696_MOHSIN_ALI_SAHITO.php?lmsg=$messag&color=red");
		}
	}

	if(isset($_POST['register'])){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";

		$result = $database->signup_process($_POST['fname'], $_POST['gender'][0], $_POST['email'], $_POST['password']);

		if($result){
			echo "<h1>You Are Registered Successfully...!</h1>";
		} else {
			$messag = "Registeration Failed";
			header("location:19696_MOHSIN_ALI_SAHITO.php?rmsg=$messag&color=red");
		}
	}

	if(isset($_POST['submit'])){

		$result = $database->forgot_password_process($_POST['email'], $_POST['new_pass']);

		if($result){
			echo "<h1>Password Updated Successfully...!</h1>";
		} else {
			$messag = "Incorrect Email Or Password".$result->num_rows;
			header("location:19696_MOHSIN_ALI_SAHITO.php?fmsg=$messag&color=red");
		}
	}

	if(isset($_POST['change'])){

		$result = $database->change_password_process($_POST['email'], $_POST['op'], $_POST['np']);

		if($result){
			echo "<h1>Password Changed Successfully...!</h1>";
		} else {
			$messag = "Incorrect Email Or Password";
			header("location:19696_MOHSIN_ALI_SAHITO.php?cmsg=$messag&color=red");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result Page</title>
	<style>
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
	<table border="1" style="border-collapse: collapse; width: 100%; text-align: center;">
		<tr>
			<th>Fullname</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
	<?php
		if (isset($_POST['email'])) {
			$res = $database->select("full_name, user_email, user_password", "users");
			while ($row = mysqli_fetch_array($res)) {
			?>
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
				</tr>
			<?php
			}
		}
	?>
	</table>
</body>
</html>
</center>