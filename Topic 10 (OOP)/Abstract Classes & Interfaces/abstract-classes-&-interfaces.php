<?php

	interface Department{
		public function set_department($dept);
		public function get_department();
	}

	interface Position{
		public function Senior();
		public function Junior();
	}

	abstract class Project{
		protected $project_name = NULL;
		protected $project_time = NULL;

		public function set_project_name($name){
			$this->project_name = $name;
		}

		public function get_project_name(){
			return $this->project_name;
		}

		public function set_project_time($time){
			$this->project_time = $time;
		}

		public function get_project_time(){
			return $this->project_time;
		}

		public abstract function show_project_information();
	}

	class Company extends Project implements Department, Position{
		protected $department = NULL;

		public function set_department($dept){
			$this->department = $dept;
		}

		public function get_department(){
			return $this->department;
		}

		public function Senior(){
			return "The Seniors handle the clients";
		}

		public function Junior(){
			return "The Juniors do simple tasks";
		}

		public function show_project_information(){
			?>
				<div>
					<p>Department Property : <?php echo $this->department; ?></p>
					<p>Department Method : <?php echo $this->get_department(); ?></p>
					<p>Senior Position : <?php echo $this->Senior(); ?></p>
					<p>Junior Position : <?php echo $this->Junior(); ?></p>
					<hr>
					<p>Project Name Property : <?php echo $this->project_name; ?></p>
					<p>Project Name Method : <?php echo $this->get_project_name(); ?></p>
					<p>Project Time Property : <?php echo $this->project_time; ?></p>
					<p>Project Time Method : <?php echo $this->get_project_time(); ?></p>
				</div>
			<?php
		}
	}

	$company = new Company;
	$company->set_department("Information Technology");
	$company->set_project_name("Blog Management");
	$company->set_project_time("1 Week");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Abstract Classes & Interfaces</title>
	<style>
		*{
			font-family: fantasy;
		}
		h1{
			border: 2px solid darkred;
			border-radius: 15px;
			background-color: lightgoldenrodyellow;
			padding: 10px;
		}
		div{
			border: 2px solid darkblue;
			border-radius: 10px;
			padding: 20px;
			width: 80%;
			background-color: salmon;
		}
	</style>
</head>
<body>
<center>
	<h1>Abstract Classes & Interfaces</h1>

	<?php
		$company->show_project_information();
	?>
</center>
</body>
</html>