<!DOCTYPE html>
<html>
<head>
	<title>Search Like Google</title>
	<script>
		function Search(){
			var search = document.getElementById("search").value;
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('search_response').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "process.php?action=search&search="+search);
			obj.send();
		}

		function showRecord(user_id){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('search_response').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "process.php?action=show&show="+user_id);
			obj.send();
		}
	</script>
	<style>
		body{
			background-color: darkorange;
			color: firebrick;
			font-family: sans-serif;
		}
		h1{
			background-color: lightgoldenrodyellow;
			border: 2px solid red;
			padding: 10px;
			border-radius: 15px;
			width: 80%;
		}
		table{
			color: black;
			border-collapse: collapse;
			background-color: orange;
		}
		table th{
			background-color: orangered;
		}
		input{
			accent-color: yellow;
		}
	</style>
</head>
<body>

	<center>
		<h1>Search Like Google</h1>

		<input type="text" id="search" onkeyup="Search()"><br><br>
		<div id="search_response"></div>
	</center>

</body>
</html>
