<?php
session_start();

if (isset($_REQUEST['submit'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create PDF CV</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<center>
		<h1>Professional Information</h1>

		<fieldset>
			<legend>Enter Information...</legend>

			<form action="page 4.php" method="POST">
				<table>
					<tr>
						<th>School Name: </th>
						<td><input type="text" name="school"></td>
					</tr>
					<tr>
						<th>College Name: </th>
						<td><input type="text" name="college"></td>
					</tr>
					<tr>
						<th>University Name: </th>
						<td><input type="text" name="university"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</center>

</body>
</html>

<?php


	$_SESSION['email'] = $_REQUEST['email'];
	$_SESSION['phone'] = $_REQUEST['phone'];
	$_SESSION['address'] = $_REQUEST['address'];
}

?>