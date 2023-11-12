<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery With Lightbox</title>
	<style>
		*{
			box-sizing: border-box;
			text-align: center;
		}
		.col2{
			width: 20%;
			height: 120px;
			float: left;
		}
		.row{
			clear: both;
			height: 120px;
			display: flex;
		}
		div > img{
			width: 100%;
			height: 100%;
		}
		#light_box{
			width: 100%;
			height: 480px;
			background-color: gray;
			display: none;
		}
		#myimg{
			width: 80%;
		}
		#btn{
			position: absolute;
			background-color: red;
			color: white;
			font-weight: bold;
		}
		h2{
			background-color: orange;
			color: darkred;
			border: 2px solid darkred;
			border-radius: 10px;
			padding: 10px;
			margin: 10px 20px;
			font-family: cursive;
		}

	</style>
</head>
<body>
	<center>

	<h2>Image Gallery With Lightbox</h2>

	<div class="row">
		<div class="col2"><img src="a.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="b.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="c.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="d.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="e.jpg" onclick="openn(this)"></div>
	</div>

	<div class="row">
		<div class="col2"><img src="f.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="g.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="h.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="i.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="j.jpg" onclick="openn(this)"></div>
	</div>

	<div class="row">
		<div class="col2"><img src="k.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="l.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="m.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="n.jpg" onclick="openn(this)"></div>
		<div class="col2"><img src="o.jpg" onclick="openn(this)"></div>
	</div>

	<div id="light_box">
		<img id="myimg" src="#">
		<button id="btn" onclick="closebtn(this)">X</button>
	</div>

	<script>
		var myimg = document.getElementById('myimg')
		var light_box = document.getElementById('light_box')
		var row = document.querySelectorAll('.row')

		function openn(obj_img){
			myimg.src = obj_img.src
			light_box.style.display = "block"
			for (i = 0; i < row.length; i++) {
				row[i].style.display = "none"
			}
		}

		function closebtn(obj){
			light_box.style.display = "none"
			for (i = 0; i < row.length; i++) {
				row[i].style.display = "flex"
			}
		}

	</script>

	</center>
</body>
</html>