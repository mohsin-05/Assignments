<!DOCTYPE html>
<html>
<head>
	<title>Assignment: EXTENDED MARK SHEET & CALCULATOR</title>
</head>
<body>

	<h3>MARKSHEET</h3>

	<form action = "Page 2.php">

		<label>English:</label>
		<input type = "number" name = "eng" max = "100"><br /><br />

		<label>Mathematics:</label>
		<input type = "number" name = "math" max = "100"><br /><br />

		<label>Science:</label>
		<input type = "number" name = "sci" max = "100"><br /><br />

		<label>Physics:</label>
		<input type = "number" name = "phy" max = "100"><br /><br />

		<label>Chemistry:</label>
		<input type = "number" name = "chem" max = "100"><br /><br />

		<input type = "submit" name = "submit1"><br /><br /><br /><br />

	</form>

	<h3>CALCULATOR</h3>

	<form action = "Page 2.php">

		<label>Value1:</label>
		<input type = "number" name = "val1"><br /><br />

		<select name = "operator">
			<option name = "add" value = "+">+</option>
			<option name = "sub" value = "-">-</option>
			<option name = "mul" value = "*">*</option>
			<option name = "div" value = "/">/</option>
		</select>
		<br /><br />

		<label>Value2:</label>
		<input type = "number" name = "val2"><br /><br />

		<input type = "submit" name = "submit2"><br /><br /><br /><br />

	</form>

</body>

</html>