<?php 

	echo "Assignment: Tables Up To A Given Number";
	echo " <br><br> ";

	for ($a = 1; $a <= 3; $a++) { 	
		for ($i = 1; $i <= 10; $i++) {
		    echo $a . " * $i = ". $i * $a;  
			echo " <br> ";		
		} 
		echo " <br> ";
	}


?>