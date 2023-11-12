<!DOCTYPE html>
<html>
<head>
	<title>Power Of A Number Recursive Function</title>
	<style>
		body{
			background-color: skyblue;
			color: navy;
		}
		h2{
			background-color: yellow;
			font-family: cursive;
			padding: 20px;
			margin: 20px 40px;
			border-radius: 10px;
		}
		fieldset{
			width: 300px;
			border: 2px dotted red;
		}
	</style>
</head>
<body>
<center>
	<h2>Power Of A Number Recursive Function</h2>
<fieldset>
	<form>
		<table>
			<tr>
				<td>Enter Base:</td>
				<td><input type="number" name="base"></td>
			</tr>
			<tr>
				<td>Enter Power:</td>
				<td><input type="number" name="power" min="1"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="result" value="Result"></td>
			</tr>
		</table>
	</form>
</fieldset>

	<?php

	function _power(int $base, int $power){

		static $a = 1; 
		static $b = 0; 
		$a *= $base;
		$b++;
		if ($b == $power) {
			echo "The Base is: ".$base."<br>";
			echo "The Power is: ".$power."<br>";
			echo "The Result is: ".$a."<br>";
			return 0;
		}
		_power($base, $power);
	}

	if (isset($_GET['result'])) {
		$base = $_GET['base'];
		$power = $_GET['power'];
		
		_power($base, $power);
	}

	?>

</center>
</body>
</html>