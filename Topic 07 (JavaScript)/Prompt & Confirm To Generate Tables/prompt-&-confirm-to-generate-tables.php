<!DOCTYPE html>
<html>
<head>
	<title>Prompt & Confirm To Generate Tables</title>
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
		p{
			color: red;
		}
	</style>
</head>
<body>
<center>

	<h2>Prompt & Confirm To Generate Tables</h2>

	<script type="text/javascript">
		var hist = prompt("Enter Number of Tables")
		var a = 0
		for (var i = 2; i <= hist; i++) {
			document.write("<p>Table of " + i + "</p>")
			if (a == 5) {
				var c = confirm("Are You Sure?")
				if (!c) {
					break;
				}
					a = 0
			}
			for (var j = 1; j <= 10; j++) {
				document.write(i + " x " + j + " = " + i * j + "<br>")
			}
			document.write("<br>")
			a++
		}
	</script>
</center>
</body>
</html>