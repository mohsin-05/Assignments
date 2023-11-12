<?php

mysqli_report(MYSQLI_REPORT_OFF);
$connection = mysqli_connect("localhost", "root", "", "ajax_crud");
if (mysqli_connect_error()) {
	die("<h1>Database Connection Failed!...</h1>");
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_form") {?>
	<fieldset>
		<legend>Add Post</legend>
		<table>
			<tr>
				<th>Title: </th>
				<td><input type="text" id="title"></td>
			</tr>
			<tr>
				<th>Summary: </th>
				<td><textarea id="summary" cols="20" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Description: </th>
				<td><textarea id="description" cols="20" rows="5"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button id="add" onclick="addPost()">Add Post</button>
					<button id="reset" onclick="reset()">Reset</button>
				</td>
			</tr>
		</table>
	</fieldset>
<?php
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "add_post" && $_REQUEST['title'] != "" && $_REQUEST['summary'] != "" && $_REQUEST['description'] != "") {
	$query = "INSERT INTO posts (title, summary, description) VALUES ('{$_REQUEST['title']}', '{$_REQUEST['summary']}', '{$_REQUEST['description']}')";
	$result = mysqli_query($connection, $query);

	if ($result) {
		echo "<p style='color:green'>Post Added Successfully</p>";
	}
}





if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_posts") {

	$query = "SELECT * FROM posts ORDER BY post_id DESC";
	$result = mysqli_query($connection, $query);
	
	if ($result->num_rows > 0) {
		$count = 0;
		?>
		<table border="2" cellpadding="15" style="text-align: center;">
			<tr>
				<th>S.No</th>
				<th>Title</th>
				<th>Summary</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		<?php
			while ($row = mysqli_fetch_assoc($result)) {?>
				<tr>
					<td><?php echo ++$count; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['summary']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td>
						<button id="edit" onclick="editRecord(<?php echo $row['post_id']; ?>)">Edit</button>
						<button id="delete" onclick="deleteRecord(<?php echo $row['post_id']; ?>)">Delete</button>
					</td>
				</tr>
		<?php
			}
		?>
		</table>
		<?php
	}
}





if (isset($_REQUEST['action']) && $_REQUEST['action'] == "edit_record") {

	$query = "SELECT * FROM posts WHERE post_id = ".$_REQUEST['post_id'];
	$result = mysqli_query($connection, $query);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$update_query = "UPDATE posts SET title = '".$row['title']."', summary = '".$row['summary']."', description = '".$row['description']."' WHERE post_id = ".$_REQUEST['post_id'];	
		?>
		<fieldset>
			<legend>Update User</legend>
			<table>
				<tr>
					<th>Title: </th>
					<td><input type="text" id="title" value="<?php echo $row['title']; ?>"></td>
				</tr>
				<tr>
					<th>Summary: </th>
					<td><textarea id="summary" cols="20" rows="5"><?php echo $row['summary']; ?></textarea></td>
				</tr>
				<tr>
					<th>Description: </th>
					<td><textarea id="description" cols="20" rows="5"><?php echo $row['description']; ?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button id="add" onclick="updateRecord(<?php echo $row['post_id']; ?>)">Update User</button>
						<button id="reset" onclick="reset()">Reset</button>
					</td>
				</tr>
			</table>
		</fieldset>
		<?php

	}
}





if (isset($_REQUEST['action']) && $_REQUEST['action'] == "update_record" && $_REQUEST['title'] != "" && $_REQUEST['summary'] != "" && $_REQUEST['description'] != "") {
	$query = "UPDATE posts SET title = '{$_REQUEST['title']}', summary = '{$_REQUEST['summary']}', description = '{$_REQUEST['description']}' WHERE post_id = ".$_REQUEST['post_id'];
	$result = mysqli_query($connection, $query);

	if ($result) {
		echo "<p style='color:green'>Post Updated Successfully</p>";
	}
}





if (isset($_REQUEST['action']) && $_REQUEST['action'] == "delete_record") {
	$query = "DELETE FROM posts WHERE post_id = ".$_REQUEST['post_id'];
	$result = mysqli_query($connection, $query);

	if ($result) {
		echo "<p style='color:green'>Record Deleted Successfully</p>";
	}
}





if (isset($_REQUEST['action']) && $_REQUEST['action'] == "search") {
	$query = "SELECT * FROM posts WHERE title RLIKE '".$_REQUEST['search']."'";
	$result = mysqli_query($connection, $query);
	
	if ($result->num_rows > 0 && $_REQUEST['search'] != "") {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p style='color:blue' onclick='showRecord(".$row['post_id'].")'>".$row['title']."</p>";
		}
	}
}




if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show") {
	$query = "SELECT * FROM posts WHERE post_id = '".$_REQUEST['show']."'";
	$result = mysqli_query($connection, $query);
	
	if ($result->num_rows > 0) {
		$count = 0;
		while ($row = mysqli_fetch_assoc($result)) {?>

			<table border="2" cellpadding="15" style="text-align: center;">
				<tr>
					<th>S.No</th>
					<th>Title</th>
					<th>Summary</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
				<tr>
					<td><?php echo ++$count; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['summary']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td>
						<button id="edit" onclick="editRecord(<?php echo $row['post_id']; ?>)">Edit</button>
						<button id="delete" onclick="deleteRecord(<?php echo $row['post_id']; ?>)">Delete</button>
					</td>
				</tr>
			</table>
		<?php
		}
	}
}

?>