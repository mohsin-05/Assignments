<?php

	echo "Assignment: Electricity Bill";
	echo "<br/>";

	$units = 540;
	echo "Units: $units <br>";

	if ($units <= 100) {
		echo "Total Bill: ".($units * 5);
	} else if ($units >= 101 && $units <= 200) {
		$units -= 100;
		$units = ($units * 10) + 500;
		echo "Total Bill: ". $units;
	} else if ($units >= 201 && $units <= 300) {
		$units -= 200;
		$units = ($units * 15) + 1500;
		echo "Total Bill: ". $units;	
	} else if ($units >= 301) {
		$units -= 300;
		$units = ($units * 25) + 3000;
		echo "Total Bill: ". $units;
	}

?>