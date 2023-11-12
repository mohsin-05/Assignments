
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<style type="text/css">
		#header{
			background-color: steelblue;
			padding: 10px;
			height: auto;
			text-align: center;
			border-radius: 10px;
			border: 2px solid darkred;
		}

		table{
			border-collapse: collapse;
		}

		table tr td{
			background-color: white;
		}

		table tr th{
			background-color: blue;
			color: white;
		}
		body{
			font-family: sans-serif;
			background-color: lightcyan;
		}
		
		input{
			accent-color: red;
		}
		fieldset{
			border-radius: 10px;
			margin: 20px;
			border: 2px dotted blue;
		}
		p{
			padding: 5px;
			border-radius: 50px;
			width: 30%;
		}

		#edit{
			color: green;
			text-decoration: none;
		}

		#delete{
			color: red;
			text-decoration: none;
		}
		a{
			color: darkblue;
			text-decoration: none;
		}
		
	</style>
</head>
<body>
	<?php 
		require_once 'session_maintance.php';
		require_once 'manage_posts.php';

		$posts = getAllPosts();

	?>
	<center>
		<div id="header">
			<h1>Admin Dashborad</h1>
			<hr />
			<h5>Welcome Admin [ 
				<?php 
					echo $_SESSION['user']['full_name'];
				?>

			]</h5>
			<a href="../logout_users.php">Logout</a>
		</div>
		<div>
			<?php 
				if(isset($_GET['msg']))
				{
					?>
						<p style="background-color: <?php echo $_GET['color']; ?>">
							
							<?php echo $_GET['msg']; ?>
						</p>
					<?php
				}

			?>
		</div>
		<?php 
			//AddFormPost("post_process.php","POST");

			if(isset($_GET['post_id']))
			{
				EditFormPost("post_process.php","POST",$_GET['post_id']);
			}else{
				AddFormPost("post_process.php","POST");
			}

			
		?>
		<table border="1" width="100%">
				<tr>
					<th>Post ID</th>
					<th>Post Added By</th>
					<th>Post Title</th>
					<th>Post Description</th>
					<th>Actions</th>
				</tr>
				<?php 
					if($posts->num_rows > 0)
					{
						while($post = mysqli_fetch_assoc($posts))
						{

						
						?>
						<tr align="center">
							<td>
								<?php echo $post['post_id']; ?>		
							</td>
							<td>
								<?php 
								echo getUserFullNameByUserRoleId($post['added_by_user_role_id']); 
								?>
							</td>
							<td>
								<?php echo $post['post_title']; ?>
							</td>
							<td>
								<?php echo $post['post_description']; ?>
							</td>
							<td>
								<a href="index.php?post_id=<?php echo $post['post_id']; ?>">
									<span id="edit">Edit</span>
								</a>
								 | 
								<a href="javascript:void(0)" post_id="<?php echo $post['post_id']; ?>" onclick="deletePost(this)">
									<span id="delete">Delete</span> 
								</a>
								

							</td>
						</tr>
						<?php
						}

					}
					else
					{
						?>
							<tr align="center">
								<td colspan="5">
									No Posts Available 
								</td>
							</tr>
						<?php
					}

				?>
		</table>



		<?php
		require_once("../require/connection.php");
		$select_q = "SELECT `users`.`user_id`, `users`.`full_name` FROM `users`";
		$r = mysqli_query($connection, $select_q);

		?>


		<h3>User Records</h3>
		<table border="1" width="100%">
			<tr align="center">
				<th>User ID</th>
				<th>User Name</th>
				<th>User Logs</th>
			</tr>
			<?php
			while ($row = mysqli_fetch_array($r)) {
				?>
				<tr align="center">
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['full_name']; ?></td>
					<td>
						<a href="../logs.php?id=<?php echo $row['user_id']; ?>&&name=<?php echo $row['full_name']; ?>">View Logs</a>
						<a href="../logs2.php?id=<?php echo $row['user_id']; ?>&&name=<?php echo $row['full_name']; ?>"> | View File Logs</a>
					</td>
				</tr>

				<?php
			}
			?>
		</table>

	</center>
	<script type="text/javascript">
		function deletePost(obj){

			 var flag = confirm("Do you want to delete this record");
			 if(flag)
			 {
			 	window.location = "post_process.php?action=delete_post&post_id="+obj.getAttribute("post_id");
			 }
		}
	</script>
</body>
</html>