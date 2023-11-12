<!DOCTYPE html>
<html>
<head>
	<title>Age Calculator</title>
	<style>
		body{
			background-color: lightgreen;
			font-family: cursive;
		}
		h2{
			background-color: orange;
			border: 2px solid darkred;
			border-radius: 10px;
			margin: 10px 20px;
			padding: 10px;
			color: navy;
		}
	</style>
</head>
<body>
<center>
	<h2>Age Calculator</h2>

	<form>
		<input type="date" name="date">
		<input type="submit" name="submit" value="Calculate">
	</form>

	<?php
		date_default_timezone_set("asia/karachi");
		if (isset($_GET['submit'])) {
			$a = explode("-", $_GET['date']);
			echo "<br />";
			echo "Years: ".(date("Y")-$a[0])."<br />";
			echo "Months: ".(date("m")-$a[1])."<br />";
		}
	?>

</center>
</body>
</html>