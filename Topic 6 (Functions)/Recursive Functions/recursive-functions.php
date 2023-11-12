<?php

	function recursive1(){

		static $a = 1;
		static $b = '';
		static $c = '';
		
		if ($a % 2 == 0) {
			$b .= $a." ";
		} else {
			$c .= $a." ";
		}

		$a++;

		if ($a > 100) {
			echo "Even = $b <br><br>";
			echo "Odd = $c <br>";
			return 0;
		}

		recursive1();
	}

	recursive1();
	echo "<hr />";






	function recursive2(){

		static $a = '*';
		static $b = 1;
		echo "$a <br>";
		$a .= '*';
		$b++;

		if ($b > 10) {
			return 0;
		}

		recursive2();
	}

	recursive2();

?>