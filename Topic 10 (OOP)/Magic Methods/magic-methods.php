<?php 
	class Human{

		public $eyes 			= 2;
		public $hands 			= 2;
		public $hair_color 		= "Black";
		public $fullname 		= NULL;
		public $email 			= NULL;
		public $phone_number 	= NULL;

		public function __construct(){
			echo "The class " . __CLASS__ . " was initiated";
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

		public function set_phone_number($phone_number){
			$this->phone_number = $phone_number;
		}
		
		public function get_phone_number(){
			return $this->phone_number;
		}

		public function set_human($name, $email, $phone_number){
			$this->fullname 	= $name;
			$this->email 		= $email;
			$this->phone_number = $phone_number;			
		}

		public function get_human(){
		?>
			<table border="2px solid">
				<tbody>
					<tr>
						<th>FullName:</th>
						<td> <?php echo $this->get_fullname(); ?></td>
					</tr>
					<tr>
						<th>Email:</th>
						<td> <?php echo $this->get_email(); ?></td>
					</tr>
					<tr>
						<th>Number:</th>
						<td> <?php echo $this->get_phone_number(); ?></td>
					</tr>
				</tbody>
			</table>	
		<?php	
		}	

		public function get_human_information(){
			$person_information = array(

				"FullName" 	=> $this->get_fullname(),
				"Email" 	=> $this->email,
				"Number" 	=> $this->get_phone_number(),
			);

			return $person_information;
		}

		public function Walk(){
			return "<p> I Can Walk </p>";
		}

		public function __toString() {
	        return $this->fullname;
	    }

		public function __call($name , $parameters){
			echo "Name of method =>" . $name."<br>";
			echo "Parameters provided<br>";
			echo "<pre>";
			print_r($parameters);
			echo "</pre>";
		}

		public function __set($name , $value) {
	        echo "You are trying to modify '".$name."' with '".$value."' which is either inaccessible or non-existing member";
	    }

		public function __get($name){
	        echo "You are trying to get '".$name."' which is either inaccessible or non existing member";
	    }

	    public function __debugInfo(){
	        return array("variable"=> "value");
	    }
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Magic Methods</title>
	<style>
		body{
			background-color: coral;
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
		hr{
			border-color: black;
		}
	</style>
</head>
<body>
<center>
	<h1>Magic Methods</h1>

<?php

	$person = new Human;
	echo "<br>";
	echo "<hr>";

	$person->set_human("Haider", "hk@gmail.com", "12345");
	echo $person."<br>";
	echo "<hr>";

	echo $person->value = "Hidaya";
	echo "<br>";
	echo "<hr>";

	echo $person->value."<br>";
	echo "<hr>";

	$person->hello("Magic" , "Method");
	echo "<hr>";

	var_dump($person);
?>

</center>
</body>
</html>