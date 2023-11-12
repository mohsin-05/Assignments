<?php

	class Time{
		private $hour 	= 0;
		private $minute = 0;
		private $second = 0;

		public function __construct($h, $m, $s){
			$this->hour 	= $h;
			$this->minute 	= $m;
			$this->second 	= $s;
		}

		public function setHour($h){
			$this->hour = $h;
		}

		public function getHour(){
			return $this->hour;
		}

		public function setMinute($m){
			$this->minute = $m;
		}

		public function getMinute(){
			return $this->minute;
		}

		public function setSecond($s){
			$this->second = $s;
		}

		public function getSecond(){
			return $this->second;
		}

		public function setTime($h, $m, $s){
			$this->hour = $h;
			$this->minute = $m;
			$this->second = $s;
		}

		public function print(){
			return date("H:i:s", mktime($this->hour,$this->minute,$this->second));
		}

		public function nextSecond(){
			$this->second += 1;
		}
	}

	$obj = new Time(23, 49, 59);

?>

<!DOCTYPE html>
<html>
<head>
	<title>The Time Class</title>
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
		<h1>The Time Class</h1>

		<?php		
			$obj->nextSecond();
			$obj->nextSecond();
			echo $obj->print();
		?>
	</center>

</body>
</html>