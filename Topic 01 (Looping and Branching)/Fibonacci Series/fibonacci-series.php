<?php

	echo "Assignment: Fibonacci Series <br />";

	$i = 0;
	$a = 0;
	$b = 1;

	echo $a." ".$b." ";

	while ($i < 8){
		$c = $a + $b;
		echo $c." ";
		$a = $b;
		$b = $c;
		$i++;
	}


?>