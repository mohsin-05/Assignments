<!DOCTYPE html>

<html>
<head>
	<title>Assignment: Generate Form Controls Dynamically</title>
</head>

<body>

	<h3 align = "center">Generate Form Controls Dynamically</h3>

<?php
	$num = $_GET["num"];

	for ($a = 1; $a <= $num; $a++) { ?>
		<form action = "Page 3.php">

			<label for = "name">Name</label>
			<input type = "text" id = "name" name = "name<?php echo $a; ?>"><br />

			<label for = "male">Male</label>
			<input type = "radio" id = "male" name = "gender<?php echo $a; ?>" value = "Male"><br />
			<label for = "female">Female</label>
			<input type = "radio" id = "female" name = "gender<?php echo $a; ?>" value = "Female"><br />
			<label for = "other">Other</label>
			<input type = "radio" id = "other" name = "gender<?php echo $a; ?>" value = "Other"><br />

			<select name = "country<?php echo $a; ?>" value = "country">
				<option>Iran</option>
				<option>Pakistan</option>
				<option>Bangladesh</option>
			</select>
		<br /><br />

	<?php } ?>
	
</body>
		<input type="submit" name="">
	</form>
</html>


