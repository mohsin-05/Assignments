<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create PDF CV</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<center>
		<h1>Personal Information</h1>

		<fieldset>
			<legend>Enter Information...</legend>

			<form action="page 2.php" method="POST">
				<table>
					<tr>
						<th>Fullname: </th>
						<td><input type="text" name="fname"></td>
					</tr>
					<tr>
						<th>Father's Name: </th>
						<td><input type="text" name="father_name"></td>
					</tr>
					<tr>
						<th>Gender: </th>
						<td>
							Male: <input type="radio" name="gender1" value="Male">
							Female: <input type="radio" name="gender2" value="Female">
						</td>
					</tr>
					<tr>
						<th>Country: </th>
						<td>
							<select name="country" id="country">
								<option value="China">China</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Iran">Iran</option>
							</select>
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