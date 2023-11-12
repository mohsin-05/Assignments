<?php

session_start();

if (isset($_GET['login'])) {
	if(isset($_SESSION['user'])) {
		if ($_SESSION['user']['role_type'] == 1) {
			header('location: Admin.php');
		} elseif ($_SESSION['user']['role_type'] == 2) {
			header('location: Teacher.php');
		} elseif ($_SESSION['user']['role_type'] == 3) {
			header('location: Student.php');
		}
	}

	$users = [
				'user_1' => ['username' => 'ali',
							'fullname' => 'Ali Khan',
							'password' => '12345',
							'role_type' => 1,
							'status' => 1],
				'user_2' => ['username' => 'mohsin',
							'fullname' => 'Mohsin Khan',
							'password' => '1234',
							'role_type' => 2,
							'status' => 1],
				'user_3' => ['username' => 'john',
							'fullname' => 'John Remay',
							'password' => '123',
							'role_type' => 3,
							'status' => 1],
				'user_4' => ['username' => 'hassan',
							'fullname' => 'Muhammad Hassan',
							'password' => '12',
							'role_type' => 3,
							'status' => 0],
			];

		
	foreach ($users as $key => $value) {
		if ($_GET['username'] == $value['username'] && $_GET['password'] == $value['password']) {
			if ($value['status'] == 1) {
				if ($value['role_type'] == 1) {
					$_SESSION['user'] = $value;
					header('location: Admin.php');
				} elseif ($value['role_type'] == 2) {
					$_SESSION['user'] = $value;
					header('location: Teacher.php');
				} elseif ($value['role_type'] == 3) {
					$_SESSION['user'] = $value;
					header('location: Student.php');
				}
			} else {
				header('location: Login.php?msg=Your account is inactive');
			}
		} else {
			header('location: Login.php?msg=Invalid Username/Password');
		}
	}
} else {
	header('location: Login.php?msg=Please Login First');
}

?>