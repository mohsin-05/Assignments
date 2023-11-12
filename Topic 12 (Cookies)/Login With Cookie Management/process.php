<?php

mysqli_report(false);
$connect = mysqli_connect("localhost", "root", "", "cookie_login");
if (mysqli_connect_error()) {
	die("<h1 style='color:red'>Database Connection Failed...!</h1>");
}

if (isset($_REQUEST['login'])) {
	extract($_POST);
	if (isset($_REQUEST['remember'])) {

		if (isset($_COOKIE['email']) && isset($_COOKIE['password']) && base64_decode($_COOKIE['email']) == $email && base64_decode($_COOKIE['password']) == $password) {
			echo "<h1>Welcome ".$email,"</h1>";
		} else {

			$query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
			$result = mysqli_query($connect, $query);
			if ($result->num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				echo "<h1>Welcome ".$row['name']." ".$row['email']."</h1>";
			} else {
				header("location:19696_MOHSIN_ALI_SAHITO.php?msg=Invalid Email/Password&color=red");
			}

			setcookie("email", base64_encode("$email"), time()+3600, "/");
			setcookie("password", base64_encode("$password"), time()+3600, "/");
		}
	} else {
		$query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
		$result = mysqli_query($connect, $query);
		
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			echo "<h1>Welcome ".$row['name']." ".$row['email']."</h1>";
		} else {
			header("location:19696_MOHSIN_ALI_SAHITO.php?msg=Invalid Email/Password&color=red");
		}
	}
}

?>