<!DOCTYPE html>
<html>
<head>
	<title>Sum Of Numbers In A String</title>
</head>
<body style="font-family: sans-serif;">

	<h3>Sum Of Numbers In A String</h3><br />

	<?php

	$string = "a!@#$%^&* 2 2(n5jkgbu97jgk4jjg12";
	$a = 0;
	$b = 0;

	while (isset($string[$a])) {
		$a++;
	}

	--$a;

	for ($i = 0; $i <= $a; $i++) {
		switch ($string[$i]) {
		 	case 1:
		 		$b += ($string[$i]);
		 		break;

		 	case 2:
		 		$b += ($string[$i]);
		 		break;

		 	case 3:
		 		$b += ($string[$i]);
		 		break;

		 	case 4:
		 		$b += ($string[$i]);
		 		break;

		 	case 5:
		 		$b += ($string[$i]);
		 		break;

		 	case 6:
		 		$b += ($string[$i]);
		 		break;
		 	case 7:
		 		$b += ($string[$i]);
		 		break;

		 	case 8:
		 		$b += ($string[$i]);
		 		break;

		 	case 9:
		 		$b += ($string[$i]);
		 		break;
		 	
		 	default:
		 		break;
		 } 
	} ?>

	<p>String = "<?php echo $string; ?>"</p><br>
	<p>Sum = <?php echo $b; ?></p>

</body>
</html>