<?php

	echo "Assignment: Printing Numbers <br>";

	$num = 0;
	$count = 1;

	for ($i = 1; $i <= 5; $i++) { 
		echo $num += $count;
		echo " ";
		$count += 2;
	}



	echo "<br/>";



	$num = 1;
	$sum = 0;

	for ($i = 1; $i <= 6; $i++) {
	    $sum = $sum + $num;
	    echo $sum . " ";
	    $num++;
	}



	echo "<br/>";



	for ($i = 50; $i >= 10; $i -= 10) {
	  echo $i . " ";
	}



	echo "<br/>";



	$start = 6;
	$step = 6;

	for ($i = 1; $i <= 7; $i++) {
	    echo $start . " ";
	    $start += $step;
	    $step += 2;
	}

?>