<?php
  $days = array();
  $days[0] = "Sunday";
  $days[1] = "Monday";
  $days[2] = "Tuesday";
  $days[3] = "Wednesday";
  $days[4] = "Thursday";
  $days[5] = "Friday";
  $days[6] = "Saturday";

  echo $days[4];
  echo "<br>";

  $months = array('Jan','Feb','March','April','May','June');

  echo $months[3];
  echo "<br>";

  $numbers = array('1st'=>'first','2nd'=>'second','3rd'=>'third');

  echo $numbers['2nd'];
  echo "<br>";
  $numbers[1] = 'Fourth';
  echo $numbers[1];
  echo "<br>";
  // Multidemintional Array

  $employees = array('employee1'=>
  array('name'=>'Karim', 'job'=>'Web Developer', 'skills'=>'PHP,HTML,CSS,Node.js'),
  'employee2'=>
  array('name'=>'Ahmed', 'job'=>'Web Designer', 'skills'=>'Photoshop,HTML,CSS'));

  echo $employees['employee2']['name'];

  echo "<br><br><br>";

  for ($i=0; $i < 7; $i++) {
    # code...
    echo $days[$i].'<br>';
  }
  echo "<br><br><br>";
  foreach ($months as $month) {
    # code...
    echo $month.'<br>';
  }
  echo "<br><br><br>";
  foreach ($numbers as $key => $number) {
    # code...

    echo $key.' => '.$number.'<br>';
  }

  echo "<br><br><br>";

  foreach ($employees as $employee) {
    # code...
    foreach ($employee as $key => $data) {
      # code...

      echo $key.' : '.$data.'<br>';
    }
    echo '<br>';

    $job = array_column($employees, 'job', 'name');
    echo '<pre>';
    print_r($job);
    echo '</pre>';

    $nums = array(1,7,9,18,25);

    echo array_sum($nums);

    echo '<br>';

    echo array_product($nums);
  }

?>
