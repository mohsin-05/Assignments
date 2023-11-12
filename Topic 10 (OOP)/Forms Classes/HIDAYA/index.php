<?php 

	require_once("../require/forms.php");
	$login_form = new Forms;
	$register_form = new signup;
	$forgot_password_form = new forgot_password;
	$change_password_form = new change_password;
?>
<!DOCTYPE html>
<html>
<head>
	<title>HIDAYA Project</title>
	<style>
		body{
			background-color: lightcoral;
			font-family: sans-serif;
		}
		h1{
			background-color: darkviolet;
			border: 2px solid purple;
			border-radius: 10px;
			margin: 10px 20px;
			padding: 10px;
			font-family: cursive;
			color: navy;
		}
		span{
			color: red;
		}
		fieldset{
			background-color: orange;
			width: 60%;
			padding: 10px;
			border-radius: 20px;
			border: 3px solid orangered;
		}
		input{
			accent-color: black;
		}
		legend{
			color: darkmagenta;
			font-family: cursive;
			font-weight: bolder;
		}
	</style>
</head>
<body>
	<center>
	<h1>HIDAYA Project</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, reprehenderit sint. Quod similique saepe quia nisi totam, distinctio ipsa amet adipisci exercitationem, necessitatibus dolorum eum, consequuntur, aperiam animi quaerat inventore!</p>
	

	<?php 
		$login_form->set_action("#");
		$login_form->set_method("POST");
		$login_form->login_form();
	?>

	<br>

	<?php 
		$register_form->set_action("#");
		$register_form->set_method("POST");
		$register_form->signup_form();
	?>

	<br>

	<?php 
		$forgot_password_form->set_action("#");
		$forgot_password_form->set_method("POST");
		$forgot_password_form->forgot_password_form();
	?>

	<br>

	<?php 
		$change_password_form->set_action("#");
		$change_password_form->set_method("POST");
		$change_password_form->change_password_form();
	?>
</center>
</body>
</html>