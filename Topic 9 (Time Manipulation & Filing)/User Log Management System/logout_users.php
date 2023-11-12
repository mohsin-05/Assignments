<?php 
	require_once("require/connection.php");
	date_default_timezone_set("asia/karachi");


	$select_query = "SELECT MAX(log_id) AS 'id' FROM user_logs";
	$j = mysqli_query($connection, $select_query);

	$row = mysqli_fetch_array($j);
	$l = $row['id'];

	$logged_out = date("d F Y h:i:s A");

	$update_query = "UPDATE `user_logs` SET `logged_out` = ? WHERE `log_id` = ?";
	$log = mysqli_prepare($connection,$update_query);
	mysqli_stmt_bind_param($log,"si",$logged_out,$l);
	mysqli_stmt_execute($log);

	session_start();

	$user_id = $_SESSION['user']['user_id'];
	$fullname = $_SESSION['user']['full_name'];
	$filename = $user_id."_".$fullname;

	$file_source = fopen("logs/$filename.txt", "a+");
	fwrite($file_source, "Logged Out: $logged_out\n");

	session_destroy();

	header("location: index.php?msg=Logout Successfully !...&color=green")


?>