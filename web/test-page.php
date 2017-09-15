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
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
      </tr>
      <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
      </tr>
      <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
      </tr>
    </table>

    <table class="table">
      <tr>
        <th>Username</th>
        <td>Pick 1</td>
        <td>Pick 2</td>
        <td>Pick 3</td>
        <td>Pick 4</td>
        <td>Pick 5</td>
        <td>Tiebreaker</td>
        <td>Paid</td>
      </tr>
      <tr>
        <td><?php echo "$myusername"; ?></td>
        <tr>WAS</tr>
        <tr>NE</tr>
        <tr>KC</tr>
        <tr>CAR</tr>
        <tr>MIN</tr>
        <tr>45 pts.</tr>
        <tr>True</tr>
      </tr>
    </table>

  </body>
</html>
