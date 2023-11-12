<!DOCTYPE html>

<html>
<head>
	<title>Assignment: DYNAMIC CV CREATOR</title>
</head>

<body>

	<h3>CONTACT INFO</h3>

	<form action = "Page 3.php">
		<label for="email">Email:</label>
		<input type="email" name="email" required><br /><br />

		<label for="phone">Contact Number:</label>
		<input type="tel" name="phone" pattern="[0-9]{11}" required><br /><br />

		<label for="address">Address:</label>
		<textarea name="address" rows="5" cols="30"></textarea><br /><br />

		<input type="hidden" name="name" value="<?php echo $_GET['name']?>">
		<input type="hidden" name="father_name" value="<?php echo $_GET['father_name']?>">
		<input type="hidden" name="gender" value="<?php echo $_GET['gender']?>">
		<input type="hidden" name="country" value="<?php echo $_GET['country']?>">

		<input type="submit" value="Submit">
	</form>

</body>

</html>