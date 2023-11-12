<!DOCTYPE html>

<html>
<head>
	<title>Assignment: Policies Using Checkbox</title>
</head>

<body>

<h3>Policies Using Checkbox</h3>

<?php  
	if((isset($_GET["St"]) && isset($_GET["Di"]) || isset($_GET["At"]) && isset($_GET["As"])) && isset($_GET["Ag"])) {
		echo "You Are Selected";
	} else { 
		echo "Fail"; 
	} ?>

</body>

</html>




