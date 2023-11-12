<?php

mysqli_report(MYSQLI_REPORT_OFF);

$host_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "collections";

$connection = mysqli_connect($host_name, $user_name, $password, $database_name);

echo "<pre>";
echo var_dump($connection);
echo "</pre>";

echo "<br>";

if (mysqli_connect_errno()) {
	echo "Error no: ".mysqli_connect_errno()."<br>";
	echo "Error msg: ".mysqli_connect_error()."<br>";
	die("Connection Failed");
}

echo "Working";



?>