<?php 

	class Database{

		public $hostname 	= NULL;
		public $username 	= NULL;
		public $password 	= NULL;
		public $database 	= NULL;
		public $connection 	= NULL;
		public $squery 		= NULL;
		public $sresult		= NULL;
		public $query 		= NULL;
		public $result 		= NULL;

		public function __construct($hostname,$username, $password, $database){
			$this->hostname = $hostname;		
			$this->username = $username;		
			$this->password = $password;		
			$this->database = $database;		
		
			mysqli_report(FALSE);
			$this->connection = mysqli_connect($this->hostname, $this->username,$this->password, $this->database);

			if(mysqli_connect_errno()){
				echo "<p style='color:red'>Database Connection Problem <b>Errro No:</b> ".mysqli_connect_errno()." Errro Message: ".mysqli_connect_error()."</p>";
			}

		}

		public function login_process($email, $password){
		 	$this->query = "SELECT * FROM users WHERE user_email = '".$email."' AND user_password = '".$password."'";

		 	return $this->result = mysqli_query($this->connection,$this->query);
		}

		public function signup_process($fullname, $gender, $email, $password){
		 	$this->query = "INSERT INTO `users`(full_name, gender, user_email, user_password) VALUES('".$fullname."', '".$gender."', '".$email."', '".$password."')";
		 		$this->result = mysqli_query($this->connection,$this->query);

		 	$this->squery = "SELECT * FROM users WHERE user_email = '".$email."'";
		 	$this->sresult = mysqli_query($this->connection,$this->squery);

		 	if ($this->sresult->num_rows > 0) {
		 		return $this->result;
		 	}
		 	
		}

		public function forgot_password_process($email, $password){
		 	$this->squery = "SELECT * FROM users WHERE user_email = '".$email."'";
		 	$this->sresult = mysqli_query($this->connection,$this->squery);
		 	if ($this->sresult->num_rows > 0) {
		 		$this->query = "UPDATE users SET user_password = '".$password."' WHERE user_email = '".$email."'";

		 		return $this->result = mysqli_query($this->connection,$this->query);
		 	}

		 	
		}

		public function change_password_process($email, $old_password, $new_password){
			$this->squery = "SELECT * FROM users WHERE user_email = '".$email."' AND user_password = '".$old_password."'";
		 	$this->sresult = mysqli_query($this->connection,$this->squery);
		 	if ($this->sresult->num_rows > 0) {
		 		$this->query = "UPDATE users SET user_password = '".$new_password."' WHERE user_email = '".$email."' AND user_password = '".$old_password."'";

		 		return $this->result = mysqli_query($this->connection,$this->query);
		 	}
		 	
		}

		public function select($column,$table){
			$this->query = "SELECT $column FROM $table";
		 	return $this->result = mysqli_query($this->connection,$this->query);
		}



	}







?>