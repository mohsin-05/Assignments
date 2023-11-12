<?php

	mysqli_report(MYSQLI_REPORT_OFF);
	$connect = mysqli_connect("localhost",'root','','ajax_register');

	if (mysqli_connect_error()) {
		die("<h1>Database Connection Failed!...</h1>");
	}

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == "emailcheck") {
		
		$query = "SELECT * FROM users WHERE email ='".$_REQUEST['echeck']."'";
		$result = mysqli_query($connect, $query);

		if ($result->num_rows > 0) { ?>
			<p>Email exists</p>
			<?php
		}
	}

?>