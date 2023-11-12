<?php 

	mysqli_report(MYSQLI_REPORT_OFF);

	define("host_name", "localhost");
	define("user_name", "root");
	define("password", "");
	define("database_name", "filing");

	$connection = mysqli_connect(host_name, user_name, password, database_name);

	if (isset($_REQUEST['upload'])) {
		$count = 0;
		$folder = "Images";
		if (!is_dir($folder)) {
			if (!mkdir($folder)) {
				$message = "Folder Not Created";
				header("location:image_gallery.php?msg=$message&color=red");
				die;
			}
		}

		if (isset($_FILES['multiple_file']['name'])) {
			foreach ($_FILES['multiple_file']['name'] as $key => $value) {
				$originalname  = $_FILES['multiple_file']['name'][$key];		
				$filename  	   = rand()."_".$_FILES['multiple_file']['name'][$key];		
				$temp_name 	   = $_FILES['multiple_file']['tmp_name'][$key];	
				$destination   = $folder."/".$filename;

				$query = "INSERT INTO `images` (`image_name`,`filename`,`temp_name`,`destination`) 
				VALUES('".$originalname."', '".$filename."', '".$temp_name."', '".$destination."')";	
				mysqli_query($connection, $query);
				
				if (move_uploaded_file($temp_name, $destination)) {
					$count++;
				}
			}
		}
				
		if ($count > 0) {
			$message = $count." Files Uploaded";
			header("location:image_gallery.php?msg=$message&color=green");
			die;
		} else {
			$message = "Files Not Uploaded";
			header("location:image_gallery.php?msg=$message&color=red");
			die;
		}
	}	





















?>