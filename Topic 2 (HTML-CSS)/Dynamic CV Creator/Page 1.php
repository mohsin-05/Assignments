<!DOCTYPE html>

<html>
<head>
	<title>Assignment: DYNAMIC CV CREATOR</title>
</head>

<body>

	<h3>PERSONAL INFO</h3>

<form action = "Page 2.php">
	<label for = "name">Name:</label>
	<input type = "text" name = "name"><br /><br />

	<label for = "father_name">Father's Name:</label>
	<input type = "text" name = "father_name"><br /><br />
      
	<label>Gender:</label><br />
	<input type = "radio" name = "gender" value = "male">
	<label for = "male">Male</label><br />
	<input type = "radio" name = "gender" value = "female">
	<label for = "female">Female</label><br />
	<input type = "radio" name = "gender" value = "other">
	<label for = "other">Other</label><br /><br />

	<label for = "country">Country:</label>
	<select name = "country">
		<option value = "China">China</option>
		<option value = "Iran">Iran</option>
		<option value = "Pakistan">Pakistan</option>
		<option value = "Bangladesh">Bangladesh</option>
		<option value = "India">India</option>
	</select><br /><br />
	
	<input type = "submit" value = "Submit">
</form>

</body>

</html>