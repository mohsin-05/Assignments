<?php

mysqli_report(MYSQLI_REPORT_OFF);
$connection = mysqli_connect("localhost", "root", "", "blog_management_system");
if (mysqli_connect_error()) {
	die("<h1>Database Connection Failed!...</h1>");
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "search") {
	$query = "SELECT * FROM posts WHERE post_description RLIKE '".$_REQUEST['search']."'";
	$result = mysqli_query($connection, $query);
	
	if ($result->num_rows > 0 && $_REQUEST['search'] != "") {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p style='color:blue'><span onclick='showRecord(".$row['post_id'].")'>".$row['post_description']."</span></p>";
		}
	}
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show") {
	$query = "SELECT * FROM posts WHERE post_id = '".$_REQUEST['show']."'";
	$result = mysqli_query($connection, $query);
	
	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {?>

			<table border="2" cellpadding="15" style="text-align: center;">
				<tr>
					<th>Post ID</th>
					<td><?php echo $row['post_id']; ?></td>
				</tr>
				<tr>
					<th>Added by User Role ID</th>
					<td><?php echo $row['added_by_user_role_id']; ?></td>
				</tr>
				<tr>
					<th>Post Title</th>
					<td><?php echo $row['post_title']; ?></td>
				</tr>
				<tr>
					<th>Post Description</th>
					<td><?php echo $row['post_description']; ?></td>
				</tr>
				<tr>
					<th>Is Active</th>
					<td><?php echo $row['is_active']; ?></td>
				</tr>
			</table>
		<?php
		}
	}
}

?>