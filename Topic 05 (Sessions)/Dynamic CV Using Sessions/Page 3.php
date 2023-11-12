<?php
session_start();
if (isset($_SESSION['Login'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 3</title>
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
<?php
	
	$_SESSION['email'] = $_REQUEST['email'];
	$_SESSION['phone'] = $_REQUEST['phone'];
	$_SESSION['address'] = $_REQUEST['address'];
?>
<center>
	<h2>Professional Information</h2>
	
	<form action="Page 4.php">
		School: <input type="text" name="school"><br><br><br><br>
		From: <input type="date" name="s-start">
		To: <input type="date" name="s-end"><br><br>

		College: <input type="text" name="college"><br><br>
		From: <input type="date" name="c-start">
		To: <input type="date" name="c-end"><br><br>

		University: <input type="text" name="university"><br><br>
		From: <input type="date" name="u-start">
		To: <input type="date" name="u-end"><br><br>

		Summary: <textarea name="summary" id="summary" cols="30" rows="10"></textarea><br><br>

		<input type="submit" name="submit" value="Send">
	</form>
</center>
<?php
} else {
	header('Location: Login.php?msg= Please Login First');
} ?>
</body>
</html>