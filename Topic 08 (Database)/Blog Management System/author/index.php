<!DOCTYPE html>
<html>
<head>
	<title>Author Dashboard</title>
	<style type="text/css">
		#header{
			background-color: steelblue;
			padding: 10px;
			height: auto;
			text-align: center;
			border-radius: 10px;
			border: 2px solid darkred;
		}

		table tr th{
			background-color: blue;
			color: white;
		}
		body{
			font-family: cursive;
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
			<h1>Author Dashborad</h1>
			<hr />
			<h5>Welcome Author [ 
				<?php 
					echo $_SESSION['user']['full_name'];
				?>

			]</h5>
			<a href="../logout_users.php">Logout</a>
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
					if($posts->num_rows > 0 && $_SESSION['user']['user_id'] == $_SESSION['user']['user_id'])
					{
						while($post = mysqli_fetch_assoc($posts))
						{

						if (isset($post['user_role_id']) && $post['user_role_id'] == $post['added_by_user_role_id']) {

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
	</center>
	<script type="text/javascript">
		function deletePost(obj){

			 var flag = confirm("Do you want delete this record");
			 if(flag)
			 {
			 	window.location = "post_process.php?action=delete_post&post_id="+obj.getAttribute("post_id");
			 }
		}
	</script>

</body>
</html>