<?php
session_start();

	isset($_SESSION['page1'])??$_SESSION['page1'] = 0;
	isset($_SESSION['page2'])??$_SESSION['page2'] = 0;
	isset($_SESSION['page3'])??$_SESSION['page3'] = 0;
	isset($_SESSION['page4'])??$_SESSION['page4'] = 0;
	isset($_SESSION['page5'])??$_SESSION['page5'] = 0;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 6</title>
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

		p{
			background-color: yellow;
			padding: 10px;
			margin-left: 300px;
			margin-right: 300px;
			border-radius: 25px;


		}
	</style>
</head>
<body>
<center>
	<h2>Page 6</h2>

	<p>Page 1 visits = <?php echo $_SESSION['page1']??0; ?></p>
	<p>Page 2 visits = <?php echo $_SESSION['page2']??0; ?></p>
	<p>Page 3 visits = <?php echo $_SESSION['page3']??0; ?></p>
	<p>Page 4 visits = <?php echo $_SESSION['page4']??0; ?></p>
	<p>Page 5 visits = <?php echo $_SESSION['page5']??0; ?></p>

	<a href="page1.php">Page 1</a><br><br>
	<a href="page2.php">Page 2</a><br><br>
	<a href="page3.php">Page 3</a><br><br>
	<a href="page4.php">Page 4</a><br><br>
	<a href="page5.php">Page 5</a>
	
</center>
</body>
</html>