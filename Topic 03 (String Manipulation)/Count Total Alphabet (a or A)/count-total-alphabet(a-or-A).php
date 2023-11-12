<!DOCTYPE html>
<html>
<head>
	<title>Count Total Alphabet (a or A)</title>
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
	<h2>Count Total Alphabet (a or A)</h2>

	<form>
		Enter Text:<input type="text" name="text">
		<input type="submit" name="Go" value="Go!">
	</form>

	<?php
		if (isset($_GET['text'])) {
			$a = "A";
			$b = "a";
			$count = 0;
			$hist = $_GET['text'];
			for ($i = 0; isset($hist[$i]); $i++) { 
				if($hist[$i] == $a || $hist[$i] == $b){
					$count++;						
				}
			}
			echo "Total ".$b." or ".$a." = ".$count;
		} ?>

</body>
</html>