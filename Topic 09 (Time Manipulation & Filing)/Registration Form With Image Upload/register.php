<?php

mysqli_report(MYSQLI_REPORT_OFF);

define("host_name", "localhost");
define("user_name", "root");
define("password", "");
define("database_name", "filing_register");

$connection = mysqli_connect(host_name,user_name,password,database_name);

if (isset($_REQUEST['register'])) {

	$msg = "";
	$flag = true;
	$count = 4;
	extract($_REQUEST);

	if ($fname == "") {
		$msg .= "<li>Please Enter First Name</li>";
		$flag = false;
	}
	if ($lname == "") {
		$msg .= "<li>Please Enter Last Name</li>";
		$flag = false;
	}
	if ($email == "") {
		$msg .= "<li>Please Enter Email</li>";
		$flag = false;
	}
	if (!isset($_REQUEST['gender'])) {
		$msg .= "<li>Please Select Gender</li>";
		$flag = false;
	}
	if ($cnic == "") {
		$msg .= "<li>Please Enter CNIC</li>";
		$flag = false;
	}
	if ($phone == "") {
		$msg .= "<li>Please Enter Phone Number</li>";
		$flag = false;
	}
	if ($country == "") {
		$msg .= "<li>Please Select Country</li>";
		$flag = false;
	}
	if (isset($checkbox)) {
		if (count($checkbox) != 4) {
			$msg .= "<li>Please Select All Policies</li>";
			$flag = false;
		}
	} else {
		$msg .= "<li>Please Select All Policies</li>";
		$flag = false;
	}
	if ($_FILES['profile_image']['name'] == NULL) {
		$msg .= "<li>Please Select Profile Image</li>";
		$flag = false;
	}

	if ($flag == true) {
		$folder = "Images";
		if (!is_dir($folder)) {
			if (!mkdir($folder)) {
				$message = "<li>Folder Not Created</li>";
				die;
			}
		}


		$filename  = $_FILES['profile_image']['name'];		
		$temp_name 	   = $_FILES['profile_image']['tmp_name'];
		$destination   = $folder."/".$filename;


		if ($mname == "") {
			$query = "INSERT INTO `users` (`first_name`,`last_name`,`email`,`gender`,`cnic`,`phone_number`,`country`,`policies`,`image_name`,`temp_path`,`destination`) VALUES('".$fname."', '".$lname."', '".$email."', '".$gender[0]."', '".$cnic."', '".$phone."', '".$country."', '".$count."', '".$filename."', '".$temp_name."', '".$destination."')";	
			mysqli_query($connection, $query);
		} else {
			$query = "INSERT INTO users (`first_name`,`middle_name`,`last_name`,`email`,`gender`,`cnic`,`phone_number`,`country`,`policies`,`image_name`,`temp_path`,`destination`) VALUES('".$fname."','".$mname."', '".$lname."', '".$email."', '".$gender[0]."', '".$cnic."', '".$phone."', '".$country."', '".$count."', '".$filename."', '".$temp_name."', '".$destination."')";
				mysqli_query($connection, $query);
		}
			
		
		if (move_uploaded_file($temp_name, $destination)) {
			$message = "<p>File Uploaded Successfully</p>";
		} else {
			$message = "<p>File Not Uploaded</p>";
			echo $message;
			die;
		}
		$message = "<p>Registered Successfully</p>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form With Image Upload</title>
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
		span{
			color: red;
		}
		fieldset{
			width: 60%;
			border: 2px double green;
			border-radius: 15px;
		}
		input{
			accent-color: black;
		}
		li{
			color: red;
			list-style: none;
		}
		p{
			color: green;
		}
		a{
			color: orangered;
			text-decoration: none;
		}
	</style>
</head>
<body>

	<center>
		<h2>Registration Form With Image Upload</h2>

		<?php
			if (isset($message)) {
				echo $message;
			}
			if (isset($msg)) {
				echo $msg;
			}	
		?>

		<fieldset>
			<legend>Register Here...!</legend>
		<form method="POST" enctype="multipart/form-data" accept="image/*">>
			<table>
				<tr>
					<td>First Name: <span>*</span></td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Middle Name: </td>
					<td><input type="text" name="mname"></td>
				</tr>
				<tr>
					<td>Last Name: <span>*</span></td>
					<td><input type="text" name="lname"></td>
				</tr>
				<tr>
					<td>Email: <span>*</span></td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Gender: <span>*</span></td>
					<td>
						Male <input type="radio" name="gender[]" value="male">
						Female <input type="radio" name="gender[]" value="female">
					</td>
				</tr>
				<tr>
					<td>CNIC: <span>*</span></td>
					<td><input type="text" name="cnic"></td>
				</tr>
				<tr>
					<td>Phone Number: <span>*</span></td>
					<td><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>Country: <span>*</span></td>
					<td><select name="country">
						<option value="">--Select Country--</option>
						<option value="pakistan">Pakistan</option>
						<option value="afghanistan">Afghanistan</option>
						<option value="iran">Iran</option>
					</select></td>
				</tr>
				<tr>
					<td>Policies: <span>*</span></td>
					<td><input type="checkbox" name="checkbox[]">Attendance<br>
					<input type="checkbox" name="checkbox[]">Assignments<br>
					<input type="checkbox" name="checkbox[]">Testing<br>
					<input type="checkbox" name="checkbox[]">Discipline</td>
				</tr>
				<tr>
					<td>Select Profile Image: <span>*</span></td>
					<td><input type="file" name="profile_image"></td>
				</tr>
				<tr>
					<td><input type="submit" name="register" value="Register"></td>
				</tr>
			</table>
		</form>
		</fieldset>
		<a href="users.php">Show Users</a>
	</center>

</body>
</html>