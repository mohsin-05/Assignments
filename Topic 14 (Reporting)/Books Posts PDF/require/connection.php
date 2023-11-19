<?php 
mysqli_report(false);
$connection = mysqli_connect('localhost', 'root', '', 'books_posts');
if (mysqli_connect_errno()) {
	die("Database Connection Problem");
}
?>