<?php

	$note5000 = 5000;
	$note1000 = 1000;
	$note500 = 500;
	$note100 = 100;
	$note50 = 50;
	$note20 = 20;
	$note10 = 10;
	$note5 = 5;
	$note2 = 2;
	$note1 = 1;

	$amount = 6575;
	$count = 0;

	echo "Amount = ".$amount."<br>";

	while($amount >= $note5000) {
		$amount -= $note5000;
		$count++;
	}

	echo "5000:- ".$count."<br>";
	$count = 0;

	while($amount >= $note1000) {
		$amount -= $note1000;
		$count++;
	}

	echo "1000:- ".$count."<br>";
	$count = 0;

	while($amount >= $note500) {
		$amount -= $note500;
		$count++;
	}

	echo "500:- ".$count."<br>";
	$count = 0;

	while($amount >= $note100) {
		$amount -= $note100;
		$count++;
	}

	echo "100:- ".$count."<br>";
	$count = 0;

	while($amount >= $note50) {
		$amount -= $note50;
		$count++;
	}

	echo "50:- ".$count."<br>";
	$count = 0;

	while($amount >= $note20) {
		$amount -= $note20;
		$count++;
	}

	echo "20:- ".$count."<br>";
	$count = 0;

	while($amount >= $note10) {
		$amount -= $note10;
		$count++;
	}

	echo "10:- ".$count."<br>";
	$count = 0;

	while($amount >= $note5) {
		$amount -= $note5;
		$count++;
	}

	echo "5:- ".$count."<br>";
	$count = 0;

	while($amount >= $note2) {
		$amount -= $note2;
		$count++;
	}

	echo "2:- ".$count."<br>";
	$count = 0;

	while($amount >= $note1) {
		$amount -= $note1;
		$count++;
	}

	echo "1:- ".$count."<br>";
	$count = 0;

?>