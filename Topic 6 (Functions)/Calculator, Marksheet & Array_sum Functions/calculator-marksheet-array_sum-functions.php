<?php

	echo "<h4>Calculator</h4>";

	function _calculator($a, $b, $c){

		switch ($c) {
			case '+':
				echo $a + $b;
				break;

			case '-':
				echo $a - $b;
				break;

			case '*':
				echo $a * $b;
				break;

			case '/':
				echo $a / $b;
				break;
			
			default:
				echo "Wrong operator";
				break;
		}

	}

	_calculator(5, 10, '+');
	echo "<hr />";





	echo "<h4>Marksheet</h4>";

	function _marksheet($a, $b, $c, $d, $e){

		$total = $a + $b + $c + $d + $e;

		$per = ($total * 100) / 500;

		echo "Subject 1 = $a <br> Subject 2 = $b <br> Subject 3 = $c <br> Subject 4 = $d <br> Subject 5 = $e <br> Total Marks = $total <br> Percentage $per %";

	}

	_marksheet(70,70,70,70,70);
	echo "<hr />";





	echo "<h4>Array Sum</h4>";

	function _array_sum($a){

		$b = 0;
		foreach ($a as $value) {	
			if (gettype($value) == 'integer') {
				$b += $value;
			}
		}
		echo $b;
	}

	$arr1 = [1, 2, 4, 5, 'b', 3, 10];
	_array_sum($arr1);

?>