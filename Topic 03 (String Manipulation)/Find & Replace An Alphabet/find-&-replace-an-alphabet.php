<!DOCTYPE html>
<html>
<head>
	<title>Find & Replace An Alphabet</title>
	<style>

		body{
			text-align: center;
		}

		form{
			background-color: pink; 
			padding: 20px;
		}

		input{
			accent-color: red;
		}

		h2{
			font-family: sans-serif;
		}

	</style>
</head>
<body>
	<h2>Find & Replace An Alphabet</h2>

	<form>
		Find: <input type="text" name="txt2">
		Replace: <input type="text" name="txt3"><br><br>
		Enter Text: <br><input type="text" name="txt1"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<br><br>

	<?php

	if (isset($_GET['submit'])) {
		$hist = $_GET['txt1'];
		$f = $_GET['txt2'];
		$new = $_GET['txt3'];

		for ($i = 0; isset($hist[$i]); $i++) { 
			if ($hist[$i] == $f) {
				$hist[$i] = $new;
			}
			echo $hist[$i];
		}
	} ?>

</body>
</html>