<!DOCTYPE html>
<html>
<head>
	<title>String Case Converter</title>
	<style>

		body{
			text-align: center;
		}

		input{
			accent-color: red;
		}

		form{
			background-color: orange;
			padding: 25px;
			border-radius: 50px;
		}

	</style>
</head>
<body>
	<h2>String Case Converter</h2>
	
	<form>
		Enter Text:<input type="text" name="text">
		<input type="submit" name="Go" value="Go!">
	</form>

	<?php
		echo"Output: ";
	
		if (isset($_GET['text'])) {
			$text = $_GET['text'];
			$output = "";
			$i = 0;

			while (isset($text[$i])) {
				$a = $text[$i];
				if (ctype_upper($a)) {
					$output .= strtolower($a);
				} else if (ctype_lower($a)) {
					$output .= strtoupper($a);
				} else {
					$output .= $a;
				}
				$i++;
			}
			echo $output;
		} ?>

</body>
</html>