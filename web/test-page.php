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
    <title>Pickem Site - Make Picks</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/stylesheets/main.css" />
  </head>
  <body>

    <h1>Test Page for testing things.</h1>

    <table class="table">
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
      <tr>
        <?php
          foreach ($picks as $pick) {
            echo "<td>$pick['user_id']</td>";
          }
        ?>
        <td>WAS</td>
        <td>NE</td>
        <td>KC</td>
        <td>CAR</td>
        <td>MIN</td>
        <td>45 pts.</td>
        <td>True</td>
      </tr>
    </table>

  </body>
</html>
