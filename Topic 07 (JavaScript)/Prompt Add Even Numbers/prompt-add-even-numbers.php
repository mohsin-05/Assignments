<!DOCTYPE html>
<html>
<head>
	<title>Prompt Add Even Numbers</title>
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

	<h2>Prompt Add Even Numbers</h2>

	<script type="text/javascript">

		var sum = 0
		var a = 1
		for (var i = 1; i <= a; i++) {
			
			var hist = prompt("Enter Number");
			if (hist % 2 == 0) {
				sum += (+hist)
				a++
			} else {
				document.write(sum)
				a = 0
			}
		}
	</script>
</center>
</body>
</html>