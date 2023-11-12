<?php

	echo "Assignment: Triangular Multiplication Table <br>";

	for ($a = 0; $a <= 5; $a++){
		for ($b = 0; $b <= $a; $b++){
			echo $a * $b." ";
		}
		echo "<br />";
	}

?>