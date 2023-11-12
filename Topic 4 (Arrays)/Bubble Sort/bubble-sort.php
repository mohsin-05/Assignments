<?php

	$array = [64, 34, 25, 12, 22, 11, 90, 5, 88];

    foreach ($array as $key => $value) {
    	for ($j = 0; $j < count($array) - $key - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

	echo "Sorted Array: " . implode(", ", $array);

?>