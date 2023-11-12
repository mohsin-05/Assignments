<?php
session_start();
if (isset($_SESSION['Login'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 2</title>
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
	
	$_SESSION['name'] = $_REQUEST['name'];
	$_SESSION['fname'] = $_REQUEST['fname'];
	if (isset($_REQUEST['gender1'])) {
		$_SESSION['gender'] = $_REQUEST['gender1'];
	} else {
		$_SESSION['gender'] = $_REQUEST['gender2'];
	}
	$_SESSION['country'] = $_REQUEST['country'];
?>

<center>
	<h2>Contact Information</h2>
	
	<form action="Page 3.php">
		Email: <input type="text" name="email"><br><br>
		Contact Number: <input type="text" name="phone"><br><br>
		Address: <textarea name="address" id="address" cols="30" rows="10"></textarea><br /><br />
		<input type="submit" name="submit" value="Send">
	</form>
	
</center>
<?php
} else {
	header('Location: Login.php?msg= Please Login First');
}
?>
</body>
</html>