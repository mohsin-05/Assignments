<?php

class bank{
	public $hostname = "localhost";
	public $username = "root";
	public $password = "";
	public $database = "bank";
	public $connection 	 		= NUll;
	public $query 		 		= NUll;
	public $result 		 		= NUll;
	public $squery 		 		= NUll;
	public $sresult 	 		= NUll;

	public $fullname 	 		= NULL;
	public $email 		 		= NULL;
	public $phone_number 		= NULL;
	public $bank_acc_num 		= NULL;
	public $bank_balance 		= 1000;

	public function __construct(){
		mysqli_report(FALSE);
		$this->connection = mysqli_connect($this->hostname, $this->username,$this->password, $this->database);

		if(mysqli_connect_errno()){
			echo "<p style='color:red'>Database Connection Problem <b>Errro No:</b> ".mysqli_connect_errno()." Errro Message: ".mysqli_connect_error()."</p>";
		}
	}

	public function set_fullname($name){
		$this->fullname = $name;
	}

	public function get_fullname(){
		return $this->fullname;
	}

	public function set_email($email){
		$this->email = $email;
	}

	public function get_email(){
		return $this->email;
	}

	public function set_phone_number($phone){
		$this->phone_number = $phone;
	}

	public function get_phone_number(){
		return $this->phone_number;
	}

	public function set_bank_acc_num($bank_acc_num){
		$this->bank_acc_num = $bank_acc_num;
	}

	public function get_bank_acc_num(){
		return $this->bank_acc_num;
	}

	public function set_bank_balance($bank_balance){
		$this->function = $bank_balance;
	}

	public function get_bank_balance(){
		return $this->bank_balance;
	}

	public function user_info($name, $email, $phone, $acc_num, $bank_balance){
		$this->fullname 	= $name;
		$this->email 		= $email;
		$this->phone_number = $phone;
		$this->bank_acc_num = $acc_num;
		$this->bank_balance = $bank_balance;

		$this->query = "INSERT INTO users_info (full_name, email, phone_number, bank_account_number, bank_balance) 
		VALUES ('".$this->fullname."', '".$this->email."', '".$this->phone_number."', '".$this->bank_acc_num."', '".$this->bank_balance."')";

		$this->result = mysqli_query($this->connection,$this->query);

	 	$this->squery = "SELECT * FROM users_info WHERE email = '".$email."' AND bank_account_number = '".$acc_num."'";
	 	$this->sresult = mysqli_query($this->connection,$this->squery);

	 	if ($this->sresult->num_rows > 0) {
	 		return "Register Successfull";
	 	}
	}

	public function deposit($acc_num, $deposit_amount){
		$this->squery = "SELECT * FROM users_info WHERE bank_account_number = '".$acc_num."'";
		$this->sresult = mysqli_query($this->connection,$this->squery);
		if ($this->sresult->num_rows > 0) {
			$this->query = "UPDATE users_info SET bank_balance = (bank_balance + $deposit_amount) 
			WHERE bank_account_number = '".$acc_num."'";
			$this->result = mysqli_query($this->connection,$this->query);

			return "Deposit Successfull";
		}
	}

	public function withdraw($acc_num, $withdraw_amount){
		$this->squery = "SELECT * FROM users_info WHERE bank_account_number = '".$acc_num."'";
		$this->sresult = mysqli_query($this->connection,$this->squery);
		if ($this->sresult->num_rows > 0) {
			$this->query = "UPDATE users_info SET bank_balance = (bank_balance - $withdraw_amount) 
			WHERE bank_account_number = '".$acc_num."'";
			$this->result = mysqli_query($this->connection,$this->query);

			return "Withdraw Successfull";
		}
	}

	public function user_account_info($acc_num){
		$this->squery = "SELECT * FROM users_info WHERE bank_account_number = '".$acc_num."'";
		$this->sresult = mysqli_query($this->connection,$this->squery);
		?>
		<table style="width: 50%; font-family: sans-serif;">
		<tr>
			
		</tr>
		<?php
			$res = $this->sresult;
			while ($row = mysqli_fetch_array($res)) {
				?>
					<tr>
						<th style="float: left;">Fullname: </th>
						<td><?php echo $row[1]; ?></td>
					</tr>
					<tr>
						<th style="float: left;">Email: </th>
						<td style="color: royalblue;"><?php echo $row[2]; ?></td>
					</tr>
					<tr>
						<th style="float: left;">Phone Number: </th>
						<td><?php echo $row[3]; ?></td>
					</tr>
					<tr>
						<th style="float: left;">Bank Account Number: </th>
						<td><?php echo $row[4]; ?></td>
					</tr>
					<tr>
						<th style="float: left;">Bank Balance: </th>
						<td><?php echo $row[5]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
	<?php
	}
}

$person1 = new bank;

?>

<!DOCTYPE html>
<html>
<head>
	<title>The Bank Class</title>
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
	</style>
</head>
<body>

	<center>
		<h1>The Bank Class</h1>

		<?php

			if (isset($_POST["deposit"])) {
				echo $person1->deposit(12579608, $_POST["amount"]);
			} else if (isset($_POST["withdraw"])) {
				echo $person1->withdraw(12579608, $_POST["amount"]);
			}

			$person1->user_account_info(12579608);
		?>

		<br>
		<br>
		<br>
		<br>

		<form method="POST">
			<input type="number" name="amount" placeholder="Enter Amount...">
			<input type="submit" name="deposit" value="Deposit">
			<input type="submit" name="withdraw" value="Withdraw">
		</form>
	</center>

</body>
</html>