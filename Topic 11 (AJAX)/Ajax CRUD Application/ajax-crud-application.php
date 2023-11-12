<!DOCTYPE html>
<html>
<head>
	<title>Ajax CRUD Application</title>
	<script>
		showForm();
		showPosts();
		/*----- Show Form -----*/
		function showForm(){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_form').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "process.php?action=show_form");
			obj.send();
		}

		/*----- Add Post -----*/
		function addPost(){
			var title = document.getElementById('title').value;
			var summary = document.getElementById('summary').value;
			var description = document.getElementById('description').value;
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('message').innerHTML = obj.responseText;
					showPosts();
					reset();
				}
			}

			obj.open("GET", "process.php?action=add_post&title="+title+"&summary="+summary+"&description="+description);
			obj.send();
		}

		/*----- Show Users -----*/
		function showPosts(){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_posts').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "process.php?action=show_posts");
			obj.send();
		}

		/*----- Edit Record -----*/
		function editRecord(post_id){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_form').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "process.php?action=edit_record&post_id="+post_id);
			obj.send();
		}

		/*----- Update Record -----*/
		function updateRecord(post_id){
			var title = document.getElementById('title').value;
			var summary = document.getElementById('summary').value;
			var description = document.getElementById('description').value;
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('message').innerHTML = obj.responseText;
					showPosts();
					reset();
				}
			}

			obj.open("GET", "process.php?action=update_record&title="+title+"&summary="+summary+"&description="+description+"&post_id="+post_id);
			obj.send();
		}

		/*----- Delete Record -----*/
		function deleteRecord(post_id){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('message').innerHTML = obj.responseText;
					showPosts();
				}
			}

			if (confirm("Are you sure you want to delete record with id = "+post_id)) {
				obj.open("GET", "process.php?action=delete_record&post_id="+post_id);
				obj.send();
			}

		}

		/*----- Reset Form -----*/
		function reset(){

			document.getElementById('title').value = "";
			document.getElementById('summary').value = "";
			document.getElementById('description').value = "";

			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					showForm();
				}
			}

			obj.open("GET", "process.php?action=reset");
			obj.send();

		}

		/*----- Search Record -----*/
		function Search(){
			var search = document.getElementById("search").value;
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_posts').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "process.php?action=search&search="+search);
			obj.send();
		}

		/*----- Show Search Record -----*/
		function showRecord(post_id){
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_posts').innerHTML = obj.responseText;
				}
			}

			obj.open("GET", "process.php?action=show&show="+post_id);
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
			border-color: red;
			width: 80%;
		}
		table th{
			background-color: orangered;
		}
		input{
			accent-color: yellow;
		}
		fieldset{
			width: 50%;
			border-radius: 15px;
			border-color: red;
		}
		#edit{
			background-color: blue;
			color: white;
			padding: 5px;
			border-radius: 5px;
		}
		#delete{
			background-color: red;
			color: white;
			padding: 5px;
			border-radius: 5px;
		}
		textarea{
			accent-color: yellow;
		}
		#add{
			background-color: green;
			color: white;
			padding: 5px;
			border-radius: 5px;
		}
		#reset{
			background-color: red;
			color: white;
			padding: 5px;
			border-radius: 5px;
		}
	</style>
</head>
<body>

	<center>
		<h1>Ajax CRUD Application</h1>

		Search: <input type="text" id="search" onkeyup="Search()"><button>Search</button><br><br>

		<div id="message"></div>
		<div id="show_form"></div><br>
		<div id="show_posts"></div>
	</center>

</body>
</html>