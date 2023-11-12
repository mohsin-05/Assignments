<!DOCTYPE html>
<html>
<head>
	<title>Assignment: EXTENDED GENERATE FORM CONTROLS DYNAMICALLY</title>
</head>

<body>

	<h3 align = "center">Generate Form Controls Dynamically</h3>

	<?php 
		$n = ($_GET['n']);
		
		for ($i = 1; $i <= $n; $i++) {
			$name["$i"]=$_GET["name$i"];
			$gender["$i"]=$_GET["gender$i"];
			$country["$i"]=$_GET["country$i"];
	 ?>

	<table border="2" cellpadding="5">
		<form action="Page 4.php">
		<tr>
			<th>Name:</th>
			<td><?php echo $name["$i"];?></td>
		</tr>

		<tr>
			<th>Gender:</th>
			<td> <?php echo $_GET["gender$i"]; ?> </td>
		</tr>

		<tr>
			<th>Country:</th>
			<td> <?php "<br>";
			echo $_GET["country$i"]; ?>
			</td>

			<td><input type="checkbox" name="cb<?php echo $i; ?>">
			<input type="hidden" name="hid" value= "<?php echo $i; ?>"></td>
	 	</tr>

			<input type="hidden" name="n" value="<?php echo "$n"; ?>">
			<input type="hidden" name="name<?php echo "$i";?>" value="<?php echo $name["$i"]?>">
			<input type="hidden" name="gender<?php echo "$i";?>" value="<?php echo $gender["$i"]?>">
			<input type="hidden" name="country<?php echo "$i";?>" value="<?php echo $country["$i"]?>">
	 
	</table> <br>

		<?php } ?>

			<input type="submit" name="submit" value="Edit">
		</form>

</body>
</html>



