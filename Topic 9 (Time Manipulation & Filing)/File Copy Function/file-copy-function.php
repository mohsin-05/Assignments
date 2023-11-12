<?php

if (isset($_GET['submit'])) {
	$source = $_GET['source_file'];
	$target = $_GET['target_file'];
	
	file_copy($source, $target);
}

function file_copy($s, $t) {
	$msg = "";
	global $put; $msg;
	if (!file_get_contents($s)) {
		$msg .= "<li>Wrong Source File Path...!</li>";
		header("location:file-copy-function.php?msg=$msg");
	}

	if (!file_get_contents($t)) {
		$msg .= "<li>Wrong Target File Path...!</li>";
		header("location:file-copy-function.php?msg=$msg");
	}
	$file_content = file_get_contents($s);
	$put = file_put_contents($t, $file_content);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Copy Function</title>
	<style>
		body{
			background-color: navajowhite;
			font-family: sans-serif;
		}
		h2{
			background: firebrick;
			border: 2px solid darkred;
			border-radius: 20px;
			padding: 15px;
			color: whitesmoke;
		}
		input{
			accent-color: black;
		}
		li{
			color: red;
		}
	</style>
</head>
<body>

	<center>
		<h2>Copy Function</h2>

		<p><?php echo isset($_GET['msg']) ? $_GET['msg'] : "" ; ?></p>

		<form>
			<table>
				<tr>
					<td>Source: </td>
					<td><input type="source" name="source_file" required></td>
				</tr>
				<tr>
					<td>Target: </td>
					<td><input type="source" name="target_file" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>