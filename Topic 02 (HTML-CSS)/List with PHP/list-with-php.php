<!DOCTYPE html>

<html>
<head>
	<title>Assignment: Make a List with PHP</title>
</head>

<body>

<h4> Assignment: Make a List With PHP</h4>

	<?php $type = 'square'; ?>

<ul <?php 
 
	if ($type == 'square') {
		echo 'type = square';
	} else if ($type == 'disc') {
		echo 'type = disc';
	} else if ($type == 'circle') {
		echo 'type = circle';
	} else {
		echo 'Not a Valid Type';
	} ?> >


	<?php

	for ($a = 1; $a <= 10; $a++) {
		if ($type == 'disc' && $a % 2 == 1) { 
			?> <li><?php echo $a; ?></li> <?php 
		}

		if($type == 'square' && $a % 2 == 0) { 
			?> <li><?php echo $a; ?></li> <?php 
		}
	
		if($type == 'circle') { 
			?> <li><?php echo $a * $a; ?></li> <?php 
		}
	} ?>

</ul>

	<?php

	if ($type != 'square' && $type != 'circle' && $type != 'disc') {
		echo '<p> Not a Valid Type. </p>'; 
	} ?>

</body>

</html>  