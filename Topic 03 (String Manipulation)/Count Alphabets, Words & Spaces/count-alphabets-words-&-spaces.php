<!DOCTYPE html>
<html>
<head>
	<title>Count Alphabets, Words & Spaces</title>
	<style type="text/css">
		body{
			text-align: center;
			color: blue;
			background-color: pink;
		}

		form{
			padding: 20px;
			border-style: solid;
			border-color: blue;
			margin-left: 500px;
			margin-right: 500px;
			padding: 10px;
		}

		input{
			accent-color: red;
		}

	</style>
</head>
<body>
	<h2 style="color: black;">Count Alphabets, Words & Spaces</h2><br><br><br>

		<h2>Write Something Here</h2>


	<form>
		<input type="text" name="text"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<br><br>

	<?php

	if (isset($_GET['submit'])) {
		
		$hist = $_GET['text'];
		$space = 0;
		$a = 0;

		for ($i = 0; isset($hist[$i]); $i++) { 
			if ($hist[$i] == " ") {
				$space++;
			}
			$a++;
		}
	}

	echo "Total Alphabates = ".$a-$space."<br>";
	echo "Total Words = ".$space+1;
	echo "<br> Total Spaces = ".$space;

	?>

</body>
</html>