<!DOCTYPE html>
<html>
<head>
	<title>Total Vowels, Consonants & Positions Of Vowels</title>
</head>
<body>

	<h2>Total Vowels, Consonants & Positions Of Vowels</h2>
	
	<?php

		$vowels = "aeiouAEIOU";
		$consonants = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
		$string = "Mohsin";

		$i = 0;
		$v = 0;
		$c = 0;

		$vpos = [];
		$vnum = 0;
		$cnum = 0;

		while (isset($string[$i])) {
			$v = 0;
			$c = 0;
			while (isset($vowels[$v])) {
				if ($vowels[$v] == $string[$i]) {
					$vnum++;
					$vpos[$i] = $i;
				}

				$v++;
			}

			while (isset($consonants[$c])) {
				if ($consonants[$c] == $string[$i]) {
					$cnum++;
				}

				$c++;
			}

			$i++;
		}

		echo "String: $string<br>";
		echo "Total Consonants: $cnum<br>";
		echo "Total Vowels: $vnum<br>";
		echo "Positions of Vowels: ";
		foreach ($vpos as $key => $value) {
			echo "$string[$value] = $key, ";
		} 

	?>

</body>
</html>