<?php
  include('session.php');
  include('./include/config.php');

  $myusername = $_SESSION['login_user'];
  $firstname = $_SESSION['first_name'];
  $lastname = $_SESSION['last_name'];

  // $result = pg_query($conn, "select * from test_matches where user_id = '$myusername';");
  $result = pg_query($conn, "select * from test_matches where user_id = 'andresleyva20@yahoo.com';");
  $picks = pg_fetch_result($result);

  $tz = 'America/Phoenix';
  $timestamp = time();
  $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
  $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
  $today = $dt->format('l');
  $time = $dt->format('H:i:s');
  $week_number = $_SESSION["week_number"];
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
      foreach ($picks as $pick) {
        echo "$pick";
      }
    ?>

  </body>
</html>
