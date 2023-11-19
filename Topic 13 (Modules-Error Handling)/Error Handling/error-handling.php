<!DOCTYPE html>
<html>
<head>
	<title>Error Handling</title>
	<style>
		body{
			background-image: radial-gradient(circle, yellow, orangered);
		}
		h1{
			background-color: lightgoldenrodyellow;
			border: 2px solid green;
			padding: 10px;
			border-radius: 35px 5px;
			width: 80%;
			font-family: cursive;
			background-image: radial-gradient(circle, orange, darkred);
		}
		hr{
			border: 2px dashed red;
		}
	</style>
</head>
<body>

	<center>
		<h1>Error Handling</h1>

</body>
</html>

<?php

	date_default_timezone_set("Asia/Karachi");

	function my_errors($error_level, $error_message, $error_file, $error_line){
		mysqli_report(false);
		$connect = mysqli_connect("localhost", "root", "", "error_handling");
		if(mysqli_connect_errno()){
			die("<p style='color:red;'> Database Connection Failed!...".mysqli_connect_error()."</p>");
		}

		echo "<b>Error Level: </b>".$error_level."<br>";
		echo "<b>Error Message: </b>".$error_message."<br>";
		echo "<b>Error File: </b>".$error_file."<br>";
		echo "<b>Error Line: </b>".$error_line."<br>";

		$query = "INSERT INTO error_logs (error_time, error_level, error_message, error_file, error_line) VALUES ('".date('d-F-Y h:i:s A')."', '".$error_level."', '".$error_message."', '".$error_file."', '".$error_line."')";

		$result = mysqli_query($connect, $query);
		if ($result) {
			echo "<p style='color:green'> Error log saved in Database</p><hr>";
		}

		$filename = "error_logs.txt";
		$file = fopen($filename, "a+");
		$data = "Error Time: ".date('d-F-Y h:i:s A')."\nError Level: ".$error_level."\nError Message: ".$error_message."\nError File: ".$error_file."\nError Line: ".$error_line."\n\n";
		fwrite($file, $data);
		fclose($file);
	}

	set_error_handler("my_errors", E_ALL);

	if(true){
		trigger_error("Error: Notice", E_USER_WARNING);
	}

	echo $a;

?>