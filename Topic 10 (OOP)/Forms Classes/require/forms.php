<?php 

class Forms{
	public $action = NULL;
	public $method = "GET";

	public function set_action($action){
		$this->action = $action;
	}

	public function get_action(){
		return $this->action;
	}

	public function set_method($method){
		$this->method = $method;
	}
	
	public function get_method(){
		return $this->method;
	}

	public function login_form(){
	?>
	<div align="center">
		<fieldset>
			<legend>Login Here</legend>
			<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
				>
				<table>
					<tr>
						<th>
							Email: <span style="color:red">*</span>
						</th>
						<td>
							<input type="email" name="email" placeholder="Enter Your Email" />
						</td>
					</tr>
					<tr>
						<th>
							Password: <span style="color:red">*</span>
						</th>
						<td>
							<input type="password" name="password" placeholder="Enter Your Password" />
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<br/>
							<input type="submit" name="login" value="Login" />
							&nbsp;
							<input type="reset" name="reset" value="Cancel" />
						</td>
					</tr>
				</table>
			</form>
		</fieldset>	
	</div>
	<?php	
	}
}

class signup{
	public $action = NULL;
	public $method = "GET";

	public function set_action($action){
		$this->action = $action;
	}

	public function get_action(){
		return $this->action;
	}

	public function set_method($method){
		$this->method = $method;
	}
	
	public function get_method(){
		return $this->method;
	}

	public function signup_form(){
	?>
	<div align="center">
		<fieldset>
			<legend>Signup Here</legend>
			<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
				>
				<table>
				<tr>
					<td>First Name: <span style="color:red">*</span></td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Middle Name: </td>
					<td><input type="text" name="mname"></td>
				</tr>
				<tr>
					<td>Last Name: <span style="color:red">*</span></td>
					<td><input type="text" name="lname"></td>
				</tr>
				<tr>
					<td>Email: <span style="color:red">*</span></td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password: <span style="color:red">*</span></td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Gender: <span style="color:red">*</span></td>
					<td>
						Male <input type="radio" name="gender[]" value="male">
						Female <input type="radio" name="gender[]" value="female">
					</td>
				</tr>
				<tr>
					<td>CNIC: <span style="color:red">*</span></td>
					<td><input type="text" name="cnic"></td>
				</tr>
				<tr>
					<td>Phone Number: <span style="color:red">*</span></td>
					<td><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>Country: <span style="color:red">*</span></td>
					<td><select name="country">
						<option value="">--Select Country--</option>
						<option value="pakistan">Pakistan</option>
						<option value="afghanistan">Afghanistan</option>
						<option value="iran">Iran</option>
					</select></td>
				</tr>
				<tr>
					<td>Policies: <span style="color:red">*</span></td>
					<td><input type="checkbox" name="checkbox[]">Attendance<br>
					<input type="checkbox" name="checkbox[]">Assignments<br>
					<input type="checkbox" name="checkbox[]">Testing<br>
					<input type="checkbox" name="checkbox[]">Discipline</td>
				</tr>
				<tr>
					<td>Select Profile Image: <span style="color:red">*</span></td>
					<td><input type="file" name="profile_image"></td>
				</tr>
				<tr>
					<td><input type="submit" name="register" value="Register"></td>&nbsp;
					<td><input type="reset" name="reset" value="Cancel"></td>
				</tr>
			</table>
			</form>
		</fieldset>	
	</div>
	<?php	
	}
}

class forgot_password{
	public $action = NULL;
	public $method = "GET";

	public function set_action($action){
		$this->action = $action;
	}

	public function get_action(){
		return $this->action;
	}

	public function set_method($method){
		$this->method = $method;
	}
	
	public function get_method(){
		return $this->method;
	}

	public function forgot_password_form(){
	?>
	<div align="center">
		<fieldset>
			<legend>Forgot Password</legend>
			<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
				>
				<table>
				<tr>
					<td>Email: <span style="color:red">*</span></td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Done"></td>&nbsp;
					<td><input type="reset" name="reset" value="Cancel"></td>
				</tr>
			</table>
			</form>
		</fieldset>	
	</div>
	<?php	
	}
}

class change_password{
	public $action = NULL;
	public $method = "GET";

	public function set_action($action){
		$this->action = $action;
	}

	public function get_action(){
		return $this->action;
	}

	public function set_method($method){
		$this->method = $method;
	}
	
	public function get_method(){
		return $this->method;
	}

	public function change_password_form(){
	?>
	<div align="center">
		<fieldset>
			<legend>Change Password</legend>
			<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
				>
				<table>
				<tr>
					<td>Old Password: <span style="color:red">*</span></td>
					<td><input type="password" name="op"></td>
				</tr>
				<tr>
					<td>New Password: <span style="color:red">*</span></td>
					<td><input type="password" name="np"></td>
				</tr>
				<tr>
					<td>Confirm New Password: <span style="color:red">*</span></td>
					<td><input type="password" name="np"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Done"></td>&nbsp;
					<td><input type="reset" name="reset" value="Cancel"></td>
				</tr>
			</table>
			</form>
		</fieldset>	
	</div>
	<?php	
	}
}
?>