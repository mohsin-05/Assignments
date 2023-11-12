<?php

setcookie("bg_color", "black");
setcookie("color", "green");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Background & Text Color</title>
</head>
<body style="background-color: <?php if (isset($_COOKIE['bg_color'])){echo $_COOKIE['bg_color'];}?>; 
color: <?php if (isset($_COOKIE['color'])) {echo $_COOKIE['color'];} ?>;">

	<center>
		<h1>~Change Background & Text Color~</h1>
		<h2>Change Background & Text Color</h2>
		<h3>Change Background & Text Color</h3>
		<h4>Change Background & Text Color</h4>
		<h5>Change Background & Text Color</h5>
		<h6>Change Background & Text Color</h6>

		<h6>Change Background & Text Color</h6>
		<h5>Change Background & Text Color</h5>
		<h4>Change Background & Text Color</h4>
		<h3>Change Background & Text Color</h3>
		<h2>Change Background & Text Color</h2>
		<h1>~Change Background & Text Color~</h1>

	</center>

</body>
</html>