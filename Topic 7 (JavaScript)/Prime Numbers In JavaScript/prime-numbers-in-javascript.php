<!DOCTYPE html>
<html>
<head>
	<title>Prime Numbers In JavaScript</title>
</head>
<body>
<center>
	<h2>Prime Numbers In JavaScript</h2>

	<script>
		var count = 0;
		for (var i = 1; i <= 100; i++) {
			for (var j = 1; j <= i; j++) {
				if (i % j == 0) {
					count++;
				}
			}
			if (count < 3) {
				document.write(i + " ");
			} 
			count = 0; 
		}
	</script>
</center>
</body>
</html>