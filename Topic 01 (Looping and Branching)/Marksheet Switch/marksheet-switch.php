<?php

	$sub1 = 40;
	$sub2 = 40;
	$sub3 = 40;
	$sub4 = 40;
	$sub5 = 40;
	$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
	$percent = ($total / 500) * 100;

	switch(true)
	{
		
		case($sub1 <= 39);	
			echo "<br/>";
			echo "Fail";
		break;

		case($sub2 <= 39);	
			echo "<br/>";
			echo "Fail";
		break;

		case($sub3 <= 39);
			echo "<br/>";
			echo "Fail";
		break;
	
		case($sub4 <= 39);	
			echo "<br/>";
			echo "Fail";
		break;
	
		case($sub5 <= 39);
			echo "<br/>";
			echo "Fail";
		break;
	
	
	
		case ($percent>=90);

			echo " Total Marks is 500";
			echo "<br/>";
			echo "Total Obtained marks: $total";
			echo "<br/>";
			echo "Percentage :$percent";
			echo "<br/>";
			echo "Your Grade is A+";
			break;

		case ($percent>=80 && $percent<=89);
			
			echo " Total Marks is 500";
			echo "<br/>";
			echo "Total Obtained marks: $total";
			echo "<br/>";
			echo "Percentage :$percent";
			echo "<br/>";
			echo "Your Grade is A";
			break;

		case ($percent>=60 && $percent<=79);
			
			echo " Total Marks is 500";
			echo "<br/>";
			echo "Total Obtained marks: $total";
			echo "<br/>";
			echo "Percentage :$percent";
			echo "<br/>";
			echo "Your Grade is B";
			break;

		case ($percent>=50 && $percent<=59);

			echo " Total Marks is 500";
			echo "<br/>";
			echo "Total Obtained marks: $total";
			echo "<br/>";
			echo "Percentage :$percent";
			echo "<br/>";
			echo "Your Grade is C";
			break;

		case ($percent>=40 && $percent<=49);

			echo " Total Marks is 500";
			echo "<br/>";
			echo "Total Obtained marks: $total";
			echo "<br/>";
			echo "Percentage :$percent";
			echo "<br/>";
			echo "Your Grade is D";
			break;


		default:
		echo"Fail";
	}


?>