<?php
session_start();
if (isset($_REQUEST['Login'])) {
	$_SESSION['Login'] = $_REQUEST['Login'];
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
	<h2>Personal Information</h2>

	<?php
	$name = "Mohsin";
	$fullname = "Mohsin Ali Sahito";
	$password = 123;
	$_SESSION['username'] = $_REQUEST['username'];
	$_SESSION['password'] = $_REQUEST['password'];
	$_SESSION['fullname'] = $fullname;

	if (isset($_REQUEST['Login'])) {
		if ($name == $_REQUEST['username'] && $password == $_REQUEST['password']) {
			?>

	<form action="Page 2.php">
		Name: <input type="text" name="name"><br><br>
		Father's Name: <input type="text" name="fname"><br><br>

		Male: <input type="radio" name="gender1" value="male"><br><br>
		Female: <input type="radio" name="gender2" value="female"><br><br>

		<select name="country" id="country">
			<option value="China">China</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Iran">Iran</option>
		</select><br><br>

		<input type="submit" name="submit" value="Send">
	</form>
</center>
<?php
		} else {
			header('Location: Login.php?msg= Invalid User');
		}
	}
} else {
	header('Location: Login.php?msg= Please Login First');
} ?>

</body>
</html>