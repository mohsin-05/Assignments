<?php


	class dog{
		
		public $name = __CLASS__;
		public $eyes = 2;
		public $legs = 2;
		public $tail = 1;
		public $color = NULL;

		public function set_color($color){
			$this->color = $color;
		}
		public function get_color(){
			return $this->color;
		}

		public function sniff(){
			return "The ".$this->name." sniffs a lot";
		}

		public function lick(){
			return "The ".$this->name." licks a lot";
		}

		public function sound(){
			return "The ".$this->name." barks a lot";
		}

		public function __construct(){
			echo "<p>The <b>".$this->name." Class</b> Was Initiated..!</p>";
			echo $this->sniff()."<br>";
			echo $this->lick()."<br>";
			echo $this->sound()."<br>";
		}

		public function __destruct(){
			echo "<p>The <b>".$this->name." Class</b> Was Destroyed..!</p>";
		}
	}

	class cat extends dog{
		public $name = __CLASS__;
		public function sound(){
			return "The ".__CLASS__." meows a lot";
		}
	}

	class cow extends cat{
		public $name = __CLASS__;
		public function sound(){
			return "The ".__CLASS__." moos a lot";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Multi-Level Inheritance</title>
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
	<h1>Multi-Level Inheritance</h1>

	<?php
		$pet1 = new dog;
		$pet2 = new cat;
		$pet3 = new cow;
	?>
</center>
</body>
</html>