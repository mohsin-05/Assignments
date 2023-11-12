<?php

	class Animal{
		public function __construct(){
			echo "<pre>";
			print_r($this);
		}

		public function Sleep(){

		}

		public function Eat(){
			
		}
	}

	class Bird extends Animal{

	}

	class Mammal extends Animal{

	}

	class Reptile extends Animal{

	}

	class Fish extends Animal{

	}

	class Lion extends Mammal{

	}

	class Crocodile extends Reptile{

	}

	class Crow extends Bird{

	}

	class Shark extends Fish{

	}

	class Amphibian{

	}

	$Animal = new Animal;

	echo "<h2>get_declared_classes</h2>";

	echo "<pre>";
	print_r(get_declared_classes());

	echo "<hr>";

	echo "<h2>get_class_methods</h2>";

	print_r(get_class_methods("Animal"));
	print_r(get_class_methods("Amphibian"));

	echo "<hr>";

	$Bird = new Bird;
	$Mammal = new Mammal;
	$Reptile = new Reptile;
	$Fish = new Fish;
	$Lion = new Lion;
	$Crocodile = new Crocodile;
	$Crow = new Crow;
	$Shark = new Shark;

	echo "<hr>";

	echo "<h2>class_exists</h2>";

	var_dump(class_exists("Animal"))."<br>";
	var_dump(class_exists("Bird"))."<br>";
	var_dump(class_exists("Mammal"))."<br>";
	var_dump(class_exists("Reptile"))."<br>";
	var_dump(class_exists("Fish"))."<br>";
	var_dump(class_exists("Lion"))."<br>";
	var_dump(class_exists("Crocodile"))."<br>";
	var_dump(class_exists("Crow"))."<br>";
	var_dump(class_exists("Shark"))."<br>";

	echo "<hr>";

	echo "<h2>get_parent_class</h2>";

	var_dump(get_parent_class($Animal))."<br>";
	var_dump(get_parent_class("Animal"))."<br>";
	var_dump(get_parent_class($Bird))."<br>";
	var_dump(get_parent_class("Bird"))."<br>";
	var_dump(get_parent_class($Mammal))."<br>";
	var_dump(get_parent_class("Mammal"))."<br>";
	var_dump(get_parent_class($Reptile))."<br>";
	var_dump(get_parent_class("Reptile"))."<br>";
	var_dump(get_parent_class($Fish))."<br>";
	var_dump(get_parent_class("Fish"))."<br>";
	var_dump(get_parent_class($Lion))."<br>";
	var_dump(get_parent_class("Lion"))."<br>";
	var_dump(get_parent_class($Crocodile))."<br>";
	var_dump(get_parent_class("Crocodile"))."<br>";
	var_dump(get_parent_class($Crow))."<br>";
	var_dump(get_parent_class("Crow"))."<br>";
	var_dump(get_parent_class($Shark))."<br>";
	var_dump(get_parent_class("Shark"))."<br>";

	echo "<hr>";

	echo "<h2>class_parents</h2>";

	var_dump(class_parents($Animal))."<br>";
	var_dump(class_parents("Animal"))."<br>";
	var_dump(class_parents($Bird))."<br>";
	var_dump(class_parents("Bird"))."<br>";
	var_dump(class_parents($Mammal))."<br>";
	var_dump(class_parents("Mammal"))."<br>";
	var_dump(class_parents($Reptile))."<br>";
	var_dump(class_parents("Reptile"))."<br>";
	var_dump(class_parents($Fish))."<br>";
	var_dump(class_parents("Fish"))."<br>";
	var_dump(class_parents($Lion))."<br>";
	var_dump(class_parents("Lion"))."<br>";
	var_dump(class_parents($Crocodile))."<br>";
	var_dump(class_parents("Crocodile"))."<br>";
	var_dump(class_parents($Crow))."<br>";
	var_dump(class_parents("Crow"))."<br>";
	var_dump(class_parents($Shark))."<br>";
	var_dump(class_parents("Shark"))."<br>";

	echo "<hr>";

	echo "<h2>is_subclass_of</h2>";

	var_dump(is_subclass_of($Bird, "Animal"))."<br>";
	var_dump(is_subclass_of("Bird", "Animal"))."<br>";
	var_dump(is_subclass_of($Mammal, "Animal"))."<br>";
	var_dump(is_subclass_of("Mammal", "Animal"))."<br>";
	var_dump(is_subclass_of($Reptile, "Animal"))."<br>";
	var_dump(is_subclass_of("Reptile", "Animal"))."<br>";
	var_dump(is_subclass_of($Fish, "Animal"))."<br>";
	var_dump(is_subclass_of("Fish", "Animal"))."<br>";
	var_dump(is_subclass_of($Lion, "Animal"))."<br>";
	var_dump(is_subclass_of("Lion", "Animal"))."<br>";
	var_dump(is_subclass_of($Crocodile, "Animal"))."<br>";
	var_dump(is_subclass_of("Crocodile", "Animal"))."<br>";
	var_dump(is_subclass_of($Crow, "Animal"))."<br>";
	var_dump(is_subclass_of("Crow", "Animal"))."<br>";
	var_dump(is_subclass_of($Shark, "Animal"))."<br>";
	var_dump(is_subclass_of("Shark", "Animal"))."<br>";

?>