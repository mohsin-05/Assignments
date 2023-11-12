<?php

	session_start();

	session_destroy();

	header('location: Login.php?msg=Logged Out Successfully...!')

?>