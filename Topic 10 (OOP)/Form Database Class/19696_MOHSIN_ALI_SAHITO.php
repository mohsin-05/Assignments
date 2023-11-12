<?php 
	
	require_once("require/forms.php");
	$login_form = new Forms();
	$signup_form = new signup();
	$forgot_password_form = new forgot_password();
	$change_password_form = new change_password();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Database Class</title>
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
	<h1>HRM PROJECT</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Voluptate quis esse vero officia nesciunt possimus distinctio alias sunt atque sequi consequatur sit ipsa quos dignissimos ratione, perspiciatis dolore ea? Tempora?</p>

	<div>
	<?php 
		$login_form->set_action("login_process.php");
		$login_form->set_method("POST");
		if(isset($_REQUEST['lmsg'])){
			$login_form->set_message($_REQUEST['lmsg']);
		}

		$login_form->login_form();
	?>
	</div>

	<div>
	<?php 
		$signup_form->set_action("login_process.php");
		$signup_form->set_method("POST");
		if(isset($_REQUEST['rmsg'])){
			$signup_form->set_message($_REQUEST['rmsg']);
		}

		$signup_form->signup_form();
	?>
	</div>

	<div>
	<?php 
		$forgot_password_form->set_action("login_process.php");
		$forgot_password_form->set_method("POST");
		if(isset($_REQUEST['fmsg'])){
			$forgot_password_form->set_message($_REQUEST['fmsg']);
		}

		$forgot_password_form->forgot_password_form();
	?>
	</div>

	<div>
	<?php 
		$change_password_form->set_action("login_process.php");
		$change_password_form->set_method("POST");
		if(isset($_REQUEST['cmsg'])){
			$change_password_form->set_message($_REQUEST['cmsg']);
		}

		$change_password_form->change_password_form();
	?>
	</div>

	</center>

</body>
</html>