<?php

  if (isset($_POST['validate'])) {
    # code...
    echo "Email value is $_POST[login_email] <br>";
    echo "Password value is $_POST[login_password] <br>";
  }else {
    # code...
      echo "sorry, there is no data to display <br>";
  }

?>
