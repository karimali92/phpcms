<?php
	include 'include/db.php';

	if(isset($_POST['submit_form'])){

		$date = date('Y-m-d h:i:s');

		$sql_stm = "INSERT INTO comments (name, email, subject, comment, date) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[comment]', '$date')";

		$sql_query = mysqli_query($conn,$sql_stm);
	}
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
			
				<div class="page-header">
					<h2>Contact us</h2>
				</div>
				

				<form class="form-horizontal" action="contact.php" method="post" role="form">
					<div class="form-group">
						<label for="name" class="control-label col-sm-3">Name *</label>
						<div class="col-sm-8">
							<input type="text" id="name" class="form-control" placeholder="Full Name" name="name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-sm-3">Email Address *</label>
						<div class="col-sm-8">
							<input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="control-label col-sm-3">Subject *</label>
						<div class="col-sm-8">
							<input type="text" id="subject" class="form-control" name="subject" placeholder="Enter Your Subject" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="comment" class="control-label col-sm-3">Comment</label>
						<div class="col-sm-8">
							<textarea id="subject" rows="6" class="form-control" name="comment" placeholder="Enter Your Comment"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3"></label>
						<div class="col-sm-8">
							<input type="submit" class="form-control btn btn-danger" name="submit_form" value="Submit form">
						</div>
					</div>
					
				</form>

			
			
		</section>
		<?php include 'include/sidebar.php' ?>
	</article>
	<div style="width: 50px;height: 50px;"></div>
	</div>
	<?php include 'include/footer.php' ?>
</body>
</html>