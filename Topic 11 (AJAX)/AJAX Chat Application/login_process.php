<?php

session_start();

if (!isset($_SESSION['users'])) {
	header("location:index.php?msg=Please Login First...!");
}

require ("require/connection.php");

if (isset($_POST['login'])) {
	$query = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND users.password = '{$_POST['password']}'";
	$result = mysqli_query($connect, $query);
	if ($result->num_rows>0) {
		$users = mysqli_fetch_assoc($result);
		$_SESSION['users'] = $users;
		$query = "UPDATE users SET is_online = 1 WHERE email = '{$_POST['email']}' AND '{$_POST['password']}'";
		$result = mysqli_query($connect, $query);
		header("location:chat.php");
	} else {
		header("location:index.php?msg=Wrong Email/Password...!");
	}
}


?>