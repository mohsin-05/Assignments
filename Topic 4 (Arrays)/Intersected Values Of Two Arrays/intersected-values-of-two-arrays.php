<?php

	$array1 = [1, 2, 44, "a", "abc", 'c'=>'d', 2, 44];
	$array2 = [2, 5, 44, "h", "abcd", 'd', 'd'];
	$array3 = [];

	foreach ($array1 as $value1) {
		foreach ($array2 as $value2) {
			foreach ($array3 as $value3) {
				if ($value3 == $value1) {
					break 2;
				}
			}
			
			if ($value1 == $value2) {
				$array3[] = $value1;
				break;
			}
		}
	}

	echo "<pre>";
		print_r($array3);
	echo "</pre>";

?>