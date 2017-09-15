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
            <th>Pick 1</th>
            <th>Pick 2</th>
            <th>Pick 3</th>
            <th>Pick 4</th>
            <th>Pick 5</th>
            <th>Tiebreaker</th>
            <th>Paid</th>
          </tr>
        </thead>";
        echo "<tbody>";
            $i = 0;
            foreach ($picks as $pick) {
              echo "<tr>$pick[user_id]</tr>";
              echo "<tr>$pick[pick_1]</tr>";
              echo "<tr>$pick[pick_1]</tr>";
              echo "<tr>$pick[pick_1]</tr>";
              echo "<tr>$pick[pick_1]</tr>";
              echo "<tr>$pick[pick_1]</tr>";
              echo "<tr>$pick[tiebreaker]</tr>";
              echo "<tr>$pick[paid]</tr>";
              $i++;
            }
        echo "</tbody>";
      echo "</table>";

    ?>

  </body>
</html>
