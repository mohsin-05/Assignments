<?php

	echo "<pre>";
	$c = 8;
	for ($a = 1; $a < 5; $a++) {
		for ($b = $a; $b < $c; $b++)
		echo "&nbsp;&nbsp;";
		for ($b = 2 * $a - 1; $b > 0; $b--)
		echo ("&nbsp;*");
		echo "<br>";
	}
	for ($a = 5; $a > 0; $a--) {
		for ($b = $c - $a; $b > 0; $b--)
		echo "&nbsp;&nbsp;";
		for ($b = 2 * $a - 1; $b > 0; $b--)
		echo ("&nbsp;*");
		echo "<br>";
	}
	echo "</pre>";

?>