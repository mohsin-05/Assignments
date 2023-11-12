<?php

mysqli_report(false);
$connect = mysqli_connect("localhost", "root", "", "email_system");
if (mysqli_connect_error()) {
	die("<h1 style='color:red'>Database Connection Failed...!</h1>");
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "send_email") {
	extract($_REQUEST);
	$query = "SELECT * FROM users WHERE first_name = '{$to}'";
	$result = mysqli_query($connect, $query);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$insertq = "INSERT INTO emails (to_user_id, from_user_id, emails.`subject`, emails.`status`, message) VALUES ('{$row['user_id']}', '{$_COOKIE['user_id']}', '{$sub}', 'sent', '{$message}')";
		$insertr = mysqli_query($connect, $insertq);
		if ($insertr) {
			echo "<h2>Email Sent to ".$to."</h2>";
		}
	}
}




if (isset($_REQUEST['action']) && $_REQUEST['action'] == "select_type"):
	extract($_REQUEST);

	if ($type == "compose"): ?>
		<tr>
			<td>To: </td>
			<td><input type="text" id="to" placeholder="Enter Email..." required></td>
		</tr>
		<tr>
			<td>Sub: </td>
			<td><input type="text" id="sub" placeholder="Enter Subject..." required></td>
		</tr>
		<tr>
			<td>Message: </td>
			<td><input type="text" id="message" placeholder="Enter Message..."></td>
		</tr>
		<tr>
			<td><button id="draftbtn">Draft</button></td>
			<td><button id="send" onclick="sendEmail()">Send</button></td>
		</tr>
	<?php endif;

	if ($type == "inbox"): 
		$query = "SELECT * FROM emails INNER JOIN users ON from_user_id = user_id WHERE to_user_id = '{$_COOKIE['user_id']}'";
		$result = mysqli_query($connect, $query);
		?><tr>
			<td>Check</td>
			<td>Name</td>
			<td>Subject</td>
		</tr><?php
		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><input type="checkbox" name="chkbx[]" value="<?php $row['email_id']; ?>"></td>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['subject']; ?></td>
				</tr>
				<?php
			}
		}
	endif;

	if ($type == "sent"): 
		$query = "SELECT * FROM emails INNER JOIN users ON to_user_id = user_id WHERE from_user_id = '{$_COOKIE['user_id']}'";
		$result = mysqli_query($connect, $query);
		?><tr>
			<td>Check</td>
			<td>Name</td>
			<td>Subject</td>
		</tr><?php
		if ($result->num_rows > 0):
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><input type="checkbox" name="chkbx[]" value="<?php $row['email_id']; ?>"></td>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['subject']; ?></td>
				</tr>
				<?php
			}
		endif;
	endif; 

endif;

?>