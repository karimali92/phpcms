<?php include 'include/db.php';
  
  if (isset($_GET['del_id'])) {
    # code...
    $sql_del = "DELETE FROM comment WHERE id = '$_GET[del_id]'";
    $sql_run = mysqli_query($conn,$sql_del);
  }
?>
<html>
  <head>
      <title>Retreive data from Database</title>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  </head>

  <body>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email Address</th>
        <th>Skills</th>
        <th>Country</th>
        <th>Access</th>
        <th>Delete</th>
      </thead>
      <tbody>
    <?php
      $sql = "SELECT * FROM comment";

      $run_sql = mysqli_query($conn,$sql);

      while ($rows = mysqli_fetch_array($run_sql)) {
        # code...

        echo '<tr>
        <td>'.$rows['id'].'</td>
        <td>'.$rows['name'].'</td>
        <td>'.$rows['email'].'</td>
        <td>'.$rows['skill1'].', '.$rows['skill2'].', '.$rows['skill3'].', '.$rows['skill4'].'</td>';

        $sql_countries = "SELECT * FROM countries WHERE country_code = '$rows[country]'";
              $sql_run_c = mysqli_query($conn,$sql_countries);

              while ($rows_c = mysqli_fetch_assoc($sql_run_c)) {
                # code...
                echo '<td>'.$rows_c['country_name'].'</td>';
              }
        echo '<td><a class="btn btn-info btn-xs" href="details.php?user_id='.$rows['id'].'"/>access</td>
        <td><a class="btn btn-danger btn-xs" href="index.php?del_id='.$rows['id'].'">delete</a></td>
        </tr>';
      }
     ?>
      </tbody>
    </table>
  </div>
  </body>

</html>
