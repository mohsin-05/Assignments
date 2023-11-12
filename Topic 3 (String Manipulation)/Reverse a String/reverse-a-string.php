<!DOCTYPE html>
<html>
<head>
	<title>Reverse A String</title>
	<style type="text/css">
		body{
			text-align: center;
			font-family: sans-serif;
		}

		h3{
			background-color: lightcoral;
			padding: 20px;
			margin-left: 400px;
			margin-right: 400px;
			border: 4px solid coral;
			border-radius: 5px;
		}

		input{
			accent-color: blueviolet;
		}
	</style>
</head>
<body>
	<h3>Reverse String</h3>
	<hr><br>

	<form>
		<input type="text" name="text"> &nbsp;
		<input type="submit" name="submit" value="Reverse">
	</form>
	<br>

	<?php
		if (isset($_GET['submit'])) {
			$text = $_GET['text'];
			$a = 0;

			for ($i = 0; $i <= isset($text[$i]); $i++) { 
				$a++;
			}

			for ($j = $a - 1; $j >= 0 ; $j--) { 
				echo $text[$j];
			}
		} ?>
		
</body>
</html>