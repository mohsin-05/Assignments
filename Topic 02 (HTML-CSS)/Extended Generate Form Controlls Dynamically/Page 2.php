<!DOCTYPE html>
<html>
<head>
	<title>Assignment: EXTENDED GENERATE FORM CONTROLS DYNAMICALLY</title>
</head>

<body>

	<h3 align = "center">Generate Form Controls Dynamically</h3>

	<form action = "Page 3.php">

		<?php $num = $_GET["num"];

		for ($a = 1; $a <= $num; $a++) { ?>

			<label for="name">Name</label>
			<input type="text" name="name<?php echo $a; ?>"><br />

			<label for="male">Male</label>
			<input type="radio" name="gender<?php echo $a; ?>" value="Male"><br />
			<label for="female">Female</label>
			<input type="radio" name="gender<?php echo $a; ?>" value="Female"><br />

			<select name="country<?php echo $a; ?>" value="country">
				<option>Iran</option>
				<option>Pakistan</option>
				<option>Bangladesh</option>
			</select>

			<input type="hidden" name="n" value="<?php echo $a; ?>"> <br /><br />

		<?php } ?>

			<input type="submit" value = "Submit">
	</form>

</body>

</html>


