<?php

session_start();

require ("require/connection.php");

if (!isset($_SESSION['users'])) {
	header("location:index.php?msg=Please Login First...!");
}

$users = $_SESSION['users'];
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $users['first_name']; ?></title>
	<script>
		setInterval(function(){showUsers(); showChat();},1000)
		showUser();
		showUsers();
		showChat();
		

		function showUser(){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_user').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "ajax_process.php?action=show_user");
			obj.send();
		}

		function showUsers(){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_users').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "ajax_process.php?action=show_users");
			obj.send();
		}

		function showChat(){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_chat').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "ajax_process.php?action=show_chat");
			obj.send();
		}

		function sendMsg(){
			var message = document.getElementById("send").value;
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					showChat();
					document.getElementById("send").value = ""
				}
			}

			obj.open("GET", "ajax_process.php?action=send_msg&message="+message);
			obj.send();
		}
		
	</script>
	<style>
		body{
			font-family: sans-serif;
		}
		img{
			width: 50px;
			height: 50px;
			border-radius: 50px;
		}
		#logout_btn{
			float: right;
			margin-top: 10px;
			width: 60px;
			height: 40px;
			background-color: white;
			color: teal;
			font-weight: bold;
			border-radius: 8px;
			border-color: teal;
		}
		#show_user{
			width: 100%;
			background-color: teal;
			color: white;
			padding: 5px;
			border-radius: 8px;
		}
		a{
			text-decoration: none;
			color: teal;
		}
		#show_users{
			width: 100%;
			background-color: grey;
			height: 480px;
			border-radius: 8px;
			padding: 5px;
		}
		table{
			width: 100%;
		}
		li{
			list-style: none;
		}
		#send{
			width: 90%;
			height: 40px;
			border-color: teal;
			border-radius: 8px;
			margin-top: 5px;
		}
		#send_btn{
			width: 60px;
			height: 40px;
			background-color: teal;
			color: white;
			font-weight: bold;
			border-radius: 8px;
			border-color: teal;
		}
		#show_chat{
			width: 100%;
			padding: 5px;
			border-radius: 8px;
			background-color: grey;
			height: 420px;
			overflow-y: auto;
		}
		#user{
			float: left;
			width: 70%;
			background-color: white;
			padding: 10px;
			border-radius: 8px;
		}
		#all_users{
			float: right;
			width: 70%;
			background-color: teal;
			padding: 10px;
			border-radius: 8px;
		}
		#users{
			background-color: teal;
			padding: 10px;
			text-align: center;
			color: white;
			border-radius: 8px;
			height: 40px;
		}
		#one{
			width: 70%;
		}
		#two{
			width: 20%;
		}
		h1{
			background-color: lightgoldenrodyellow;
			border: 2px solid red;
			padding: 10px;
			border-radius: 15px;
			width: 80%;
		}
	</style>
</head>
<body>

	<center>
		<h1>Group Chat Application</h1>

	</center>
	<table cellpadding="10">
		<tr>
			<td id="one">
				<div id="show_user"></div>
				<div id="show_chat"></div>
				<div id="send_msg">
					<input type="text" id="send" placeholder="Type Message...">
					<button id="send_btn" onclick="sendMsg()">Send</button>
				</div>
			</td>
			<td id="two">
				<div id="users">Users</div>
				<div id="show_users"></div>
			</td>
		</tr>
		<tr>
		</tr>
	</table>
</body>
</html>