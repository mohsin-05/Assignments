<!DOCTYPE html>
<html>
<head>
	<title>Select All Check Boxes</title>
	<style>
		body{
			background-color: skyblue;
			color: navy;
			font-family: cursive;
		}
		h2{
			background-color: yellow;
			padding: 10px;
			margin: 10px 20px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<center>

	<h2>Select All Check Boxes</h2>

	<form>
		<input type="checkbox" name="c_a" onclick="check_all(this)">Check All<br />
		<hr />
		<input type="checkbox" name="check" onclick="ch()">Checkbox<br />
		<input type="checkbox" name="check" onclick="ch()">Checkbox<br />
		<input type="checkbox" name="check" onclick="ch()">Checkbox<br />
		<input type="checkbox" name="check" onclick="ch()">Checkbox<br />
		<input type="checkbox" name="check" onclick="ch()">Checkbox<br />
	</form>

	<script type="text/javascript">

		var c_a = document.getElementsByName("c_a")
		var check = document.getElementsByName("check")
		function check_all(obj){
			for (var i = 0; i < check.length; i++) {
				if (c_a) {
					check[i].checked = c_a[0].checked
				} else {
					check[i].checked = false
				}
			}
		}

		function ch(){
			var flag = true
			for (var i = 0; i < check.length; i++) {
				if (check[i].checked == true) {
					c_a[0].checked = true
				} else {
					flag = false
				}
			}
			c_a[0].checked = flag
		}
	</script>

	</center>
</body>
</html>