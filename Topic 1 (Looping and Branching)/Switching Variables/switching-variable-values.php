<?php
	
	$x = 600;
	$y = 900;
	
	echo "Before:";
	echo "<br />";

	echo '$x = '.$x;
	echo "<br />";

	echo '$y = '.$y;
	echo "<br />";
	
	$x += $y;       // x = 600 + 900
	$y = $x - $y;   // y = 1500 - 900
	$x -= $y;       // x = 1500 - 600

	echo "After:";
	echo "<br />";

	echo '$x = '.$x;
	echo "<br />";

	echo '$y = '.$y;
		
?>