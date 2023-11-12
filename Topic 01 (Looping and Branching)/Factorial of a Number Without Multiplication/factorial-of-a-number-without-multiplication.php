<?php

	echo "Assignment: Factorial of a Number Without Using Multiply Symbol <br/>";

	$num = 5;
	$factorial = 1;

	for ($i = 1; $i <= $num; $i++){
		$a = 0;
		for($j = 1; $j <= $i; $j++){
			$a += $factorial;
		}
		$factorial = $a;
	}

	echo "The Factorial of $num is $factorial";

?>