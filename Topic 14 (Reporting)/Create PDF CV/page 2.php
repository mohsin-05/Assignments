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
		<h1>Contact Information</h1>

		<fieldset>
			<legend>Enter Information...</legend>

			<form action="page 3.php" method="POST">
				<table>
					<tr>
						<th>Email: </th>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<th>Contact Number: </th>
						<td><input type="text" name="phone"></td>
					</tr>
					<tr>
						<th>Address: </th>
						<td>
							<textarea name="address" id="address" cols="30" rows="5"></textarea>
						</td>
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


	$_SESSION['fname'] = $_REQUEST['fname'];
	$_SESSION['father_name'] = $_REQUEST['father_name'];
	if (isset($_REQUEST['gender1'])) {
		$_SESSION['gender'] = $_REQUEST['gender1'];
	}else{
		$_SESSION['gender'] = $_REQUEST['gender2'];
	}
	$_SESSION['country'] = $_REQUEST['country'];
}

?>