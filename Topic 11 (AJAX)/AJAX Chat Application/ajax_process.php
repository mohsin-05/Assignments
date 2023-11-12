<?php

session_start();

if (!isset($_SESSION['users'])) {
	header("location:index.php?msg=Please Login First...!");
}

require ("require/connection.php");

$user = $_SESSION['users'];

date_default_timezone_set("Asia/Karachi");

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_user") {
?>
	<img src="Images/<?php echo $user['profile']; ?>" alt="">
	<span><?php echo $user['first_name']." ".$user['last_name']; ?></span>	
	<button id="logout_btn"><a href="logout.php">Logout</a></button>
<?php

}




if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_users") {
	$query = "SELECT * FROM users WHERE user_id <> ".$user['user_id'];
	$result = mysqli_query($connect, $query);

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			if ($row['is_online'] == 1) {
				echo "<li>".$row['first_name']." ".$row['last_name']."<span style='color:green'> Online</span></li>";
			} else {
				echo "<li>".$row['first_name']." ".$row['last_name']."<span style='color:red'> Offline</span></li>";
			}
			
		}
	}
}






if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_chat") {
	$query = "SELECT * FROM chat_messages, users WHERE chat_messages.`user_id` = users.`user_id` ORDER BY `time`";
	$result = mysqli_query($connect, $query);
	if ($result->num_rows>0) {
		while($row = mysqli_fetch_assoc($result)){
			$time = $row['time'];
			if ($row['user_id'] == $user['user_id']) {
				echo "<p id='user'><img src='Images/".$row['profile']."'><span style='color:teal'>".$row['first_name'].":</span> ".$row['message']." <span style='float:right'>".$time."</span>"."</p>";
			} else {
				echo "<p id='all_users'><img src='Images/".$row['profile']."'><span style='color:white'>".$row['first_name'].":</span> ".$row['message']." <span style='float:right'>".$time."</span>"."</p>";
			}
			
		}
	}
}





if (isset($_REQUEST['action']) && $_REQUEST['action'] == "send_msg" && $_REQUEST['message'] != "") {
	$message = $_REQUEST['message'];
	$time = date("H:i A", time());

	$query = "INSERT INTO chat_messages (message, user_id, chat_messages.time) VALUES ('{$message}', '{$user['user_id']}', '$time')";
	$result = mysqli_query($connect, $query);
}

?>