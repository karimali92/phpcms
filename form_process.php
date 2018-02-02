<?php

	include 'include/db.php';
	if (isset($_POST['submit_form'])) {
		# code...
		$name = strip_tags($_POST['name']);
		$email = strip_tags($_POST['email']);
		$subject = htmlspecialchars($_POST['subject']);
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		$comment = trim(htmlspecialchars($_POST['email']));

		if(empty($_POST['skill1'])){
			$skill1 = '';
		}else{
			$skill1 = 'html';
		}
		if(empty($_POST['skill2'])){
			$skill2 = '';
		}else{
			$skill2 = 'css';
		}
		if(empty($_POST['skill3'])){
			$skill3 = '';
		}else{
			$skill3 = 'php';
		}
		if(empty($_POST['skill4'])){
			$skill4 = '';
		}else{
			$skill4 = 'javascript';
		}

		$sql_command = "INSERT INTO comment (name, email, subject, gender, skill1, skill2, skill3, skill4, country, comments) values ('$name', '$email', '$subject', '$gender', '$skill1', '$skill2', '$skill3', '$skill4', '$country', '$comment')";

		$sql_process = mysqli_query($conn,$sql_command);

	}else{

		echo "Go to the form !";
	}
?>