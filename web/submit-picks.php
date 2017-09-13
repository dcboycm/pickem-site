<?php
  include('session.php');
  include("./include/config.php");

  // get the variables from the make-picks page
  $myusername = $_SESSION['login_user'];
  $selectedTeams = $_POST['selectedTeamId'];
  $tiebreakerPoints = $_POST['tiebreaker'];
  $week_number = $_SESSION["week_number"];

  $result = pg_query($conn, "SELECT id FROM users WHERE email = '$myusername';");
  $userId = pg_fetch_row($result);

  $insertedPick = pg_query($conn, "INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('$myusername', '$selectedTeams[0]', '$selectedTeams[1]', '$selectedTeams[2]', '$selectedTeams[3]', '$selectedTeams[4]', '$tiebreakerPoints', false, '$week_number');");
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
          <li class=""><a href="all-picks.php"><i class="glyphicon glyphicon-th"></i>Everyone's Picks</a></li>
          <!-- <li class=""><a href="#"><i class="glyphicon glyphicon-envelope"></i>Contact Us</a></li> -->
        </ul>
        <ul class="nav navbar-nav pull-right ">
          <li><a href="logout.php">Log Out</a></li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


    <section id="submitted">
      <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                  <h1>Thanks for submitting a sheet!</h1>
                  <table class="table">
                    <thead>
                      <tr>
                        <th><?php echo $myusername; ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $i = 0;
                        foreach ($selectedTeams as $selectedTeam) {
                          $favNameResult = pg_query($conn, "SELECT fav_name FROM team WHERE id = $selectedTeam;");
                          $team_fav_name = pg_fetch_row($favNameResult);
                          echo "<tr>";
                          echo "<td>{$team_fav_name[0]}</td>";
                          echo "</tr>";
                          $i++;
                        }
                       ?>
                      <tr>
                        <td><?php echo $tiebreakerPoints; ?> pts.</td>
                      </tr>
                    </tbody>
                  </table>
    	             <a href="https://www.paypal.me/CurtisMiller"><img src=".\images\paypal.png" style="width:25px;height:25px;"/></a>
                   <a href="home-page.php" class="btn btn-custom btn-lg btn-block">Home</a>
                   <a href="https://venmo.com/Curtis-Miller-6"><img src=".\images\venmo.png" style="width:25px;height:25px;"/></a>
                </div>
            </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="https://nm373.infusionsoft.com/app/webTracking/getTrackingCode"></script>
  </body>
</html>
