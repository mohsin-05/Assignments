<!DOCTYPE html>

<html>
<head>
	<title>Assignment: DYNAMIC CV CREATOR</title>
</head>

<body>

	<h2>MY CV</h2>

	<h3>PERSONAL INFO</h3>

<table>
	<tr>
		<td>Name:</td>
		<td> <?php echo $_GET["name"]; ?> </td>
	</tr>

	<tr>
		<td>Father's Name:</td>
		<td> <?php echo $_GET["father_name"]; ?> </td>
	</tr>

	<tr>
		<td>Gender:</td>
		<td> <?php echo $_GET["gender"]; ?> </td>
	</tr>

	<tr>
		<td>Country:</td>
		<td> <?php "<br>";
		echo $_GET["country"]; ?>
		</td>
 	</tr>
</table>


	<h3>CONTACT INFO</h3>

<table>
	<tr>
		<td>Email:</td>
		<td> <?php echo $_GET["email"]; ?> </td>
	</tr>

	<tr>
		<td>Contact Number:</td>
		<td> <?php echo $_GET["phone"]; ?> </td>
	</tr>

	<tr>
		<td>Address:</td>
		<td> <?php "<br>";
		echo $_GET["address"]; ?>
		</td>
 	</tr>
</table>


	<h3>PROFESSIONAL INFO</h3>

<table>
	<tr>
		<td>School:</td>
		<td> <?php echo $_GET["school-name"] . " ~ "; ?> </td>
		<td> <?php echo $_GET["school-start"] . " - "; ?> </td>
		<td> <?php echo $_GET["school-end"]; ?> </td>
	</tr>

	<tr>
		<td>College:</td>
		<td> <?php echo $_GET["college-name"] . " ~ "; ?> </td>
		<td> <?php echo $_GET["college-start"] . " - "; ?> </td>
		<td> <?php echo $_GET["college-end"]; ?> </td>
	</tr>

	<tr>
		<td>University:</td>
		<td> <?php "<br>";
		echo $_GET["university-name"] . " ~ "; ?>
		<td> <?php echo $_GET["university-start"] . " - "; ?> </td>
		<td> <?php echo $_GET["university-end"]; ?> </td>
		</td>
 	</tr>

	<tr>
		<td>Summary:</td>
		<td> <?php "<br>";
		echo $_GET["summary"]; ?>
		</td>
 	</tr>
</table>


</body>

</html>