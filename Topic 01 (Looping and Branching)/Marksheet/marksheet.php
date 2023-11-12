<?php

	$sub1 = 88;
	$sub2 = 39;
	$sub3 = 76;
	$sub4 = 85;
	$sub5 = 79;
	$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
	$percentage = ($total * 100) / 500;

	echo "<h2>Assignment: Student Mark Sheet</h2><br />";

	if ($sub1 < 40) {
		echo "Subject 1 = $sub1 = Fail <br />";
	} else {
		echo "Subject 1 = $sub1 = (Pass) <br />";
	}

	if ($sub2 < 40) {
		echo "Subject 2 = $sub2 = Fail <br />";
	} else {
		echo "Subject 2 = $sub2 = (Pass) <br />";
	}

	if ($sub3 < 40) {
		echo "Subject 3 = $sub3 = Fail <br />";
	} else {
		echo "Subject 3 = $sub3 = (Pass) <br />";
	}

	if ($sub4 < 40) {
		echo "Subject 4 = $sub4 = Fail <br />";
	} else {
		echo "Subject 4 = $sub4 = (Pass) <br />";
	}

	if ($sub5 < 40) {
		echo "Subject 5 = $sub5 = Fail <br />";
	} else {
		echo "Subject 5 = $sub5 = (Pass) <br />";
	}	

	echo "Percentage = ".$percentage."% <br />";

	if ($percentage >= 85) {
		echo "Grade = A <br />";
	} else if ($percentage >= 75){
		echo "Grade = B <br />";
	} else if ($percentage >= 65){
		echo "Grade = C <br />";
	} else if ($percentage >= 55){
		echo "Grade = D <br />";
	} else {
		echo "Failure <br />";
	}

?>
