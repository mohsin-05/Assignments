<center>

<form>
	Enter Text: <input type="text" name="text">
	<input type="submit" name="submit" value="Search">
</form>

<?php

	$array = [1, 2, 44, "a", "abc", 'c'=>'d', "abc"];

	if (isset($_GET['submit'])) {
		$a = 0;
		$text = $_GET['text'];
		foreach ($array as $key => $value) {
			if ($text == $value) {
				echo "value ".$text." found on position ". $key."<br>";
				$a = 1;
			}
		}

		if ($a == 0) {
			echo "value not found";
		}
	}

?>

</center>