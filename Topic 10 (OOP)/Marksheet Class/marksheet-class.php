<?php

class marksheet{
	public $fullname;
	public $sub1;
	public $sub2;
	public $sub3;
	public $sub4;
	public $sub5;
	public $total;
	public $percentage;
	public $flag = true;

	public function set_fullname($name){
		$this->fullname = $name;
	}

	public function get_fullname(){
		return $this->fullname;
	}

	public function set_sub1($s1){
		$this->sub1 = $s1;
	}

	public function get_sub1(){
		return $this->sub1;
	}

	public function set_sub2($s2){
		$this->sub2 = $s2;
	}

	public function get_sub2(){
		return $this->sub2;
	}

	public function set_sub3($s3){
		$this->sub3 = $s3;
	}

	public function get_sub3(){
		return $this->sub3;
	}

	public function set_sub4($s4){
		$this->sub4 = $s4;
	}

	public function get_sub4(){
		return $this->sub4;
	}

	public function set_sub5($s5){
		$this->sub5 = $s5;
	}

	public function get_sub5(){
		return $this->sub5;
	}

	public function total(){
		$this->total = $this->get_sub1()+$this->get_sub2()+$this->get_sub3()+$this->get_sub4()+$this->get_sub5();
		return $this->total;
	}

	public function percentage(){
		$this->percentage = ($this->total()*100)/500;
		return $this->percentage."%";
	}

	public function grade(){
		if ($this->sub1<40) {
			$this->flag = false;
		}
		if ($this->sub2<40) {
			$this->flag = false;
		}
		if ($this->sub3<40) {
			$this->flag = false;
		}
		if ($this->sub4<40) {
			$this->flag = false;
		}
		if ($this->sub5<40) {
			$this->flag = false;
		}

		if ($this->flag == true) {
			$this->percentage();
			if ($this->percentage>=85) {
				return "Grade A+";
			}
			if ($this->percentage>=75) {
				return "Grade A";
			}
			if ($this->percentage>=65) {
				return "Grade B";
			}
			if ($this->percentage>=55) {
				return "Grade C";
			}
			if ($this->percentage>=45) {
				return "Grade D";
			}
		} else {
			return "Failure";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Marksheet Class</title>
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
	<h1>Marksheet Class</h1>
	<br>
	<div>
	<?php
		$student1 = new marksheet;
		$student1->set_fullname("Mohsin Ali Sahito");
		$student1->set_sub1(88);
		$student1->set_sub2(69);
		$student1->set_sub3(76);
		$student1->set_sub4(85);
		$student1->set_sub5(79);
		echo "<h2>Student Name: ".$student1->get_fullname()."</h2>";
		echo "Total Marks: ".$student1->total()."<br>";
		echo "Percentage: ".$student1->percentage()."<br>";
		echo "Grade: ".$student1->grade();
	?>
	</div>
	<br>
	<div>
	<?php
		$student2 = new marksheet;
		$student2->set_fullname("Haider Khan");
		$student2->set_sub1(89);
		$student2->set_sub2(39);
		$student2->set_sub3(56);
		$student2->set_sub4(65);
		$student2->set_sub5(72);
		echo "<h2>Student Name: ".$student2->get_fullname()."</h2>";
		echo "Total Marks: ".$student2->total()."<br>";
		echo "Percentage: ".$student2->percentage()."<br>";
		echo "Grade: ".$student2->grade();
	?>
	</div>
</center>
</body>
</html>