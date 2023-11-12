<?php

	echo "Assignment: Generate All Triangular Shapes. <br>";

	echo "a) Star Triangular Shape <br>";

	for($a = 1; $a <= 5; $a++) {
		for($b = 1; $b <= $a; $b++) {
			echo "*";
		}
		echo "<br />";
	}

	echo "<br />";



	echo "b) Alphabetical Triangular Shape <br>";

	for($a = 'a'; $a <= 'e'; $a++) {
		for($b = 'a'; $b <= $a; $b++) {
			echo $b;
		}
		echo "<br />";
	}

	echo "<br />";



	echo "c) Numeric Triangular Shape <br>";

	for($a = 1; $a <= 5; $a++) {
		for($b = 1; $b <= $a; $b++) {
			echo $b;
		}
		echo "<br />";
	}

	echo "<br />";



	echo "d) Numeric Triangular Shape And It's Multiplication <br>";

	for($a = 1; $a <= 5; $a++) {
		for($b = 1; $b <= $a; $b++) {
			echo $b;
		}
		$c = 1;
		$total = 1;
		
		while($c < $b) {
	  		$total *= $c;
	  		$c++;
		}
			
		echo " = ".$total;
		echo "<br />";
	}

?>