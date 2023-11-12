<!DOCTYPE html>
<html>
<head>
	<title>Registration Form + Check Email Already Exists</title>
	<script>
		showCountry();
		function showCountry(){

			var obj;
			if (window.XMLHttpRequest) {
				obj = new XMLHttpRequest();
			} else {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			}

			obj.onreadystatechange = function(){

				if (obj.status == 200 && obj.statusText == "OK" && obj.readyState == 4) {
					document.getElementById('show_country').innerHTML = obj.responseText;
				}
			}

			obj.open("GET",'process.php?action=show_country');
			obj.send();
		}

		function showCity(){

			var country_id = document.getElementById('country_id').value;

			if (country_id == "") {
				document.getElementById('show_city').innerHTML= "";
				return 1;
			}

			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){

				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_city').innerHTML = obj.responseText;
				}
			}

			obj.open("POST",'process.php');
			obj.setRequestHeader("content-type","application/x-www-form-urlencoded");
			obj.send("action=show_city&country_id="+country_id);
		}

		function checkEmail(){
			var email = document.getElementById("email").value;
			var obj;
			if (window.ActiveXObject) {
				obj = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				obj = new XMLHttpRequest();
			}

			obj.onreadystatechange = function(){
				if (obj.readyState == 4 && obj.status == 200) {
					document.getElementById('show_response').innerHTML = obj.responseText;
				}
			}
			obj.open("GET", "email_process.php?action=emailcheck&echeck="+email);
			obj.send();
		}
	</script>
</head>
<body>

	<center>
		<h1>Registration Form + Check Email Already Exists</h1>

		<input type="text" id="fullname" placeholder="Enter Fullname"><br/><br/>
		<input type="text" id="email" placeholder="Enter Email" onblur="checkEmail()"><span id="show_response"></span><br/><br/>
		<input type="password" id="password" placeholder="Enter Password"><br/><br/>
		<input type="text" id="phone" placeholder="Enter Phone Number"><br/><br/>
		<span id="show_country"></span>
		<span id="show_city"></span><br/><br/>
		<button >Submit</button>

	</center>

</body>
</html>