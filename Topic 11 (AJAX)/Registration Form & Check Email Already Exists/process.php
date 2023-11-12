<?php

	mysqli_report(MYSQLI_REPORT_OFF);
	$connect = mysqli_connect("localhost", 'root', '', 'country_city');

	if (mysqli_connect_error()) {
		die("<h1>Database Connection Failed!...</h1>");
	}

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_country") {
		
		$query = "SELECT * FROM country";
		$result = mysqli_query($connect,$query);

		if ($result->num_rows > 0) { ?>
			<select onchange="showCity()" id="country_id">
				<option value="">--Select Country--</option>
		<?php	
			while($country = mysqli_fetch_assoc($result)){ ?>
				<option value="<?php echo $country['country_id'];?>"><?php echo $country['country_name']; ?></option>
				<?php
			} ?>

			</select>
			<?php
		}
	} elseif (isset($_POST['action']) && $_POST['action'] == 'show_city') {

	    $query = "SELECT * FROM city WHERE country_id=".$_POST['country_id'];
	    $result = mysqli_query($connect,$query);

	     if ($result->num_rows>0) { ?>
	 	    <select>
	 	<?php  
	 		while ($city = mysqli_fetch_assoc($result)) {
		 		echo "<option>".$city['city_name']."</option>";
	 		}
	 	?>	</select>
	 	<?php
	    }
	}
?>