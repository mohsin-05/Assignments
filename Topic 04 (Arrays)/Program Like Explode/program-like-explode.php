<?php

	$string = "a quick brown fox jumps over the lazy dog";
	$space = " ";
	$output = [];
	$temp = "";

	for ($i = 0; isset($string[$i]); $i++) { 
		if ($string[$i] == $space) {
			$output[] = $temp;
			$temp = "";
			continue;
		}
		$temp .= $string[$i];
	}

	$output[] = $temp;

	foreach ($output as $value) {
		echo "$value<br>";
	}

	echo "<pre>";
		print_r($output);
	echo "</pre>";



?>