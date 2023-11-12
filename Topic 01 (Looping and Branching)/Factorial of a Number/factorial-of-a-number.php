<?php

	$a = 5;
	$b = 1;
	
	for ($i = $a; $i > 0; $i--) {
		$b *= $i;
	}

	echo "Factorial of $a is = ".$b;

?>