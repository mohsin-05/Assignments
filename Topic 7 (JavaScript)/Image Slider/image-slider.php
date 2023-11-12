<!DOCTYPE html>
<html>
<head>
	<title>Image Slider</title>
	<style>
		img{
			height: 300px;
			border-radius: 5px;
		}
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

	<h2>Image Slider</h2>
	<h1 id="hist"></h1>
	<img id="pic" src="1.jpg" onmouseover="stopSlider()"><br />
	<button onclick="startSlider()">Start</button>
	<button onclick="stopSlider()">Stop</button>
	<button onclick="nextSlider()">Next</button>
	<button onclick="preSlider()">Previous</button>

	<script type="text/javascript">

		var pics = document.getElementById('pic')
		var p = 1
		var number_of_imgs = 4

		function startSlider(){
			id = setInterval("imageSlide()", 1000)
		}

		function imageSlide(){
			if (p > number_of_imgs) {
				p = 1
			}
			pics.src = p+".jpg"
			p++
		}

		function nextSlider() {
			p++
			if (p > number_of_imgs) {
				p = 1
			}
			pics.src = p+".jpg"
		}

		function preSlider() {
			p--
			if (p < 1) {
				p = number_of_imgs
			}
			pics.src = p+".jpg"
		}

		function stopSlider(){
			clearInterval(id)
		}

	</script>
	
	</center>
</body>
</html>