<?php

	$array = ["The", "Pakistani", "team", "won", "match"];

	$count = 0;

	foreach ($array as $value) {
		$count++;
	}
		echo "Number of Elements = ".$count;

	echo "<pre>";
	print_r($array);
	echo "</pre>";

?>

	<br>
	<form>
		<input type="submit" name="fifo" value="FIFO"> 
		<input type="submit" name="lifo" value="LIFO"> 
	</form>
	
<?php

	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";

	$last_index = $count - 1;
	$first_index = 0;

	if (isset($_GET['fifo'])) {
		unset($array[$first_index]);
		$first_index++;
	}
	 
	if (isset($_GET['lifo'])) {
		unset($array[$last_index]);
		$last_index--;
	}

	echo "<pre>";
	print_r($array);
	echo "</pre>";

?>