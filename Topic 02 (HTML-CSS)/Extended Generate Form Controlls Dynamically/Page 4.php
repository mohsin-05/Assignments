<!DOCTYPE html>
<html>
<head>
	<title>Assignment: EXTENDED GENERATE FORM CONTROLS DYNAMICALLY</title>
</head>
<body>

	<h3 align = "center">Generate Form Controls Dynamically</h3>

	<form action = "Page 3.php"> 				

	<?php
		$n = $_GET["n"];

		for ($a = 1; $a <= $n; $a++) {
			$name["$a"]=$_GET["name$a"];
			$gender["$a"]=$_GET["gender$a"];
			$country["$a"]=$_GET["country$a"];
	?>
		<input type="hidden" name="n" value="<?php echo $n;?>">
		<input type="hidden" name="name<?php echo "$a";?>" value="<?php echo $name["$a"]?>">
		<input type="hidden" name="gender<?php echo "$a";?>" value="<?php echo $gender["$a"]?>">
		<input type="hidden" name="country<?php echo "$a";?>" value="<?php echo $country["$a"]?>"> 

		<?php 
			if (isset($_GET["cb$a"])) { ?>			
				<label for = "name">Name</label>
				<input type = "text" id = "name" name = "name<?php echo $a; ?>"><br />

				<label for = "male">Male</label>
				<input type = "radio" id = "male" name = "gender<?php echo $a; ?>" value = "Male"><br />
				<label for = "female">Female</label>
				<input type = "radio" id = "female" name = "gender<?php echo $a; ?>" value = "Female"><br />

				<select name = "country<?php echo $a; ?>" value = "country">
					<option>Iran</option>
					<option>Pakistan</option>
					<option>Bangladesh</option>
				</select><br><br>

		<?php } 
	} ?>
			
		<input type = "submit" value = "Update">
	</form>

</body>
</html>