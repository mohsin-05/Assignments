<?php

session_start();

if (isset($_SESSION['user']['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
		<style>
			body{
				text-align: center;
				background-color: skyblue;
				font-family: cursive;
				color: navy;
			}
			button{
				background-color: yellow;
			}
			a{
				text-decoration: none;
				color: navy;
			}
			h1{
			background-color: yellow;
			margin: 10px;
			padding: 10px;
			border-radius: 5px;
			font-family: cursive;
		}
		</style>
</head>
<body>

	<h1>Teacher</h1>

<?php
		echo "Welcome ".$_SESSION['user']['fullname']."<br><br><br>";
		echo "Username = ".$_SESSION['user']['username']."<br>";
		echo "Password = ".$_SESSION['user']['password']."<br>";

} else {
	header('location: Login.php?msg=Please Login First');
} ?>

<button><a href="Logout.php">Logout</a></button>

</body>
</html>