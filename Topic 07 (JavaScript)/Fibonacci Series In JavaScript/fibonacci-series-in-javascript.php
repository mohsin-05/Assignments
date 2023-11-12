<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Series In JavaScript</title>
</head>
<body>
<center>
	<h2>Fibonacci Series In JavaScript</h2>

	<script>
		var num1 = 1
		var num2 = 2
		document.write(num1 + " " + num2 + " ")
		for (var i = 1; i <= 10; i++) {
			var num3 = num1 + num2
			document.write(num3 + " ")
			num1 = num2
			num2 = num3
		}
	</script>
</center>
</body>
</html>