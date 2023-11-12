<!DOCTYPE html>
<html>
<head>
	<title>Factorial Of A Number In JavaScript</title>
</head>
<body>
<center>
	<h2>Factorial Of A Number In JavaScript</h2>

	<script>
		var a = 5
		var b = 1

		for (var i = 1; i <= a; i++) {
			b *= i
		}
		
		document.write("Factorial of "+ a +" = "+ b)
	</script>
</center>
</body>
</html>