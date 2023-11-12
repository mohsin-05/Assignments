<!DOCTYPE html>
<html>
<head>
	<title>Email Box System</title>
	<script>
		function sendEmail(){
			var to = document.getElementById('to').value;
			var sub = document.getElementById('sub').value;
			var message = document.getElementById('message').value;
			var obj;

			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById("result").innerHTML = obj.responseText;
				}
			}

			document.getElementById('to').value = ""
			document.getElementById('sub').value = ""
			document.getElementById('message').value = ""

			obj.open("POST", "ajax_process.php");
			obj.setRequestHeader("content-type", "application/x-www-form-urlencoded");
			obj.send("action=send_email&to="+to+"&sub="+sub+"&message="+message);
		}

		function box($type) {
			var type = $type
			var obj

			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP")  
			} else {
				obj = new XMLHttpRequest()
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById("box").innerHTML = obj.responseText
				}
			}

			obj.open("POST", "ajax_process.php")
			obj.setRequestHeader("content-type", "application/x-www-form-urlencoded")
			obj.send("action=select_type&type="+type)
		}
	</script>

	<style>
		body{
			background-color: lightseagreen;
			font-family: sans-serif;
		}
		h1{
			color: seagreen;
			background-color: lightgoldenrodyellow;
			border: 2px solid green;
			padding: 10px;
			border-radius: 15px;
			width: 80%;
		}
		input{
			accent-color: green;
			border-radius: 4px;
			border-color: green;
		}
		fieldset{
			width: 30%;
			border: 3px dashed; black;
			border-radius: 8px;
			background-color: lightgreen;
			color: black;
		}
		#draftbtn, #send{
			background-color: black;
			color: green;
			border-radius: 8px;
			border-color: green;
			width: 60px;
			height: 30px;
		}
		button{
			color: orangered;
			background-color: lightgreen;
			border-style: none;
		}
		table{
			border-collapse: collapse;
			border-color: orange;
		}
	</style>
</head>
<body>

	<center>
		<h1>Email Box System</h1>

		<fieldset>
			<legend>Welcome</legend>
				<div style="width: 20%; float: left">
					<button id="compose" onclick="box('compose')">Compose</button><br>
					<button id="inbox" onclick="box('inbox')">Inbox</button><br>
					<button id="sent" onclick="box('sent')">Sent</button><br>
					<button id="trash" onclick="box('trash')">Trash</button><br>
					<button id="draft" onclick="box('draft')">Draft</button><br>		
				</div>
				<div style="width: 80%; float: right;">
				<table border="1" cellpadding="10">
					<thead>

					</thead>
					<tbody id="box">

					</tbody>
				</table>
				</div>
		</fieldset>

		<div id="result"></div>
	</center>

</body>
</html>