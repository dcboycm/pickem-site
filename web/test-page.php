<?php
  include('session.php');
  include('./include/config.php');

  $myusername = $_SESSION['login_user'];
  $firstname = $_SESSION['first_name'];
  $lastname = $_SESSION['last_name'];
  $week_number = $_SESSION["week_number"];

  // $result = pg_query($conn, "select * from test_matches where user_id = '$myusername';");
  $result = pg_query($conn, "select user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid from test_matches where user_id = '$myusername' and week = '$week_number';");
  $picks = pg_fetch_all($result);

  $tz = 'America/Phoenix';
  $timestamp = time();
  $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
  $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
  $today = $dt->format('l');
  $time = $dt->format('H:i:s');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test page</title>
  </head>
  <body>

    <h1>Test Page for testing things.</h1>

    <?php
      echo "$myusername";
      print_r($picks);

      echo "<table class='table'>";
        echo "<thead>
          <tr>
            <th>Username</th>
          </tr>
          <tr>
            <th>Pick 1</th>
          </tr>
          <tr>
            <th>Pick 2</th>
          </tr>
          <tr>
            <th>Pick 3</th>
          </tr>
          <tr>
            <th>Pick 4</th>
          </tr>
          <tr>
            <th>Pick 5</th>
          </tr>
          <tr>
            <th>Tiebreaker</th>
          </tr>
          <tr>
            <th>Paid</th>
          </tr>
        </thead>";
        echo "<tbody>";
            $i = 0;
            foreach ($picks as $pick) {
              echo "<tr>$pick[$i]</tr>";
              $i++;
            }
        echo "</tbody>";
      echo "</table>";

    ?>

  </body>
</html>
