<html>
  <head>
      <title>Simple Form</title>
  </head>

  <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td>Subject</td>
          <td><input type="text" name="subject"></td>
        </tr>
        <tr>
          <td>Your Gender</td>
        </tr>
        <tr>
          <td>Male:</td>
          <td><input type="radio" name="gender" value="male"></td>
        </tr>
        <tr>
          <td>Female:</td>
          <td><input type="radio" name="gender" value="female"></td>
        </tr>
        <tr>
          <td>Other:</td>
          <td><input type="radio" name="gender" value="other"></td>
        </tr>
        <tr>
          <td>Skills</td>
          <td><input type="checkbox" name="skill1">: HTML</td>
          <td><input type="checkbox" name="skill2">: PHP</td>
          <td><input type="checkbox" name="skill3">: CSS</td>
          <td><input type="checkbox" name="skill4">: Javascript</td>
        </tr>
        <tr>
          <td>Country:</td>
          <td><select name="country">
                <option name="none" selected="true">Select a Country</option>
                <option name="egypt">Egypt</option>
                <option name="usa">USA</option>
                <option name="ksa">KSA</option>
              </select></td>
        </tr>
        <tr>
          <td>Comments</td>
          <td><textarea name="comments"></textarea></td>
        </tr>
        <tr>
          <td><input type="hidden" value="yes" name="validate"></td>
          <td><input type="submit"></td>
        </tr>
      </table>
    </form>
  </body>

</html>
<?php
if (isset($_POST['validate'])) {
  # code...
  echo "Name value is $_POST[name] <br>";
  echo "Email value is $_POST[email] <br>";
  echo "Subject value is $_POST[subject] <br>";
  echo "Comment value is $_POST[comments] <br>";
}else {
  # code...
    echo "sorry, there is no data to display <br>";
}
?>
