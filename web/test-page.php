<?php
  include('session.php');
  include('./include/config.php');

  $myusername = $_SESSION['login_user'];
  $firstname = $_SESSION['first_name'];
  $lastname = $_SESSION['last_name'];
  $week_number = $_SESSION["week_number"];

  // $result = pg_query($conn, "select * from test_matches where user_id = '$myusername';");
  $result = pg_query($conn, "select user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid from test_matches where week = '$week_number' and paid = true;");
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

    <div class="center" id="my-picks">
      <h1>My Picks</h1>
      <table class="table center">
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
              $nicknameResult = pg_query($conn, "SELECT nickname FROM users WHERE email = $pick[user_id];")
              $nicknameFetched = pg_fetch_row($nicknameResult);
              echo "<td>$nicknameFetched[0]</td>";
              $favNameResult = pg_query($conn, "SELECT fav_name FROM team WHERE id = $pick[pick_1];");
              $team_fav_name = pg_fetch_row($favNameResult);
              echo "<td>{$team_fav_name[0]}</td>";
              $favNameResult = pg_query($conn, "SELECT fav_name FROM team WHERE id = $pick[pick_2];");
              $team_fav_name = pg_fetch_row($favNameResult);
              echo "<td>{$team_fav_name[0]}</td>";
              $favNameResult = pg_query($conn, "SELECT fav_name FROM team WHERE id = $pick[pick_3];");
              $team_fav_name = pg_fetch_row($favNameResult);
              echo "<td>{$team_fav_name[0]}</td>";
              $favNameResult = pg_query($conn, "SELECT fav_name FROM team WHERE id = $pick[pick_4];");
              $team_fav_name = pg_fetch_row($favNameResult);
              echo "<td>{$team_fav_name[0]}</td>";
              $favNameResult = pg_query($conn, "SELECT fav_name FROM team WHERE id = $pick[pick_5];");
              $team_fav_name = pg_fetch_row($favNameResult);
              echo "<td>{$team_fav_name[0]}</td>";
              echo "<td>$pick[tiebreaker] pts.</td>";
              if ($pick[paid] == 't') {
                echo "<td>Paid</td>";
              } else {
                echo "<td>NOT Paid</td>";
              }
            }
          ?>
        </tr>
      </table>
    </div>

  </body>
</html>
