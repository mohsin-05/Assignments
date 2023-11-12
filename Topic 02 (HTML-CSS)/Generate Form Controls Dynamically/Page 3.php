<!DOCTYPE html>

<html>
<head>
	<title>Assignment: Generate Form Controls Dynamically</title>
</head>

<body>

<table>

	<?php

	$a = 1;

	while (isset($_GET["name$a"])) { ?>
		<tr>
			<td>Name:</td>
			<td> <?php echo $_GET["name$a"]; ?> </td>
		</tr>

		<tr>
			<td>Gender:</td>
			<td> <?php echo $_GET["gender$a"]; ?> </td>
		</tr>

		<tr>
			<td>Country:</td>
			<td> <?php "<br>";
			echo $_GET["country$a"]; ?>
			</td>
	 	</tr>

	<?php
		$a++;
	} ?>
</table>

</body>

</html>


