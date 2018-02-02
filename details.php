<?php include 'include/db.php'; ?>
<!DOCTYPE html>
<html>
  <head>
      <title>Retreive data from Database</title>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  </head>

  <body>
  	<div class="container">

  		<?php
  			if(isset($_GET['user_id'])){

  				$sql = "SELECT * FROM comment WHERE id ='$_GET[user_id]'";
	  			$sql_run = mysqli_query($conn,$sql);
	  			while ($row = mysqli_fetch_array($sql_run)) {
	  				# code...
	  				echo '
	  				<div class="jumbotron">
			  			<h1>Details Page</h1>
			  			<p>Lets complete details</p>
			  			<a class="btn btn-warning" href="new_form.php?edit_id='.$row['id'].'">Edit '.$row['name'].'</a>
			  		</div>
	  				<div class="row">
			  			<strong class="col-sm-3">Name: </strong>
			  			<div class="col-sm-3">'.$row['name'].'</div>
			  		</div>
			  		<div class="row">
			  			<strong class="col-sm-3">Email Address: </strong>
			  			<div class="col-sm-3">'.$row['email'].'</div>
			  		</div>
			  		<div class="row">
			  			<strong class="col-sm-3">Subject: </strong>
			  			<div class="col-sm-3">'.$row['subject'].'</div>
			  		</div>
			  		<div class="row">
			  			<strong class="col-sm-3">Gender: </strong>
			  			<div class="col-sm-3">'.$row['gender'].'</div>
			  		</div>
			  		<div class="row">
			  			<strong class="col-sm-3">Skills: </strong>
			  			<div class="col-sm-3"></div>
			  		</div>
			  		<div class="row">
			  			<strong class="col-sm-3">Country: </strong>';

			  			$sql_countries = "SELECT * FROM countries WHERE country_code = '$row[country]'";
			  			$sql_run_c = mysqli_query($conn,$sql_countries);

			  			while ($row_c = mysqli_fetch_assoc($sql_run_c)) {
			  				# code...
			  				echo '<div class="col-sm-3">'.$row_c['country_name'].'</div>';
			  			}
			  			
			  		echo '</div>';
	  			}

  			}
  			
  		?>
  		
  	</div>
  </body>
  </html>