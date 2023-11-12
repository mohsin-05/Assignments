<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Assignment: Using All Tags </title>

	<style> 
		*{
			font-family: times new roman;
			text-align: center;
		} 

		body{
			background: linen;
		}

		body p{
			color: darkred;
		}

		body>p{
			color: teal;
		}

		.first{
			color: orange;
		}

		.second, .third{
			color: pink;
		}

		#a, #b{
			color: darkgoldenrod;
		}

		[class]{
			color: darkgreen;
		}

		[ab]{
			color: wheat;
		}

		[class=_first]{
			color: darksalmon;
		}

		[class~="second"]{
			color: darkolivegreen;
		}

		[class|="third"]{
			color: darkviolet;
		}

		[class^="n"]{
			color: darkslateblue;
		}

		[class$="f"]{
			color: darkcyan;
		}

		[class*="s"]{
			color: darkslategrey;
		}

		h1:hover{
			background-color: brown;
		}

		p::first-letter{
			color: yellow;
			font-size: 300%;
			font-family: Brush Script MT;
		}

		p::first-line{
			color: chartreuse;
		}

		ul li{
			color: gold;
			text-align: left;
		}

		ul li:nth-child(1){
			color: darkorchid;
		}

		ul li:nth-child(2), ul li:nth-child(3), ul li:nth-child(4){
			color: seagreen;
		}

		input{
			accent-color: blueviolet;
			caret-color: darkred;
		}

		h3::before{
			content: "CSS ";
			color: limegreen;
		}

		h3::after{
			content: " HTML";
			color: blue;
		}

		div{
			background-color: crimson;
			padding: 2px;
		}

	</style>
</head>
<body>

	<h1> Heading </h1>

	<h3 ab> Paragraph </h3>

	<h3 class="first"> Paragraph </h3>

	<p id="a">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<h3 class="second"> Paragraph </h3>

	<p id="b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<h3 class="third"> Paragraph </h3>

	<p id="c">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<h3 class="forth"> Div </h3>

	<div>
		<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Blanditiis magni, tempore. Corrupti vitae est illo debitis. Pariatur a eum nihil porro tempore ratione doloribus dolor, sed officiis nobis excepturi voluptate!</p>
	</div>
	<br>

	<h3 class="fifth"> Div </h3>

	<div>
		<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Blanditiis magni, tempore. Corrupti vitae est illo debitis. Pariatur a eum nihil porro tempore ratione doloribus dolor, sed officiis nobis excepturi voluptate!</p>
	</div>
	<br>

	<h3 class="sixth"> Div </h3>

	<div>
		<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Blanditiis magni, tempore. Corrupti vitae est illo debitis. Pariatur a eum nihil porro tempore ratione doloribus dolor, sed officiis nobis excepturi voluptate!</p>
	</div>
	<br>

	<h3 class="seventh"> Div </h3>

	<div>
		<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Blanditiis magni, tempore. Corrupti vitae est illo debitis. Pariatur a eum nihil porro tempore ratione doloribus dolor, sed officiis nobis excepturi voluptate!</p>
	</div>
	<br>
	
	<h3 class="eighth"> Div </h3>

	<div>
		<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Blanditiis magni, tempore. Corrupti vitae est illo debitis. Pariatur a eum nihil porro tempore ratione doloribus dolor, sed officiis nobis excepturi voluptate!</p>
	</div>
	<br>
	
	<h3 class="ninth"> List </h3>

	<ul>
		<li> Item </li>
		<li> Item </li>
		<li> Item </li>
		<li> Item </li>
		<li> Item </li>
		<li> Item </li>
		<li> Item </li>
		<li> Item </li>
	</ul>
	
	<h3 class="tenth"> Input</h3>

	<input type="text" name="text">
	<br />
	<input type="radio" name="radio">
	<br />
	<input type="checkbox" name="checkbox">
	<br />
	<input type="range" name="range"> <br><br><br><br><br><br>
	
</body>
</html>