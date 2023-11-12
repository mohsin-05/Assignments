<!DOCTYPE html>

<html>
<head>
	<title>Assignment: DYNAMIC CV CREATOR</title>
</head>

<body>

	<h3>PROFESSIONAL INFO</h3>

	<form action = "Page 4.php">
		<h4>About My Education</h4>

		<label for="school-name">School:</label>
		<input type="text" name="school-name"><br>

		<label for="school-dates">From:</label>
		<input type="date" name="school-start"> to
		<input type="date" name="school-end"><br><br>

		<label for="college-name">College:</label>
		<input type="text" name="college-name"><br>

		<label for="college-dates">From:</label>
		<input type="date" name="college-start"> to
		<input type="date" name="college-end"><br><br>

		<label for="university-name">University:</label>
		<input type="text" name="university-name"><br>

		<label for="university-dates">From:</label>
		<input type="date" name="university-start"> to
		<input type="date" name="university-end"><br><br>

		<h4>Summary</h4>

		<label for="summary">Summary:</label><br>
		<textarea name="summary" rows="5" cols="50"></textarea><br><br>

		<input type="hidden" name="name" value="<?php echo $_GET['name']?>">
		<input type="hidden" name="father_name" value="<?php echo $_GET['father_name']?>">
		<input type="hidden" name="gender" value="<?php echo $_GET['gender']?>">
		<input type="hidden" name="country" value="<?php echo $_GET['country']?>">
		<input type="hidden" name="email" value="<?php echo $_GET['email']?>">
		<input type="hidden" name="phone" value="<?php echo $_GET['phone']?>">
		<input type="hidden" name="address" value="<?php echo $_GET['address']?>">

		<input type="submit" value="Submit">

	</form>

</body>

</html>