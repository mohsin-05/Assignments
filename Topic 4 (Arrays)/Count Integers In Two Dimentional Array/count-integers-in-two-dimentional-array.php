<?php

	$array = [1, 2, 3, 0, 'A', 4.4, "abc", 22, [5, 'd', 6, 6, '6']];
	$count = 0;

	foreach ($array as $key => $value) {
		if (is_array($value)) {
			foreach ($value as $k => $v) {
				if (gettype($v) == 'integer' || gettype($v) == 'double') {
					echo $v." = [".$key."] [".$k."] <br>";
					$count++;
				}
			}
		}
		
		if (gettype($value) == 'integer' || gettype($value) == 'double') {
			echo $value." = [".$key."] <br>";
			$count++;
		}
	}

	echo "<br>";
	echo "The total number of integers is = ".$count;
	echo "<br>";

?>