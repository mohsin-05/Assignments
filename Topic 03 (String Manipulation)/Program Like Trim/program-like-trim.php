<!DOCTYPE html>
<html>
<head>
	<title>Program Like Trim</title>
</head>
<body>
	<h2>Program Like Trim</h2>

	<?php

	$string = "   Mohsin   ";
	$start_space = 0;
	$result = "";
	$res_len = 0;
	$last_index = 0;
	while (isset($string[$last_index])) {
		$last_index++;
	}

	$last_index--;

	$i = 0;
	$end_space = $last_index;

	while (isset($string[$i]) && $string[$i] == " ") {
		$start_space++;
		$i++;
	}

	while (isset($string[$end_space]) && $string[$end_space] == " ") {
		$end_space--;
	}

	$i = 0;

	while (isset($string[$i])) {
		if ($i >= $start_space && $i <= $end_space) {
			$result .= $string[$i];
			$res_len++;
		}

		$i++;
	}

	echo "Before: $string (Length: $last_index) <br>";

	echo "After: $result (Length: $res_len)";

	?>
</body>
</html>