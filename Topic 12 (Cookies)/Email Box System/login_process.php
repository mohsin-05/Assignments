<?php

mysqli_report(false);
$connect = mysqli_connect("localhost", "root", "", "email_system");
if (mysqli_connect_error()) {
	die("<h1 style='color:red'>Database Connection Failed...!</h1>");
}

if (isset($_REQUEST['login'])) {
	extract($_POST);
	if (isset($_REQUEST['remember'])) {

		if (isset($_COOKIE['email']) && isset($_COOKIE['password']) && base64_decode($_COOKIE['email']) == $email && base64_decode($_COOKIE['password']) == $password) {
			header("location:dashboard.php");
		} else {
			$query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
			$result = mysqli_query($connect, $query);
			if ($result->num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				setcookie("user_id", $row['user_id']);
				header("location:dashboard.php");
			} else {
				header("location:login.php?msg=Invalid Email/Password&color=red");
			}
			setcookie("email", base64_encode("$email"), time()+3600, "/");
			setcookie("password", base64_encode("$password"), time()+3600, "/");
		}

	} else {
		$query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
		$result = mysqli_query($connect, $query);
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			setcookie("user_id", $row['user_id']);
			header("location:dashboard.php");
		} else {
			header("location:login.php?msg=Invalid Email/Password&color=red");
		}
	}

}

?>