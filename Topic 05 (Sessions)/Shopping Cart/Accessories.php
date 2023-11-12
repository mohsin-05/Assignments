<?php

session_start();

if (isset($_SESSION['user']['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Accessories</title>
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
				<img src="accessory1.jpg" width="100" height="100" /><br>
				RS 4000
				<input type="number" name="a1">&nbsp;
				<input type="submit" name="add1" value="Add">
				</div>

				<div style="border-style: none; width: 25%;">
				<img src="accessory2.jpg" width="100" height="100" /><br>
				RS 5000
				<input type="number" name="a2">&nbsp;
				<input type="submit" name="add2" value="Add">
				</div>

				<div style="border-style: none; width: 25%;">
				<img src="accessory3.jpg" width="100" height="100" /><br>
				RS 6000
				<input type="number" name="a3">&nbsp;
				<input type="submit" name="add3" value="Add">
				</div>

				<div style="border-style: none; width: 25%;">
				<img src="accessory4.jpg" width="100" height="100" /><br>
				RS 7000
				<input type="number" name="a4">&nbsp;
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
	settype($_GET['a1'], 'integer');
	$_SESSION['checkout']['a1'] = $_GET['a1'];
}

if (isset($_GET['add2'])) {
	settype($_GET['a2'], 'integer');
	$_SESSION['checkout']['a2'] = $_GET['a2'];
}

if (isset($_GET['add3'])) {
	settype($_GET['a3'], 'integer');
	$_SESSION['checkout']['a3'] = $_GET['a3'];
}

if (isset($_GET['add4'])) {
	settype($_GET['a4'], 'integer');
	$_SESSION['checkout']['a4'] = $_GET['a4'];
}

?>

</body>
</html>

<?php

} else {
	header('location: Login.php?msg=Please Login First');
}

?>