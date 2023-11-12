<!DOCTYPE html>
<html>
<head>
	<title>Escape From Text (A or a)</title>
	<style>

		body{
			text-align: center;
		}

		input{
			accent-color: red;
		}

		form{
			background-color: orange;
			padding: 25px;
			border-radius: 50px;
		}

	</style>
</head>
<body>
	<h2>Escape From Text (A or a)</h2>

	<form>
		Enter Text:<input type="text" name="text">
		<input type="submit" name="Go" value="Go!">
	</form>

	<?php
		echo"Output: ";
		if (isset($_GET['text'])){
			$a = "A";
			$b = "a";
			$hist = $_GET['text'];
			for ($i = 0; isset($hist[$i]); $i++) { 
				if($hist[$i] == $a || $hist[$i] == $b){
					
				} else
				echo $hist[$i];
			}
		} ?>

</body>
</html>