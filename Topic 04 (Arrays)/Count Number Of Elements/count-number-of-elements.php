<?php

$array = [30, 14.3, "abc", 'xyz', 10 => 10, -5 => 'a', "hist" => 'hidaya'];

$count = 0;

foreach ($array as $key => $value) {
	$count++;
}
	echo "Number of Elements = ".$count;



?>