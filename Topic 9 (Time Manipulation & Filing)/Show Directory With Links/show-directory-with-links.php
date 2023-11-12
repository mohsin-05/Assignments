<?php

$cur_dir = getcwd();

$dir_arr = array_diff(scandir($cur_dir), array(".", ".."));

?>

<!DOCTYPE html>
<html>
<head>
	<title>Show Directory With Links</title>
	<style>
		body{
			font-family: sans-serif;
			background: wheat;
		}
		h2{
			background: firebrick;
			border: 2px solid darkred;
			border-radius: 20px;
			padding: 15px;
			color: whitesmoke;
		}
		a{
			text-decoration: none;
			color: darkblue;
			font-weight: bold;
		}
	</style>
</head>
<body>
<center>

	<h2>Show Directory With Links</h2>

	<?php
		if (!isset($_GET['msg'])) {
			foreach ($dir_arr as $key => $file) {
			?>
				<a href="19696_MOHSIN_ALI_SAHITO.php?msg=<?php echo $file; ?>">
				<?php echo $file." | Type: ".filetype($file)."<br>"; ?> </a>

			<?php
			}
		}
		else{
			$msg = $_GET['msg'];
			if (is_file($msg)) {
				$content = file_get_contents($msg);
				echo $content;
			}else{
				$dir_arr2 = array_diff(scandir($msg), array(".", ".."));
				foreach ($dir_arr2 as $key2 => $file2) {
					$new_file = $msg."/".$file2;
				?>	<a href="19696_MOHSIN_ALI_SAHITO.php?msg=<?php echo $msg."/".$file2; ?>">
						<?php echo $file2." | Type: ".filetype($new_file)."<br>"; ?>
					</a>
				<?php
				}
			}
		}
	?>

</center>
</body>
</html>