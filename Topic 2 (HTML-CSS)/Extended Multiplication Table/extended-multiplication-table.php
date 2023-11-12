<!DOCTYPE html>

<html>
<head>
	<title> Assignment: Extended Multiplication Table </title>
</head>

<body>

<h3>Extended Multiplication Table</h3>

<table border = "2" cellpadding = "10">

	<thead>
		<tr>
			<th colspan=5> Multiplication Tables </th>
		</tr>
	</thead>

	<tbody>
	<?php $a = 6;?>
	<tr>
	<?php for($num = 1; $num <= $a; $num++) { ?> <td>
		<?php for($i = 1, $j = $num; $i <= 10; $i++) {
			echo "$j x $i = ".($j * $i)."<br>";
		} 

		if ($num % 5 == 0) { 
			echo "</tr>"; 
		} ?> </td> <?php
	} ?>
	</tr>

	</tbody>
	
</table>

</body>

</html>