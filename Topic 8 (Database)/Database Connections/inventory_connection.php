<?php

mysqli_report(MYSQLI_REPORT_OFF);

$connection = mysqli_connect("localhost", "root", "", "inventory");

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