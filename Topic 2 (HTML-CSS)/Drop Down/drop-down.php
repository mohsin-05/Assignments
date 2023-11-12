<!DOCTYPE html>
<html>
<head>
	<title> .:: Drop Down ::. </title>

	<style type="text/css">

		*{
			padding: 0;
			margin: 0;
		}

		ul{
			margin: 0;
			padding: 0;
			list-style: none;
			background-color: lightblue;
		}

		ul li{
			float: left;
			display: block;
			position: relative;
			background-color: lightblue;
		}

		li ul{
			display: none;
		}

		ul li a{
			padding: 20px;
			display: block;
			text-decoration: none;
			white-space: nowrap;
		}

		li a:hover{
			background-color: lightpink;
		}

		li:hover>ul{
			display: block;
			position: absolute;
		}

		li:hover li{
			float: none;
		}

		ul ul ul{
			position: relative;
			top: 0;
			left: 100%;
		}

		ul::after{
			clear: both;
		}

		ul::before, ul::after{
			display: block;
			content: "";
		}

	</style>

</head>
<body>

	<ul>
		<li> <a href=""> Home </a></li>
		<li> <a href=""> Services </a></li>
		<li> <a href=""> Batch </a>
			<ul>
				<li> <a href=""> Morning </a></li>
				<li> <a href=""> Evening </a>
					<ul>
						<li> <a href=""> PHP Basic </a></li>
						<li> <a href=""> Looping & Branching </a>
							<ul>
								<li> <a href=""> Morning </a></li>
								<li> <a href=""> Evening </a>
									<ul>
										<li> <a href=""> PHP Basic </a></li>
										<li> <a href=""> Looping & Branching </a></li>			
										<li> <a href=""> HTML </a></li>
										<li> <a href=""> IDE </a></li>
										<li> <a href=""> CSS </a></li>
									</ul>
								</li>			
							</ul>
						</li>			
						<li> <a href=""> HTML </a></li>
						<li> <a href=""> IDE </a></li>
						<li> <a href=""> CSS </a></li>
					</ul>
				</li>			
			</ul>
		</li>
		<li> <a href=""> About Us </a></li>
		<li> <a href=""> Contact Us </a></li>
	</ul>

</body>
</html>