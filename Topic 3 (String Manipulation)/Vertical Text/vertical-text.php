<!DOCTYPE html>
<html>
<head>
	<title>Vertical Text</title>
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
	<h2>Vertical Text</h2>
	<form>
		Enter Text: <input type="text" name="text">
		<input type="submit" name="Go" value="Go!">
	</form>

	<div>
		<?php
			if (isset($_GET['text'])) {
				$hist = $_GET['text'];
				for ($i = 0; isset($hist[$i]); $i++) { 
					echo $hist[$i]."<br />";
				}
			} ?>
	</div>

</body>
</html>