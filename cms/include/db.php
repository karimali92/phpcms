<?php
	$server = 'localhost';
	$db_user = 'db_user';
	$db_pass= '123456';
	$db_name = 'cms_system';

	$conn = mysqli_connect($server,$db_user,$db_pass,$db_name);

	if (!$conn) {
		# code...
		die('Connection failed '.mysqli_connect_error());
	}
?>