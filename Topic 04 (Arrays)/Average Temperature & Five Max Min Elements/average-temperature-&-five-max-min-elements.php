<?php

	$array = [ 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

	$count = 0;
	$a = 0;
	$b = 0;

	foreach ($array as $value) {
		$a += $value;
		$count++;
	}

	$b = $a / $count;
	echo "Average Temperature = ".$b."<br>";





	foreach ($array as $key => $value) {
    	for ($j = 0; $j < count($array) - $key - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

	echo "Five Max: ";
	$count = 1;
	for ($i = count($array) - 1; $i >= 0; $i--) { 
		if ($count <= 5) {
			echo $array[$i] . " ";
			$count++;
		}
	}

	echo "<br>";





	echo "Five Min: ";
	for ($i = 0; $i < 5; $i++) { 
		echo $array[$i] . " ";
	}

?>
