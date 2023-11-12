<!DOCTYPE html>
<html>
<head>
	<title>Search Record Through CNIC Using Ajax</title>
	<script>
		function search(){
			var data = document.getElementById('cnic').value;
			var obj;
			if (window.XMLHttpRequest) {
				obj = new XMLHttpRequest();
			} else {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('response').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "process.php?action=search&cnic="+data);
			obj.send();
		}
	</script>
	<style>
		body{
			background: darkslategray;
			color: white;
			font-family: cursive;
		}
		input{
			accent-color: white;
		}
		h1{
			border: 3px solid white;
			border-radius: 25px 5px;
			padding: 10px;
		}
		button{
			color: whitesmoke;
			background-color: black;
			border-radius: 50px;
		}
	</style>
</head>
<body>

	<center>
		<h1>Search Record Through CNIC Using Ajax</h1>

		<div>
			<input type="text" id="cnic" placeholder="Enter CNIC">
			<button onclick="search()">Search</button>
		</div>
		<br><br>

		<div id="response"></div>

	</center>

</body>
</html>