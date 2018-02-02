<?php
	include 'include/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>New CMS System</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>
	<?php include 'include/header.php';?>
	<div class="container">
	<article class="row">
		<section class="col-lg-8">
			<?php

				$post_query = "SELECT * FROM posts";

				$post_sql = mysqli_query($conn,$post_query);

				while ($rows = mysqli_fetch_array($post_sql)) {
					# code...
					# 
					echo '<div class="panel panel-success">
							<div class="panel panel-heading">
									<h3><a href="post.php?id='.$rows['id'].'">'.$rows['title'].'</a></h3>
							</div>
							<div class="panel panel-body">

								<div class="col-lg-4">
									<img src="'.$rows['image'].'" width="100%">
								</div>
								<div class="col-lg-8">
									<p>'.substr($rows['description'], 0, 370).' ........... </p>
								</div>
								<a href="post.php?id='.$rows['id'].'" class="btn btn-success">Read More</a>
							</div>
						</div>';
					
				}
			?>
			
		</section>
			<?php include 'include/sidebar.php' ?>
	</article>
	</div>
	<div style="width: 50px;height: 50px;"></div>
	<?php include 'include/footer.php' ?>
</body>
</html>