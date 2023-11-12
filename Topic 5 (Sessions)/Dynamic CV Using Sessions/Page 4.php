<?php
session_start();
if (isset($_SESSION['Login'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 4</title>
	<style>
		body{
			background-color: skyblue;
			text-align: center;
		}

		h2{
			background-color: orange;
			padding: 40px;
			margin: 30px;
			border-radius: 15px;
			font-family: cursive;
		}
	</style>
</head>
<body>
<?php
	
	$_SESSION['school'] = $_REQUEST['school'];
	$_SESSION['s-start'] = $_REQUEST['s-start'];
	$_SESSION['s-end'] = $_REQUEST['s-end'];
	$_SESSION['college'] = $_REQUEST['college'];
	$_SESSION['c-start'] = $_REQUEST['c-start'];
	$_SESSION['c-end'] = $_REQUEST['c-end'];
	$_SESSION['university'] = $_REQUEST['university'];
	$_SESSION['u-start'] = $_REQUEST['u-start'];
	$_SESSION['u-end'] = $_REQUEST['u-end'];
	$_SESSION['summary'] = $_REQUEST['summary'];
?>
<center>
	<h2>My CV</h2>

	<h3>Personal Information</h3>
	<table border="1px" cellpadding="5px">
		<tr>
			<th>Name</th>
			<th>Father's Name</th>
			<th>Gender</th>
			<th>Country</th>
		</tr>
		<tr>
			<td><?php echo $_SESSION['name']; ?></td>
			<td><?php echo $_SESSION['fname']; ?></td>
			<td><?php echo $_SESSION['gender']; ?></td>
			<td><?php echo $_SESSION['country']; ?></td>
		</tr>
	</table>

	<h3>Contact Information</h3>
	<table border="1px" cellpadding="5px">
		<tr>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Address</th>
		</tr>
		<tr>
			<td><?php echo $_SESSION['email']; ?></td>
			<td><?php echo $_SESSION['phone']; ?></td>
			<td><?php echo $_SESSION['address']; ?></td>
		</tr>
	</table>

	<h3>Professional Information</h3>
	<table border="1px" cellpadding="5px">
		<tr>
			<th>School</th>
			<th>From - To</th>
			<th>College</th>
			<th>From - To</th>
			<th>University</th>
			<th>From - To</th>
			<th>Summary</th>
		</tr>
		<tr>
			<td><?php echo $_SESSION['school']; ?></td>
			<td><?php echo $_SESSION['s-start']."<br>".$_SESSION['s-end']; ?></td>
			<td><?php echo $_SESSION['college']; ?></td>
			<td><?php echo $_SESSION['c-start']."<br>".$_SESSION['c-end']; ?></td>
			<td><?php echo $_SESSION['university']; ?></td>
			<td><?php echo $_SESSION['u-start']."<br>".$_SESSION['u-end']; ?></td>
			<td><?php echo $_SESSION['summary']; ?></td>
		</tr>
	</table>
</center>
<?php
} else {
	header('Location: Login.php?msg= Please Login First');
} ?> 
<br><br>
<form action="Logout.php">
	<input type="submit" value="Logout">
</form>
</body>
</html>