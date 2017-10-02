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

    <nav class="navbar navbar-default center">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img alt="Brand" src="images/brand_logo.png">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class=""><a href="home-page.php"><i class="glyphicon glyphicon-home"></i>Home</a></li>
            <li class="active"><a href="make-picks.php"><i class="glyphicon glyphicon-file"></i>Make Picks</a></li>
            <li class=""><a href="my-picks.php"><i class="glyphicon glyphicon-user"></i>My Picks</a></li>
            <li class=""><a href="all-picks.php"><i class="glyphicon glyphicon-th"></i>Everyone's Picks</a></li>
            <!-- <li class=""><a href="#"><i class="glyphicon glyphicon-envelope"></i>Contact Us</a></li> -->
          </ul>
          <ul class="nav navbar-nav pull-right ">
            <li style="padding-top: 15px; padding-right: 15px; color: #777;">Welcome, <?php echo $nickname[0] ?></li>
            <li style="padding-top: 15px; color: #777;">  |</li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  <div class="center" id="make-picks">
    <h1>Football Pool 2017-2018</h1>
    <h2>Week 4 - September 28th - October 2nd</h2>
    <form action="submit-picks.php" method="post" onsubmit="return submitSheet();">
      <table class="table center">
        <thead>
          <h2>Thursday</h2>
          <tr>
            <th>Select</th>
            <th>Favorite</th>
            <th>Spread</th>
            <th>Underdog</th>
            <th>Select</th>
          </tr>
        </thead>
      <?php
      $result = pg_query($conn, "select * from weekly_matches where week_number = '$week_number' and match_date = '2017-09-28' order by match_date;");
        if ($today == "Thursday" && $time >= "17:25:00") {
          include('./component/thursday_data.php');
        } else if ($today == "Friday" || $today == "Saturday") {
          include('./component/thursday_data.php');
        } else {
          include('./component/table_data.php');
        }
      ?>
      </table>

      <table class="table center">
        <thead>
          <h2>Sunday</h2>
          <tr>
            <th>Select</th>
            <th>Favorite</th>
            <th>Spread</th>
            <th>Underdog</th>
            <th>Select</th>
          </tr>
        </thead>
      <?php
      $result = pg_query($conn, "select * from weekly_matches where week_number = '$week_number' and match_date = '2017-10-01' order by match_date;");
        include('./component/table_data.php');
      ?>
      </table>

      <table class="table center">
        <thead>
          <h2>Monday</h2>
          <tr>
            <th>Select</th>
            <th>Favorite</th>
            <th>Spread</th>
            <th>Underdog</th>
            <th>Select</th>
          </tr>
        </thead>
      <?php
      $result = pg_query($conn, "select * from weekly_matches where week_number = '$week_number' and match_date = '2017-10-02' order by match_date;");
      $week_number = $_SESSION["week_number"];
      $rows = pg_fetch_all($result);
      $i = 0;
      $j = 0;
      echo "<tbody>";
        foreach ($rows as $row) {
          $result = pg_query($conn, "select distinct match_date from weekly_matches where week_number = '$week_number';");
          $totalDays = pg_fetch_row($result);
            echo "<tr>";
            // Need an if check for who is the FAVORITE, this will determine who goes first in the list
            $result = pg_query($conn, "select fav_name from team where id = {$row['team_home']};");
            $home_fav = pg_fetch_row($result);
            $result = pg_query($conn, "select fav_name from team where id = {$row['team_away']};");
            $away_fav = pg_fetch_row($result);
            if ($row[team_home] == $row[team_fav]) {
              echo "<td><input class='single-checkbox' type='checkbox' name='selectedTeamId[]' value='{$row[team_home]}'><br></td>";
              echo "<td><img src='./images/team_icons/{$home_fav[0]}.png'></img>@{$home_fav[0]}</td>";
              echo "<td>{$row['spread']}</td>";
              echo "<td><img src='./images/team_icons/{$away_fav[0]}.png'></img>{$away_fav[0]}</td>";
              echo "<td><input class='single-checkbox' type='checkbox' name='selectedTeamId[]' value='{$row[team_away]}'><br></td>";
            } else {
              echo "<td><input class='single-checkbox' type='checkbox' name='selectedTeamId[]' value='{$row[team_away]}'><br></td>";
              echo "<td><img src='./images/team_icons/{$away_fav[0]}.png'></img>{$away_fav[0]}</td>";
              echo "<td>{$row['spread']}</td>";
              echo "<td><img src='./images/team_icons/{$home_fav[0]}.png'></img>@{$home_fav[0]}</td>";
              echo "<td><input class='single-checkbox' type='checkbox' name='selectedTeamId[]' value='{$row[team_home]}'><br></td>";
            }
            echo "</tr>";
          $i++;
        }
      echo "</tbody>";
      ?>
      </table>

        <div class="tiebreaker">
          <h2>Tie-Breaker Points: <?php echo "WAS/KC" ?></h2>
        </div>
        <div style="text-align: center;" class="tiebreaker-points center">
          <input style="text-align: center;" type="text" name="tiebreaker" id="tiebreaker" placeholder="50">  pts.</input>
        </div>
      </div>

      <?php
        if ($today == "Tuesday" || $today == "Wednesday" || $today == "Thursday" || $today == "Friday" || $today == "Saturday") {
          echo "<div style='padding-top: 20px;'' class='center'>";
            echo "<input type='submit' id='btn-submit' class='btn btn-custom btn-lg btn-block' value='Submit'>";
          echo "</div>";
        } else if ($today == "Sunday" && $time <= "06:30:00") {
          echo "<div style='padding-top: 20px;'' class='center'>";
            echo "<input type='submit' id='btn-submit' class='btn btn-custom btn-lg btn-block' value='Submit'>";
          echo "</div>";
        } else {
          echo "<div style='padding-top: 20px;'' class='center'>";
            echo "<input type='submit' id='btn-submit' class='btn btn-custom btn-lg btn-block' disabled='disabled' value='Submit'>";
          echo "</div>";
        }
      ?>
  </form>

  </body>
</html>
