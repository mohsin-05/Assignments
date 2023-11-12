<!DOCTYPE html>
<html>
<head>
	<title>Prompt Calculator</title>
	<style>
		body{
			background-color: skyblue;
			color: navy;
			font-family: cursive;
		}
		h2{
			background-color: yellow;
			padding: 10px;
			margin: 10px 20px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<center>

	<h2>Prompt Calculator</h2>

	<script type="text/javascript">
		var num1 = prompt("Enter First Number")
		var num2 = prompt("Enter Second Number")
		var op = prompt("Enter Operator")

		if (op == "+") {
			document.write(num1+" + "+num2+" = "+((+num1) + (+num2)))
		} else if (op == "-") {
			document.write(num1+" - "+num2+" = "+(num1 - num2))
		} else if (op == "*") {
			document.write(num1+" * "+num2+" = "+(num1 * num2))
		} else if (op == "/") {
			document.write(num1+" / "+num2+" = "+(num1 / num2))
		} else if (op == "%") {
			document.write(num1+" % "+num2+" = "+(num1 % num2))
		} else {
			document.write("Ivalid Operator")
		}

	</script>
</center>
</body>
</html>