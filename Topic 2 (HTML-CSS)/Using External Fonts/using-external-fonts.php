<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment: Web Page Layout Design</title>
	<style type="text/css">
		@font-face{
			font-family: "hist";
			src: url("LEMONMILK-Regular.otf");
		}

		@font-face{
			font-family: "hist2";
			src: url("SimpleHandmade.otf");
		}

		
		body{
			text-align: center;
			background-color: floralwhite;
			font-family: "hist";
			background-image: url(one.avif);
			background-repeat: no-repeat;
			background-size: 100%;
		}

		div{
			background-color: lightpink;
			padding: 5px;
			border: 2px solid deeppink;
			margin: 10px 30px;
			border-radius: 20px;
		}

		p{
			font-weight: 600;
			font-family: "hist2";
			font-size: 120%;
		}

		.name{
			color: blueviolet;
			transition-duration: 1s;
		}

		.name:hover{
			transition: 1s;
			color: purple;
		}

		.heading{
			background-color: lightblue;
			border-color: blue;
			border-width: 5px;
			border-style: inset;
			border-radius: 40px 15px 40px 15px;
			padding: 5px;
			position: sticky;
			transition-duration: 1s;
			margin: 10px 40px;
		}

		.heading:hover{
			transition: 1s;
			text-shadow: 3px 6px 2px grey;
			word-spacing: 10px;
		}

		.id{
			border-style: double;
			border-radius: 40px;
			border-width: 3px;
			padding-top: 20px;
			width: 100px;
			height: 85px;
			background-color: lightgoldenrodyellow;
			border-color: antiquewhite;
			position: sticky;
		}

		p::first-letter{
			font-size: 200%;
		}

		.text{
			font-family: "hist2";
		}

	</style>
</head>
<body>

	<div class="heading">
		<h1>Web Page Layout Design</h1>
	</div>

	<h2 class="name">Mohsin Ali Sahito</h2>

	<div class="id">
		<h2>19696</h2>
	</div>

	<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<div style="background-color: hotpink; color: mediumvioletred;">
		<div>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Molestiae illum non dolor nobis fugit ipsam voluptate laudantium natus fuga, maxime eius, excepturi aspernatur, quia accusantium voluptatum dolorem amet! Necessitatibus, obcaecati?</p>
		</div>
		<div>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea deleniti quidem magni modi hic iure eum voluptas cupiditate neque eveniet ullam possimus beatae quis alias, ratione ipsum similique praesentium est!</p>
		</div>
	</div>

</body>
</html>