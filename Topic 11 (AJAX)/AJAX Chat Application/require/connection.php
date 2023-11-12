<?php

mysqli_report(false);
$connect = mysqli_connect("localhost", "root", "", "ajax_chat_application");

if (mysqli_connect_error()) {
	die("<h1>Database Connection Failed!...</h1>");
}


?>