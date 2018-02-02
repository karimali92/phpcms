<?php
	include 'include/db.php';

	if (isset($_GET['edit_id'])) {
		# code...
		$sql_edit = "SELECT * FROM comment WHERE id = '$_GET[edit_id]'";
		$sql_run = mysqli_query($conn,$sql_edit);

		while ($row = mysqli_fetch_array($sql_run)) {
			# code...
			$name = $row['name'];
			$email = $row['email'];
			$subject = $row['subject'];
			$country = $row['country'];
			$comments = $row['comments'];
			if($row['gender'] == 'male'){
				$selected_male = 'selected';
				$selected_female = '';
			}else{
				$selected_female = 'selected';
				$selected_male = '';
			}
		}
	}else{
			$name = '';
			$email = '';
			$subject = '';
			$country = '';
			$comments = '';
			$selected_male = '';
			$selected_female = '';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>New Bootstrap Form</title>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Submit Form</h1>

		<form class="form-horizontal" action="form_process.php" method="post" role="form">
			<div class="form-group">
				<label for="name" class="control-label col-sm-2">Name *</label>
				<div class="col-sm-5">
					<input type="text" id="name" value="<?php echo $name; ?>" class="form-control" placeholder="Full Name" name="name" required>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-sm-2">Email Address *</label>
				<div class="col-sm-5">
					<input type="email" id="email" value="<?php echo $email; ?>" class="form-control" name="email" placeholder="Email Address" required>
				</div>
			</div>
			<div class="form-group">
				<label for="subject" class="control-label col-sm-2">Subject *</label>
				<div class="col-sm-5">
					<input type="text" id="subject" value="<?php echo $subject; ?>" class="form-control" name="subject" placeholder="Enter Your Subject" required>
				</div>
			</div>
			<div class="form-group">
				<label for="gender" class="control-label col-sm-2">Gender *</label>
				<div class="col-sm-2">
					<select class="form-control" name="gender" required>
						<option value="">Your Gender</option>
						<option value="male" <?php echo $selected_male; ?> >Male</option>
						<option value="female"<?php echo $selected_female;?> >Female</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="skills" class="control-label col-sm-2">Skills</label>
				<div class="col-sm-5">
					<label class="checkbox-inline"><input type="checkbox" name="skill1">HTML</label>
					<label class="checkbox-inline"><input type="checkbox" name="skill2">CSS</label>
					<label class="checkbox-inline"><input type="checkbox" name="skill3">Javasript</label>
					<label class="checkbox-inline"><input type="checkbox" name="skill4">PHP</label>
				</div>
			</div>
			<div class="form-group">
				<label for="country" class="control-label col-sm-2">Country *</label>
				<div class="col-sm-2">
					<select class="form-control" name="country" required>
						<option value="">Your Country</option>
						<?php 
							$sql_countries = "SELECT * FROM countries";
							$sql_run_c = mysqli_query($conn,$sql_countries);

							while ($row = mysqli_fetch_array($sql_run_c)) {
								# code...
								if($country == $row['country_code']){
									$selected = 'selected';
								}else{
									$selected = '';
								}
								echo '<option '.$selected.' value="'.$row['country_code'].'">'.$row['country_name'].'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="comment" class="control-label col-sm-2">Comment</label>
				<div class="col-sm-5">
					<textarea id="subject" row="8" class="form-control" name="comment" placeholder="Enter Your Comment"><?php echo $comments; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"></label>
				<div class="col-sm-5">
					<input type="submit" class="form-control" name="submit_form" value="Submit form">
				</div>
			</div>
			
		</form>

	</div>
</body>
</html>