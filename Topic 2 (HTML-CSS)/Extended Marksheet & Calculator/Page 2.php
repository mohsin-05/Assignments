<!DOCTYPE html>
<html>
<head>
	<title>Assignment: EXTENDED MARK SHEET & CALCULATOR</title>
</head>
<body>

<?php 

	if(isset($_GET['submit1']) && ($_GET['eng']) && ($_GET['math']) && ($_GET['sci']) && ($_GET['phy']) && ($_GET['chem'])) {
		$sub = ($_GET['eng'])+($_GET['math'])+($_GET['sci'])+($_GET['phy'])+($_GET['chem']);
		echo "MARKSHEET<br><br><br>";

		echo "Total Marks: ".$sub."<br><br>";

		$per = ($sub * 100) / 500;

		echo "Percentage: ".$per."%<br><br>";

		if ($per >= 85) { 
			echo "Grade: A";
		} else if ($per >= 75) { 
			echo "Grade: B";
		} else if ($per >= 65) { 
			echo "Grade: C";
		} else if ($per >= 55) { 
			echo "Grade: D";
		} else if ($per >= 45) { 
			echo "Grade: E";
		} else { 
			echo "Fail";
		}
	}

	if (isset($_GET['submit2']) && ($_GET['val1']) && ($_GET['val2']) && ($_GET['operator'])) {

		echo "CALCULATOR<br><br><br>";
		$num1 = $_GET['val1'];
		$num2 = $_GET['val2'];
		$sign = $_GET['operator'];

		switch ($sign) {
			case '+':
				echo "$num1 + $num2 = ".$num1 + $num2;
				break;

			case '-':
				echo "$num1 - $num2 = ".$num1 - $num2;
				break;

			case '*':
				echo "$num1 * $num2 = ".$num1 * $num2;
				break;

			case '/':
				echo "$num1 / $num2 = ".$num1 / $num2;
				break;
			
			default:
				echo "Calculation Failed";
				break;
		}
	} ?>

</body>

</html>