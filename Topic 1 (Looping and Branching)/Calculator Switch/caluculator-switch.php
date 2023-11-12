<?php

	$num1 = 10;
	$num2 = 5;
	$symbol = "*";
	
	switch($symbol) {
		case "+";
			
			echo "Add : ".($num1 + $num2);
			break;

		case "-";
			
			echo "Subtract : ".($num1 - $num2);
			break;

		case "*";
			
			echo "Multiply : ".($num1 * $num2);
			break;

		case "/";
			
			echo "Divide : ".($num1 / $num2);
			break;

		default:
		echo "Invalid Symbol";
	}

?>