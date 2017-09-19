<?php
  include('session.php');
  include('./include/config.php');

  $myusername = $_SESSION['login_user'];
  $firstname = $_SESSION['first_name'];
  $lastname = $_SESSION['last_name'];
  $week_number = $_SESSION["week_number"];

  // $result = pg_query($conn, "select * from test_matches where user_id = '$myusername';");
  $result = pg_query($conn, "select user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker from test_matches where week = $week_number and paid = true;");
  $picks = pg_fetch_all($result);

  $result = pg_query($conn, "select winner from weekly_matches where week_number = $week_number;");
  $winners = pg_fetch_all($result);

  $result = pg_query($conn, "SELECT * FROM test_matches WHERE week = $week_number and paid = true;");
  $pickCount = pg_num_rows($result);
  $sheet = 5;
  $rollover = 133;
  $totalPot = (($sheet * $pickCount) + $rollover) - 5;

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
      <?php
        echo "<h1>Everyone's Picks - $today.</h1>";
        if ($totalPot < 1) {
          echo "<h2>Total Pot Size - $$rollover.</h2>";
        } else {
          echo "<h2>Total Pot Size - $$totalPot.</h2>";
        }
        foreach ($winners as $winner) {
          print($winner['winner']);
        }
      ?>
      <table class="table center">
        <tr>
          <th>Username</th>
          <th>Pick 1</th>
          <th>Pick 2</th>
          <th>Pick 3</th>
          <th>Pick 4</th>
          <th>Pick 5</th>
          <th>Tiebreaker</th>
        </tr>
          <?php
            if ($today == "Saturday" || $today == "Monday") {
              foreach ($picks as $pick) {
                echo "<tr>";
                $nicknameResult = pg_query($conn, "SELECT nickname FROM users WHERE email = '$pick[user_id]';");
                $nicknameFetched = pg_fetch_row($nicknameResult);
                echo "<td>{$nicknameFetched[0]}</td>";
                $favNameResult = pg_query($conn, "SELECT fav_name FROM team WHERE id = $pick[pick_1];");
                $team_fav_name = pg_fetch_row($favNameResult);
                $pickWin = null;
                foreach ($winners as $winner) {
                  if ($pick[pick_1] == $winner[0]) {
                    $pickWin = true;
                    break;
                  } else {
                    $pickWin = false;
                  }
                }
                if ($pickWin == null) {
                  echo "<td>{$team_fav_name[0]}</td>";
                } else if ($pickWin = true) {
                  echo "<td style='background-color: rgba(0, 167, 0, 0.5)'>{$team_fav_name[0]}</td>";
                } else {
                  echo "<td style='background-color: rgba(167, 0, 0, 0.5)'>{$team_fav_name[0]}</td>";
                }
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
              }
              echo "</tr>";
            } else {

            }
          ?>
      </table>
    </div>

  </body>
</html>
