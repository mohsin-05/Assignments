<?php
session_start();

	isset($_SESSION['page1'])??$_SESSION['page1'] = 0;
	isset($_SESSION['page2'])??$_SESSION['page2'] = 0;
	isset($_SESSION['page3'])??$_SESSION['page3'] = 0;
	isset($_SESSION['page4'])??$_SESSION['page4'] = 0;
	isset($_SESSION['page5'])??$_SESSION['page5'] = 0;

	$_SESSION['page1']++;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 1</title>
	<style>
		body{
			background-color: skyblue;
			text-align: center;
		}

		h2{
			background-color: orange;
			padding: 40px;
			margin: 30px;
			border-radius: 15px;
			font-family: cursive;
		}
	</style>
</head>
<body>
<center>
	<h2>Page 1</h2>

	<a href="page2.php">Page 2</a><br><br>
	<a href="page3.php">Page 3</a><br><br>
	<a href="page4.php">Page 4</a><br><br>
	<a href="page5.php">Page 5</a><br><br>
	<a href="page6.php">Page 6</a>
	
</center>
</body>
</html>