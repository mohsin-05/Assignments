<?php 

	echo "Assignment: Prime Number Series <br>";

	$num1 = 0;  
	$num2 = 1;  

	while($num1 < 50){  
		$count = 0;  
		for($i = 1; $i <= $num2; $i++){  
			if($num2 % $i == 0){  
				$count++; 
			} 
		}  
		if($count < 3){  
			echo $num2." ";  
			$num1++;  
		}
		$num2++;  
	}  
?> 