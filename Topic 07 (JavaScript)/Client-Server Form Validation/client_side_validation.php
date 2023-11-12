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
		span{
			color: red;
		}
		li{
			color: red;
			list-style: none;
		}
		input{
			accent-color: red;
		}
		fieldset{
			border-radius: 10px;
			margin: 20px;
			border: 2px dotted blue;
		}
	</style>
	<script>
		function register_form(){
			var flag = true;

			var alpha_name_pattern = /^[A-Z][a-z]{2,10}$/
			var email_pattern = /^[a-z]{3,6}[0-9]{1,3}[@][a-z]{3,7}[.][a-z]{2,5}$/
			var cnic_pattern = /^[0-9]{5}-[0-9]{7}-[0-9]{1}$/
			var phone_number_pattern = /^[+][0-9]{5}[ ][0-9]{7}$/

			var first_name = document.getElementById('first_name').value
			var middle_name = document.getElementById('middle_name').value
			var last_name = document.getElementById('last_name').value
			var email = document.getElementById('email').value
			var gender = null

			if (document.getElementById('gender_male').checked) {
				gender = document.getElementById('gender_male').value
			} else if (document.getElementById('gender_female').checked){
				gender = document.getElementById('gender_female').value
			}

			var cnic = document.getElementById('cnic').value
			var phone_number = document.getElementById('phone_number').value
			var country = document.getElementById('country').value
			var policies = document.getElementsByClassName('policies')


			if (first_name == "") {
				flag = false
				document.getElementById('first_name_msg').innerHTML = "Please Enter First Name...!"
			} else if (!alpha_name_pattern.test(first_name)){
				flag = false
				document.getElementById('first_name_msg').innerHTML = "First Name must be like eg: Sherry...!"
			} else {
				document.getElementById('first_name_msg').innerHTML = ""
			}

			if (middle_name != "") {
				if (!alpha_name_pattern.test(middle_name)){
					flag = false
					document.getElementById('middle_name_msg').innerHTML = "Middle Name must be like eg: Sherry...!"
				}
			}

			if (last_name == "") {
				flag = false
				document.getElementById('last_name_msg').innerHTML = "Please Enter Last Name...!"
			} else if (!alpha_name_pattern.test(last_name)){
				flag = false
				document.getElementById('last_name_msg').innerHTML = "Last Name must be like eg: Wilson...!"
			} else {
				document.getElementById('last_name_msg').innerHTML = ""
			}

			if (email == "") {
				flag = false
				document.getElementById('email_msg').innerHTML = "Please Enter Email...!"
			} else if (!email_pattern.test(email)){
				flag = false
				document.getElementById('email_msg').innerHTML = "Email must be like eg: abc7@gmail.com...!"
			} else {
				document.getElementById('email_msg').innerHTML = ""
			}

			if (gender == null) {
				flag = false
				document.getElementById('gender_msg').innerHTML = "Please Select Gender...!"
			} else {
				document.getElementById('gender_msg').innerHTML = ""
			}

			if (cnic == "") {
				flag = false
				document.getElementById('cnic_msg').innerHTML = "Please Enter CNIC...!"
			} else if (!cnic_pattern.test(cnic)){
				flag = false
				document.getElementById('cnic_msg').innerHTML = "CNIC must be like eg: 45302-1234567-3...!"
			} else {
				document.getElementById('cnic_msg').innerHTML = ""
			}

			if (phone_number == "") {
				flag = false
				document.getElementById('phone_number_msg').innerHTML = "Please Enter Phone Number...!"
			} else if (!phone_number_pattern.test(phone_number)){
				flag = false
				document.getElementById('phone_number_msg').innerHTML = "Phone Number must be like eg: +92300 1234567...!"
			} else {
				document.getElementById('phone_number_msg').innerHTML = ""
			}

			if (country == "") {
				flag = false
				document.getElementById('country_msg').innerHTML = "Please Select Country...!"
			} else {
				document.getElementById('country_msg').innerHTML = ""
			}

			var counter = 0

			for(var i = 0; i < policies.length; i++){
				if (policies[i].checked) {
					counter++
				}
			}

			if (counter != 4) {
				flag = false
				document.getElementById('policies_msg').innerHTML = "Please Select All Policies...!"
			} else {
				document.getElementById('policies_msg').innerHTML = ""
			}

			if (flag) {
				return true;
			}
			else{
				return false;
			}
		}

	</script>
</head>
<body>

<center>
	<h2>Client & Server Form Validation</h2>

	<form method="POST" action="server_side_validation.php">
		<fieldset>
			<legend>Register Here...!</legend>
			<table>
				<?php echo $_REQUEST['message']??'' ; ?>
				<tr>
					<td>First Name : <span>*</span></td>
					<td>
						<input type="text" name="first_name" id="first_name">
						<span id="first_name_msg"></span>
					</td>
				</tr>
				<tr>
					<td>Middle Name : </td>
					<td>
						<input type="text" name="middle_name" id="middle_name">
						<span id="middle_name_msg"></span>
					</td>
				</tr>
				<tr>
					<td>Last Name : <span>*</span></td>
					<td>
						<input type="text" name="last_name" id="last_name">
						<span id="last_name_msg"></span>
					</td>
				</tr>
				<tr>
					<td>Email : <span>*</span></td>
					<td>
						<input type="text" name="email" id="email">
						<span id="email_msg"></span>
					</td>
				</tr>
				<tr>
					<td>Gender : <span>*</span></td>
					<td>
						Male<input type="radio" name="gender" id="gender_male" value="Male">
						Female<input type="radio" name="gender" id="gender_female" value="Female">
						<span id="gender_msg"></span>
					</td>
				</tr>
				<tr>
					<td>CNIC : <span>*</span></td>
					<td>
						<input type="text" name="cnic" id="cnic">
						<span id="cnic_msg"></span>
					</td>
				</tr>
				<tr>
					<td>Phone Number : <span>*</span></td>
					<td>
						<input type="text" name="phone_number" id="phone_number">
						<span id="phone_number_msg"></span>
					</td>
				</tr>
				<tr>
					<td>Country : <span>*</span></td>
					<td>
						<select name="country" id="country">
							<option value="">--Select Country--</option>
							<option>Pakistan</option>
							<option>Iran</option>
							<option>China</option>
						</select>
						<span id="country_msg"></span>
					</td>
				</tr>
				<tr>
					<td>Policies : <span>*</span></td>
					<td>
						<input type="checkbox" name="policies[]" class="policies" value="Attendance">Attendance<br>
						<input type="checkbox" name="policies[]" class="policies" value="Assignments">Assignments<br>
						<input type="checkbox" name="policies[]" class="policies" value="Testing">Testing<br>
						<input type="checkbox" name="policies[]" class="policies" value="Discipline">Discipline
						<span id="policies_msg"></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="register" value="Register" onclick="return register_form()">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</center>
</body>
</html>