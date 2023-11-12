<!DOCTYPE html>
<html>
<head>
	<title>Calculator In Switch & If Using JavaScript</title>
</head>
<body>
	<center>

	<h2>Calculator In Switch & If Using JavaScript</h2>

	<script type="text/javascript">
		document.write("<h4>Switch Calculator</h4> <br />")
		var a = 10
		var b = 5
		var op = "+"

		switch (op) {
			case "+": document.write( a + " + " + b + " = " + (a + b) ); break;
			case "-": document.write( a + " - " + b + " = " + (a - b) ); break;
			case "*": document.write( a + " * " + b + " = " + (a * b) ); break;
			case "/": document.write( a + " / " + b + " = " + (a / b) ); break;
			case "%": document.write( a + " % " + b + " = " + (a % b) ); break;
			default: "Invalid Operator"
		}

		document.write("<hr />")
		document.write("<h4>If Calculator</h4> <br />")

		if (op == "+") {
			document.write( a + " + " + b + " = " + (a + b) )
		} else if (op == "-") {
			document.write( a + " - " + b + " = " + (a - b) )
		} else if (op == "*") {
			document.write( a + " * " + b + " = " + (a * b) )
		} else if (op == "/") {
			document.write( a + " / " + b + " = " + (a / b) )
		} else if (op == "%") {
			document.write( a + " % " + b + " = " + (a % b) )
		}

	</script>
</center>
</body>
</html>