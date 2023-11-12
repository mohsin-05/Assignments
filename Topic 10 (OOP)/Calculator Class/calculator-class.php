<?php

class calculator{
	public $num1;
	public $num2;

	public function set_num1($val1){
		$this->num1 = $val1;
	}

	public function get_num1(){
		return $this->num1;
	}

	public function set_num2($val2){
		$this->num2 = $val2;
	}

	public function get_num2(){
		return $this->num2;
	}

	public function add(){
		return $this->get_num1()+$this->get_num2();
	}

	public function sub(){
		return $this->get_num1()-$this->get_num2();
	}

	public function mul(){
		return $this->get_num1()*$this->get_num2();
	}

	public function div(){
		return $this->get_num1()/$this->get_num2();
	}

	public function mod(){
		return $this->get_num1()%$this->get_num2();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator Class</title>
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
	<h1>Calculator Class</h1>

	<div>
	<?php
		$result1 = new calculator;
		$result1->set_num1(9);
		$result1->set_num2(8);

		echo "<h2>1st Object</h2>";

		echo $result1->get_num1()." + ".$result1->get_num2()." = ".$result1->add()."<br>";
		echo $result1->get_num1()." - ".$result1->get_num2()." = ".$result1->sub()."<br>";
		echo $result1->get_num1()." * ".$result1->get_num2()." = ".$result1->mul()."<br>";
		echo $result1->get_num1()." / ".$result1->get_num2()." = ".$result1->div()."<br>";
		echo $result1->get_num1()." % ".$result1->get_num2()." = ".$result1->mod()."<br>";
	?>
	</div>

	<div>
	<?php
		$result2 = new calculator;
		$result2->set_num1(5);
		$result2->set_num2(15);

		echo "<h2>2nd Object</h2>";

		echo $result2->get_num1()." + ".$result2->get_num2()." = ".$result2->add()."<br>";
		echo $result2->get_num1()." - ".$result2->get_num2()." = ".$result2->sub()."<br>";
		echo $result2->get_num1()." * ".$result2->get_num2()." = ".$result2->mul()."<br>";
		echo $result2->get_num1()." / ".$result2->get_num2()." = ".$result2->div()."<br>";
		echo $result2->get_num1()." % ".$result2->get_num2()." = ".$result2->mod()."<br>";
	?>
	</div>
</center>
</body>
</html>