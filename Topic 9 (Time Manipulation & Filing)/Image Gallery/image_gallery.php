<?php 

	mysqli_report(MYSQLI_REPORT_OFF);

	define("host_name", "localhost");
	define("user_name", "root");
	define("password", "");
	define("database_name", "filing");

	$connection = mysqli_connect(host_name, user_name, password, database_name);
	$query = "SELECT * FROM images";
	$result = mysqli_query($connection, $query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
	<style>
		h2{
			background-color: orange;
			border: 2px solid darkred;
			border-radius: 10px;
			margin: 10px 20px;
			padding: 10px;
			font-family: cursive;
			color: navy;
		}
		img{
			width: 180px;
			height: 120px;
		}
		div{
			float: left;
		}
		fieldset{
			width: 60%;
			border: 2px double green;
			border-radius: 15px;
		}
		input{
			accent-color: black;
		}
	</style>
</head>
<body>
	<center>	
	<h2>Image Gallery</h2>
	<hr/>
	<?php 
		if (isset($_REQUEST['msg'])) {
			echo "<p style='color:".$_REQUEST['color']."'>".$_REQUEST['msg']."</p>";
		}
	?>
	<fieldset style="width:50%">
		<legend>Upload File</legend>
		<form action="process.php" method="POST" enctype="multipart/form-data">
			<table cellpadding="10">
				<tbody>
					<tr>
						<th>Select Multiple Files</th>
						<td>
							<input type="file" name="multiple_file[]" multiple required />
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="upload" value="Upload" accept="images/*" />
						</td>
					</tr>

				</tbody>
			</table>
		</form>
	</fieldset><br><br><br>

		<?php
			while ($row = mysqli_fetch_array($result)) {
				?>
				
				<div>
					<img src="<?php echo $row[4];?>">
				</div>

				<?php
			}
		?>
	</center>
</body>
</html>