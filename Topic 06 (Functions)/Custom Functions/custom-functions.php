<?php

	function _strtoupper($a){
		$string = "abcdefghijklmnopqrstuvwxyz";

		for ($i = 0; $i <= isset($a[$i]); $i++) { 
			for ($j = 0; $j <= isset($string[$j]); $j++) { 
				if ($a[$i] == $string[$j]) {
					echo $a[$i] = chr(ord($a[$i]) - 32);
				}
			}
		}
	}

	_strtoupper("abcd");
	echo "<hr />";






	function _imlode($a){

		$b = '';
		$c = "-";
		foreach ($a as $key => $value) {
			for ($i = 0; $i < isset($a[$key]); $i++) { 
				$b .= $c.$value;
			}
		}
		echo $b;
	}

	$arr1 = ['a', 'b', 'c', 'd', 1, 'abc'=>'1'];
	_imlode($arr1);
	echo "<hr />";






	function _explode($a, $b = " "){

		$arr2 = [];
		$temp = "";
		for ($i = 0; $i <= isset($a[$i]); $i++) { 
			if ($a[$i] == $b) {
				$arr2[] = $temp;
				$temp = "";
				continue;
			}
			$temp .= $a[$i];
		}
		$arr2[] = $temp; 

		echo "<pre>";
		print_r($arr2);
		echo "</pre>";
	}

	_explode("12al fka");
	echo "<hr />";






	function _strlen($a){

		$b = 0;
		for ($i = 0; $i <= isset($a[$i]); $i++) { 
			$b++; 
		}
		echo $b;
	}

	_strlen("2ffgsd");
	echo "<hr />";






	function _strrev($a){

		$b = 0;
		$c = '';
		for ($i = 0; $i <= isset($a[$i]); $i++) { 
			$b++; 
		}

		for ($i = $b - 1; $i >= 0; $i--) { 
			$c .= $a[$i];
		}
		echo $c;
	}

	_strrev("hidaya");
	echo "<hr />";






	function _range($a, $b, $c = 1){

		if ($c < 0) {
			$c *= (-1);
		}
		if ($a < $b) {
			for ($i = $a; $i <= $b; $i+=$c) { 
				$arr3[] = $i;
				if ($i == 'z' || $i == 'Z') {
					break;
				}
			}
			echo "<pre>";
			print_r($arr3);
			echo "</pre>";
		}

		if ($a > $b && gettype($a) != 'string') {
			for ($i = $a; $i >= $b; $i -= $c) { 
				$arr3[] = $i;

			}
			echo "<pre>";
			print_r($arr3);
			echo "</pre>";
		}
	}

	_range(10, 1);

?>