<?php

	echo "Assignment: Star Pyramid <br>";

	$num = 6;
	
	for($a = 1; $a <= $num; $a++) {
	    for($b = 1; $b <= $num - $a; $b++) {
	        echo "&nbsp;&nbsp;";
	    }
	    for($c = 1; $c <= $a; $c++) {
			echo "*&nbsp;&nbsp;";
	    }
		echo "<br />";
	}

?>