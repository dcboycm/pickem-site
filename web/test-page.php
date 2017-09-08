<?php
  include('session.php');
  include('./include/config.php');

  $myusername = $_SESSION['login_user'];
  $firstname = $_SESSION['first_name'];
  $lastname = $_SESSION['last_name'];

  $result = pg_query($conn, "select nickname from users where email = '$myusername';");
  $nickname = pg_fetch_row($result);

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
      $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday','Thursday','Friday', 'Saturday');
      $dayofweek = date('w', strtotime('2017-09-07'));
      echo "$days[$dayofweek]";
      echo "$time";
      $result = pg_query($conn, "select * from weekly_matches where week_number = '$week_number' and match_date = '2017-09-07' order by match_date;");
      echo "
      <table class="table center">
        <thead>
          <h2>$days[$dayofweek]</h2>
          <tr>
            <th>Select</th>
            <th>Favorite</th>
            <th>Spread</th>
            <th>Underdog</th>
            <th>Select</th>
          </tr>
        </thead>
      ";
      include('./component/table_data.php');
      echo "
          </table>
      ";
    ?>

  </body>
</html>
