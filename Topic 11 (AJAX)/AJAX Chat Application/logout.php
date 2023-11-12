<?php

session_start();

$user = $_SESSION['users'];
require ("require/connection.php");

session_destroy();

$query = "UPDATE users SET is_online = 0 WHERE user_id =".$user['user_id'];
$result = mysqli_query($connect, $query);

header("location:index.php");

?>