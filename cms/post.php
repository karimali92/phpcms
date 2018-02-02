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

			$sql_stm = "SELECT * FROM posts WHERE id='$_GET[id]'";

			$sql_query = mysqli_query($conn,$sql_stm);

			while($rows = mysqli_fetch_assoc($sql_query)){
				echo '<div class="panel panel-default">
					<div class="panel panel-body">

						<div class="panel panel-header">
							<h2>'.$rows['title'].'</h2>
						</div>
					
						<img src="'.$rows['image'].'" width="100%">
						<p>'.$rows['description'].'</p>
						
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