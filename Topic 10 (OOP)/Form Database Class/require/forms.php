<?php 

	class Forms{
		public $action = NULL;
		public $method = "GET";
		public $message = NULL;

		public function set_message($message){
			$this->message = $message;
		}

		public function get_message(){
			return $this->message;
		}	


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
				<?php echo isset($this->message)? "<p style='color:red'>".$this->get_message()."</p>" :""; ?>	
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
		public $message = NULL;

		public function set_message($message){
			$this->message = $message;
		}

		public function get_message(){
			return $this->message;
		}

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
				<?php echo isset($this->message)? "<p style='color:red'>".$this->get_message()."</p>" :""; ?>
				<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
					>
					<table>
					<tr>
						<td>Full Name: <span style="color:red">*</span></td>
						<td><input type="text" name="fname"></td>
					</tr>
					<tr>
						<td>Gender: <span style="color:red">*</span></td>
						<td>
							Male <input type="radio" name="gender[]" value="male">
							Female <input type="radio" name="gender[]" value="female">
						</td>
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
		public $message = NULL;

		public function set_message($message){
			$this->message = $message;
		}

		public function get_message(){
			return $this->message;
		}

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
				<?php echo isset($this->message)? "<p style='color:red'>".$this->get_message()."</p>" :""; ?>
				<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
					>
					<table>
					<tr>
						<td>Email: <span style="color:red">*</span></td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>New Password: <span style="color:red">*</span></td>
						<td><input type="password" name="new_pass"></td>
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
		public $message = NULL;

		public function set_message($message){
			$this->message = $message;
		}

		public function get_message(){
			return $this->message;
		}

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
				<?php echo isset($this->message)? "<p style='color:red'>".$this->get_message()."</p>" :""; ?>
				<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
					>
					<table>
					<tr>
						<td>Email: <span style="color:red">*</span></td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Old Password: <span style="color:red">*</span></td>
						<td><input type="password" name="op"></td>
					</tr>
					<tr>
						<td>New Password: <span style="color:red">*</span></td>
						<td><input type="password" name="np"></td>
					</tr>
					<tr>
						<td><input type="submit" name="change" value="Change"></td>&nbsp;
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