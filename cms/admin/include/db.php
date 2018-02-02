<?php
  $server = "localhost";
  $user = "db_user";
  $password = "123456";
  $database = "php_course";

  $conn = mysqli_connect($server,$user,$password,$database);

  if(!$conn){
    die('Connection failed'.mysqli_connect_error());
  }
?>
