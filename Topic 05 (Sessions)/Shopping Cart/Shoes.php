<?php

session_start();

if (isset($_SESSION['user']['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoes</title>
	<style>
		body{
			text-align: center;
			background-color: lightblue;
			font-family: cursive;
		}
		div{
			border: 1px solid black;
			box-sizing: border-box;
			float: left;
			display: block;
			padding: 2px;
			border-radius: 5px;
		}
		img{
			border-radius: 10px;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>

	<div style="width: 100%; background-color: yellow;"><h3>Banner</h3></div>

	<div style="width: 100%; background-color: seashell;">
		<div style="width: 50%; text-align: left; height: 25px; border-style: none;">Welcome....<?php echo $_SESSION['user']['fullname']; ?></div>
		<div style="text-align: right; width: 50%; height: 25px; border-style: none;"><button><a href="Logout.php">Logout</a></button></div>
	</div>

	<div style="border: none; width: 100%;">
		<div style="width: 25%; height: 250px; background-color: coral;">
			<a href="Home Page.php">Home</a><br>

			Category <br><br>
			
			<a href="Shirts.php">Shirts</a><br>
			<a href="Fruits.php">Fruits</a><br>
			<a href="Accessories.php">Accessories</a><br>
			<a href="Shoes.php">Shoes</a><br>
			
		</div>
		<div style="width: 75%; height: 250px; float: center; border-style: none;">
			General Items<br><br>

			<form>

				<div style="border-style: none; width: 25%;">
				<img src="shoe1.jpg" width="100" height="100" /><br>
				RS 400
				<input type="number" name="b1">&nbsp;
				<input type="submit" name="add1" value="Add">
				</div>

				<div style="border-style: none; width: 25%;">
				<img src="shoe2.jpg" width="100" height="100" /><br>
				RS 500
				<input type="number" name="b2">&nbsp;
				<input type="submit" name="add2" value="Add">
				</div>

				<div style="border-style: none; width: 25%;">
				<img src="shoe3.jpg" width="100" height="100" /><br>
				RS 600
				<input type="number" name="b3">&nbsp;
				<input type="submit" name="add3" value="Add">
				</div>

				<div style="border-style: none; width: 25%;">
				<img src="shoe4.jpg" width="100" height="100" /><br>
				RS 700
				<input type="number" name="b4">&nbsp;
				<input type="submit" name="add4" value="Add">
				</div>

			</form>
		</div>
	</div>

	<div style="width: 100%; background-color: green;">
		<div style="width: 50%; text-align: right; border-style: none;">Footer</div>
		<div style="width: 50%; text-align: right; border-style: none;"><button><a href="Checkout.php">Checkout</a></button></div>
	</div>

<?php

if (isset($_GET['add1'])) {
	settype($_GET['b1'], 'integer');
	$_SESSION['checkout']['b1'] = $_GET['b1'];
}

if (isset($_GET['add2'])) {
	settype($_GET['b2'], 'integer');
	$_SESSION['checkout']['b2'] = $_GET['b2'];
}

if (isset($_GET['add3'])) {
	settype($_GET['b3'], 'integer');
	$_SESSION['checkout']['b3'] = $_GET['b3'];
}

if (isset($_GET['add4'])) {
	settype($_GET['b4'], 'integer');
	$_SESSION['checkout']['b4'] = $_GET['b4'];
}

?>

</body>
</html>

<?php

} else {
	header('location: Login.php?msg=Please Login First');
}

?>