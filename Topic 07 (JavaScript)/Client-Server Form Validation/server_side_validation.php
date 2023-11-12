<?php

	$alpha_name_pattern = "/^[A-Z][a-z]{2,10}$/";
	$email_pattern = "/^[a-z]{3,6}[0-9]{1,3}[@][a-z]{3,7}[.][a-z]{2,5}$/";
	$cnic_pattern = "/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/";
	$phone_number_pattern = "/^[+][0-9]{5}[ ][0-9]{7}$/";

	$gender = null;
	$policies = null;

	extract($_REQUEST);

	$msg = "";

	if ($first_name == "") {
		$msg .= "<li>Please Enter First Name...!</li>";
		header("location:client_side_validation.php?message=$msg");
	} else if (!preg_match($alpha_name_pattern, $first_name)) {
		$msg .= "<li>First Name must be like eg: Sherry...!</li>";
		header("location:client_side_validation.php?message=$msg");
	}
	
	if ($middle_name != "") {
		if (!preg_match($alpha_name_pattern, $middle_name)) {
			$msg .= "<li>Middle Name must be like eg: Sherry...!</li>";
			header("location:client_side_validation.php?message=$msg");
		}
	}

	if ($last_name == "") {
		$msg .= "<li>Please Enter Last Name...!</li>";
		header("location:client_side_validation.php?message=$msg");
	} else if (!preg_match($alpha_name_pattern, $last_name)) {
		$msg .= "<li>Last Name must be like eg: Wilson...!</li>";
		header("location:client_side_validation.php?message=$msg");
	}

	if ($email == "") {
		$msg .= "<li>Please Enter Email...!</li>";
		header("location:client_side_validation.php?message=$msg");
	} else if (!preg_match($email_pattern, $email)) {
		$msg .= "<li>Email must be like eg: abc7@gmail.com...!</li>";
		header("location:client_side_validation.php?message=$msg");
	}

	if ($gender == null) {
		$msg .= "<li>Please Select Gender...!</li>";
		header("location:client_side_validation.php?message=$msg");
	}

	if ($cnic == "") {
		$msg .= "<li>Please Enter CNIC...!</li>";
		header("location:client_side_validation.php?message=$msg");
	} else if (!preg_match($cnic_pattern, $cnic)) {
		$msg .= "<li>CNIC must be like eg: 45302-1234567-3...!</li>";
		header("location:client_side_validation.php?message=$msg");
	}

	if ($phone_number == "") {
		$msg .= "<li>Please Enter Phone Number...!</li>";
		header("location:client_side_validation.php?message=$msg");
	} else if (!preg_match($phone_number_pattern, $phone_number)) {
		$msg .= '<li>Phone Number must be like eg: +92300 1234567...!</li>';
		header("location:client_side_validation.php?message=$msg");
	}

	if ($country == "") {
		$msg .= "<li>Please Select Country...!</li>";
		header("location:client_side_validation.php?message=$msg");
	}

	if ($policies == null) {
		$msg .= "<li>Please Select All Policies...!</li>";
		header("location:client_side_validation.php?message=$msg");
	}

	$policies_count = count($policies);

	if ($policies_count != 4) {
		$msg .= "<li>Please Select All Policies...!</li>";
		header("location:client_side_validation.php?message=$msg");
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Client & Server Form Validation</title>
	<style>
		h2{
			background-color: orange;
			border: 2px solid darkred;
			border-radius: 10px;
			margin: 10px 20px;
			padding: 10px;
			font-family: cursive;
			color: navy;
		}
		th{
			background-color: green;
			color: white;
		}
		td{
			background-color: skyblue;
		}
		table{
			width: 100%;
			text-align: center; 
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<center>
		<h2>Client & Server Form Validation</h2>
		
		<table border="1">
			<tr>
				<th>First Name</th>
				<?php echo $middle_name!=null?"<th>Middle Name</th>":''; ?>
				<th>Last Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>CNIC</th>
				<th>Phone Number</th>
				<th>Country</th>
				<th>Policies</th>
			</tr>
			<tr>
				<td><?php echo $first_name; ?></td>
				<?php echo $middle_name!=null?"<td>".$middle_name."</td>":''; ?>
				<td><?php echo $last_name; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $gender; ?></td>
				<td><?php echo $cnic; ?></td>
				<td><?php echo $phone_number; ?></td>
				<td><?php echo $country; ?></td>
				<td><?php echo $policies[0]."<br>".$policies[1]."<br>".$policies[2]."<br>".$policies[3]; ?></td>
			</tr>
		</table>
	</center>
</body>
</html>