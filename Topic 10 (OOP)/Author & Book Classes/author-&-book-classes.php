<?php

	class Author{
		private string $name;
		private string $email;
		private $gender;

		public function __construct($name, $email, $gender){
			$this->name = $name;
			$this->email = $email;
			$this->gender = $gender;
		}

		public function set_email($email){
			$this->email = $email;
		}

		public function get_name(){
			return $this->name;
		}

		public function get_email(){
			return $this->email;
		}

		public function get_gender(){
			return $this->gender;
		}

		public function print(){
			return $this->name." (".$this->gender.") at ".$this->email;
		}
	}

	$author = new Author("Peter Jones", "peter@somewhere.com", "m");

	class Book extends Author{

		private string $book_name;
		private string $author;
		private float $price;
		private int $qtyInStock = 0;

		public function set_book_name($book_name){
			$this->book_name = $book_name;
		}

		public function set_author($author){
			$this->author = $author;
		}

		public function set_price($price){
			if ($price > 0) {
				$this->price = $price;
			}
		}

		public function set_qtyInStock($qtyInStock){
			if ($qtyInStock >= 0) {
				$this->qtyInStock = $qtyInStock;
			}
		}

		public function get_book_name(){
			return $this->book_name;
		}

		public function get_author(){
			return $this->author;
		}

		public function get_price(){
			return $this->price;
		}

		public function get_qtyInStock(){
			return $this->qtyInStock;
		}

		public function print(){
			return $this->book_name." by ".$this->get_name()." (".$this->get_gender().") ".$this->get_email();
		}

		public function getAuthorName(){
			return $this->author;
		}
	}

	$book = new Book("Peter Jones", "peter@somewhere.com", "m");

	echo $book->set_book_name("Hobbit");
	echo $book->set_author("Peter Jones");
	echo $book->set_price(100);
	echo $book->set_qtyInStock(200);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookstore</title>
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
		<h1>Bookstore</h1>

		<?php

		echo $author->print();

		echo "<hr>";

		echo $book->print();

		?>
	</center>

</body>
</html>