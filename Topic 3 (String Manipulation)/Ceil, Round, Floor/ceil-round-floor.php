<!DOCTYPE html>
<html>
<head>
	<title>Ceil, Round, Floor</title>
	<style type="text/css">
		body {
			text-align: center;
			font-family: sans-serif;
			background-color: lightgreen;
		}

		h3 {
			background-color: lightcoral;
			padding: 20px;
			margin-left: 400px;
			margin-right: 400px;
			border: 4px solid coral;
			border-radius: 5px;
		}

		input {
			accent-color: blueviolet;
		}
	</style>
</head>
<body>
	<h3>Ceil, Round, Floor</h3>

	<form>
		Enter Decimal Number <br /><br />
		<input type="text" name="number" placeholder="Enter Number"> <br /><br />
		<select name="type">
			<option>Ceil</option>
			<option>Round</option>
			<option>Floor</option>
		</select>
		<input type="submit" name="submit" value="Process">
	</form>
	<br />

	<?php
	if (isset($_GET['submit'])) {
		$number = $_GET['number'];
		$type = $_GET['type'];
		$result = customMathOperation($number, $type);
		echo $number . " = " . $result;
	}

	function customMathOperation($number, $type) {
		$integerPart = "";
		for ($i=0; $i < strlen($number); $i++) { 
			if ($number[$i] >= 0 && $number[$i] <= 9) {
				$integerPart .= $number[$i];
			} else {
				break;
			}
		}

		switch ($type) {
			case "Ceil":
				return customCeil($number, $integerPart);
			case "Round":
				return customRound($number, $integerPart);
			case "Floor":
				return customFloor($number, $integerPart);
		}
		return "Invalid operation";
	}

	function customCeil($number, $integerPart) {
		return ($number > $integerPart) ? $integerPart + 1 : $number;
	}

	function customRound($number, $integerPart) {
		$decimalPart = $number - $integerPart;
		if ($decimalPart >= 0.5) {
			return $integerPart + 1;
		}
		return $integerPart;
	}

	function customFloor($number, $integerPart) {
		return $integerPart;
	}
	?>
</body>
</html>
