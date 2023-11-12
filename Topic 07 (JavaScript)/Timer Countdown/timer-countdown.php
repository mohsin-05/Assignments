<!DOCTYPE html>
<html>
<head>
	<title>Countdown Timer</title>
	<style type="text/css">
		body{
			background-color: lightcyan;
			color: navy;
			font-family: cursive;
		}
		h2{
			background-color: orange;
			padding: 10px;
			margin: 10px 20px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<center>

		<h2>Countdown Timer</h2>

		<h4>
			<span id="hist1"></span>
			<span id="hist2"></span>
			<span id="hist3"></span>
		</h4>

		<button onclick="startTimer()">Start</button>
		<button onclick="stopTimer()">Stop</button>

		<script type="text/javascript">
			var h = prompt("Enter Hours")
			h = parseInt(h)
			var m = prompt("Enter Minutes")
			m = parseInt(m)
			var s = prompt("Enter Seconds")
			s = parseInt(s)
			var id = 0

			if (s >= 60) {
				m += parseInt(s / 60)
				while(s >= 60){
					s -= 60
				}
			}

			if (m >= 60) {
				h += parseInt(m / 60)
				while(m >= 60){
					m -= 60
				}
			}

			function startTimer(){
				id = setInterval("seconds()",1000);
				return id;
			}

			hist1.innerHTML = h + " : "

			hist2.innerHTML = m + " : "

			hist3.innerHTML = s

			function seconds(){

				if (h > 0) {
					if (m > 0) {
						if (s == 0) {
							m--
						} else if (s < 0) {
							s = 59
						}
					} else if (m < 0) {
						if (s < 0) {
							s = 59
							m = 59
							h--
						}
					} else if (m == 0) {
						if (s < 0) {
							s = 59
							m = 59
							h--
						}
					}
				} else if (h < 0) {
					if (m > 0) {
						if (s == 0) {
							m--
						} else if (s < 0) {
							s = 59
						}
					}
				}

				if (h == 0 && m == 0 && s == 0) {
					clearInterval(id)
				}

				hist1.innerHTML = h + " : "

				hist2.innerHTML = m + " : "

				hist3.innerHTML = s
				s--

			}

			function stopTimer(){
				clearInterval(id);
			}
		</script>
	
	</center>
</body>
</html>