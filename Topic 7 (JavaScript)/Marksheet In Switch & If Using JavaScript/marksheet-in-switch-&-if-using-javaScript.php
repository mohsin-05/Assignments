<!DOCTYPE html>
<html>
<head>
	<title>Marksheet In Switch & If Using JavaScript</title>
</head>
<body>
<center>
	<h2>Marksheet In Switch & If Using JavaScript</h2>

	<script>
		document.write("<h4>Switch Marksheet</h4>")

		var sub1 = 70
		var sub2 = 70
		var sub3 = 70
		var sub4 = 70
		var sub5 = 70
		var total = sub1 + sub2 + sub3 + sub4 + sub5
		var per = (total*100)/500

		document.write("Total Marks: " + total + "<br />")
		document.write("Percentage: " + per + "% <br />")

		switch (true) {
			case (per > 85 && !(sub1<40 || sub2<40 || sub3<40 || sub4<40 || sub5<40)): document.write("Grade is = A"); break;
			case (per > 75 && per <= 85 && !(sub1<40 || sub2<40 || sub3<40 || sub4<40 || sub5<40)): document.write("Grade is = B"); break;
			case (per > 65 && per <= 75 && !(sub1<40 || sub2<40 || sub3<40 || sub4<40 || sub5<40)): document.write("Grade is = C"); break;
			case (per > 55 && per <= 65 && !(sub1<40 || sub2<40 || sub3<40 || sub4<40 || sub5<40)): document.write("Grade is = D"); break;
			default: document.write("Failure")
		}

		document.write("<hr />")
		document.write("<h4>If Marksheet</h4>")
		document.write("Total Marks: "+total+"<br />")
		document.write("Percentage: "+per+"% <br />")

		if (!(sub1 < 40 || sub2 < 40 || sub3 < 40 || sub4 < 40 || sub5 < 40)) {

			if (per >= 85) {
				document.write("Grade is = A")
			}

			if (per >= 75 && per < 85) {
				document.write("Grade is = B")
			}

			if (per >= 65 && per < 75) {
				document.write("Grade is = C")
			}

			if (per >= 55 && per < 65) {
				document.write("Grade is = D")
			}

		} else {
			document.write("Failure")
		}

	</script>
</center>
</body>
</html>