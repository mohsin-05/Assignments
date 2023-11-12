<?php

class cv{
	public $fullname;
	public $email;
	public $phone;
	public $address;
	public $school;
	public $college;
	public $university;

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

	public function set_phone($phone){
		$this->phone = $phone;
	}

	public function get_phone(){
		return $this->phone;
	}

	public function set_address($address){
		$this->address = $address;
	}

	public function get_address(){
		return $this->address;
	}

	public function set_school($school){
		$this->school = $school;
	}

	public function get_school(){
		return $this->school;
	}

	public function set_college($college){
		$this->college = $college;
	}

	public function get_college(){
		return $this->college;
	}

	public function set_university($university){
		$this->university = $university;
	}

	public function get_university(){
		return $this->university;
	}

	public function full_cv(){
		echo "Fullname: ".$this->get_fullname()."<br>";
		echo "Email: ".$this->get_email()."<br>";
		echo "Phone Number: ".$this->get_phone()."<br>";
		echo "Address: ".$this->get_address()."<br>";
		echo "School Name: ".$this->get_school()."<br>";
		echo "College Name: ".$this->get_college()."<br>";
		echo "University Name: ".$this->get_university()."<br>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Resume/CV Class</title>
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
		div{
			background-color: orange;
			width: 60%;
			padding: 10px;
			border-radius: 20px;
			border: 3px solid orangered;
		}
		h2{
			color: firebrick;
		}
	</style>
</head>
<body>
<center>
	<h1>Resume/CV Class</h1>

	<div>
	<?php
		$candidate1 = new cv;
		$candidate1->set_fullname("Mohsin Ali Sahito");
		$candidate1->set_email("abc7@gmail.com");
		$candidate1->set_phone("0900-78601");
		$candidate1->set_address("Jamshoro, Hyderabad");
		$candidate1->set_school("Government High School Tharushah");
		$candidate1->set_college("Government College Darbello");
		$candidate1->set_university("Shaheed Benazir Bhutto University, Naushahro Feroze Campus");
		echo "<h2>".$candidate1->get_fullname()."</h2>";
		$candidate1->full_cv();
	?>
	</div>
	<br>
	<div>
	<?php
		$candidate2 = new cv;
		$candidate2->set_fullname("Haider Khan");
		$candidate2->set_email("xyz@yahoo.com");
		$candidate2->set_phone("123456789");
		$candidate2->set_address("Wadhu Wah, Hyderabad");
		$candidate2->set_school("Government High School Hyderabad");
		$candidate2->set_college("Government College Hyderabad");
		$candidate2->set_university("Sindh University, Hyderabad");
		echo "<h2>".$candidate2->get_fullname()."</h2>";
		$candidate2->full_cv();
	?>
	</div>
</center>
</body>
</html>