<?php

session_start();

$total = 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
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
		td{
			border: 2px solid black;
			padding: 5px;
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
<center>
<table>
	
<?php

echo "<tr><td> Name </td><td> Quantity </td></tr>";

if (isset($_SESSION['checkout']['s1']) && gettype($_SESSION['checkout']['s1']) == 'integer') {
	$total += ($_SESSION['checkout']['s1'])*400;
	echo "<tr><td> Shirt1 </td><td> ".($_SESSION['checkout']['s1'])." </td></tr>";
}

if (isset($_SESSION['checkout']['s2']) && gettype($_SESSION['checkout']['s2']) == 'integer') {
	$total += ($_SESSION['checkout']['s2'])*500;
	echo "<tr><td> Shirt2 </td><td> ".($_SESSION['checkout']['s2'])." </td></tr>";
}

if (isset($_SESSION['checkout']['s3']) && gettype($_SESSION['checkout']['s3']) == 'integer') {
	$total += ($_SESSION['checkout']['s3'])*600;
	echo "<tr><td> Shirt3 </td><td> ".($_SESSION['checkout']['s3'])." </td></tr>";
}

if (isset($_SESSION['checkout']['s4']) && gettype($_SESSION['checkout']['s4']) == 'integer') {
	$total += ($_SESSION['checkout']['s4'])*700;
	echo "<tr><td> Shirt4 </td><td> ".($_SESSION['checkout']['s4'])." </td></tr>";
}




if (isset($_SESSION['checkout']['f1']) && gettype($_SESSION['checkout']['f1']) == 'integer') {
	$total += ($_SESSION['checkout']['f1'])*40;
	echo "<tr><td> Fruit1 </td><td> ".($_SESSION['checkout']['f1'])." </td></tr>";
}

if (isset($_SESSION['checkout']['f2']) && gettype($_SESSION['checkout']['f2']) == 'integer') {
	$total += ($_SESSION['checkout']['f2'])*50;
	echo "<tr><td> Fruit2 </td><td> ".($_SESSION['checkout']['f2'])." </td></tr>";
}

if (isset($_SESSION['checkout']['f3']) && gettype($_SESSION['checkout']['f3']) == 'integer') {
	$total += ($_SESSION['checkout']['f3'])*60;
	echo "<tr><td> Fruit3 </td><td> ".($_SESSION['checkout']['f3'])." </td></tr>";
}

if (isset($_SESSION['checkout']['f4']) && gettype($_SESSION['checkout']['f4']) == 'integer') {
	$total += ($_SESSION['checkout']['f4'])*70;
	echo "<tr><td> Fruit4 </td><td> ".($_SESSION['checkout']['f4'])." </td></tr>";
}




if (isset($_SESSION['checkout']['a1']) && gettype($_SESSION['checkout']['a1']) == 'integer') {
	$total += ($_SESSION['checkout']['a1'])*4000;
	echo "<tr><td> Accessory1 </td><td> ".($_SESSION['checkout']['a1'])." </td></tr>";
}

if (isset($_SESSION['checkout']['a2']) && gettype($_SESSION['checkout']['a2']) == 'integer') {
	$total += ($_SESSION['checkout']['a2'])*5000;
	echo "<tr><td> Accessory2 </td><td> ".($_SESSION['checkout']['a2'])." </td></tr>";
}

if (isset($_SESSION['checkout']['a3']) && gettype($_SESSION['checkout']['a3']) == 'integer') {
	$total += ($_SESSION['checkout']['a3'])*6000;
	echo "<tr><td> Accessory3 </td><td> ".($_SESSION['checkout']['a3'])." </td></tr>";
}

if (isset($_SESSION['checkout']['a4']) && gettype($_SESSION['checkout']['a4']) == 'integer') {
	$total += ($_SESSION['checkout']['a4'])*7000;
	echo "<tr><td> Accessory4 </td><td> ".($_SESSION['checkout']['a4'])." </td></tr>";
}




if (isset($_SESSION['checkout']['b1']) && gettype($_SESSION['checkout']['b1']) == 'integer') {
	$total += ($_SESSION['checkout']['b1'])*400;
	echo "<tr><td> Shoe1 </td><td> ".($_SESSION['checkout']['b1'])." </td></tr>";
}

if (isset($_SESSION['checkout']['b2']) && gettype($_SESSION['checkout']['b2']) == 'integer') {
	$total += ($_SESSION['checkout']['b2'])*500;
	echo "<tr><td> Shoe2 </td><td> ".($_SESSION['checkout']['b2'])." </td></tr>";
}

if (isset($_SESSION['checkout']['b3']) && gettype($_SESSION['checkout']['b3']) == 'integer') {
	$total += ($_SESSION['checkout']['b3'])*600;
	echo "<tr><td> Shoe3 </td><td> ".($_SESSION['checkout']['b3'])." </td></tr>";
}

if (isset($_SESSION['checkout']['b4']) && gettype($_SESSION['checkout']['b4']) == 'integer') {
	$total += ($_SESSION['checkout']['b4'])*700;
	echo "<tr><td> Shoe4 </td><td> ".($_SESSION['checkout']['b4'])." </td></tr>";
}

echo "<tr><td> Your Total Bill </td><td> RS. " . $total . "</tr>";

?>

</table>
</center>

	</div>

	<div style="width: 100%; background-color: green;">
		<div style="width: 50%; text-align: right; border-style: none;">Footer</div>
		<div style="width: 50%; text-align: right; border-style: none;"><button><a href="Checkout.php">Checkout</a></button></div>
	</div>

</body>
</html>