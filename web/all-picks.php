<?php
   include('session.php');
   include('./include/config.php');
   $myusername = $_SESSION['login_user'];
   $firstname = $_SESSION['first_name'];
   $lastname = $_SESSION['last_name'];
   $tz = 'America/Phoenix';
   $timestamp = time();
   $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
   $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
   $today = $dt->format('l');
   $hour = $dt->format('H:i:s');
   $result = pg_query($conn, "SELECT user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker FROM test_matches where week = 1 AND paid = true;");
   $paidMatches = pg_fetch_all($result);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pickem Site - Everyone's Picks</title>
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
            <li class=""><a href="make-picks.php"><i class="glyphicon glyphicon-file"></i>Make Picks</a></li>
            <li class="active"><a href="all-picks.php"><i class="glyphicon glyphicon-th"></i>Everyone's Picks</a></li>
            <!-- <li class=""><a href="#"><i class="glyphicon glyphicon-envelope"></i>Contact Us</a></li> -->
          </ul>
          <ul class="nav navbar-nav pull-right ">
            <li style="padding-top: 15px; padding-right: 15px; color: #777;">Welcome, <?php echo $firstname ?></li>
            <li style="padding-top: 15px; color: #777;">  |</li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="center" id="all-picks">
      <?php
      $result = pg_query($conn, "SELECT * FROM test_matches WHERE week = 1 and paid = true;");
      $pickCount = pg_num_rows($result);
      $sheet = 5;
      $totalPot = $sheet * $pickCount;
      if ($today == "Sunday" || $today == "Monday" || $today == "Tuesday") {
        echo "<h1>Everyone's Picks - $today.</h1>";
        echo "<h2>Total Pot Size - $$totalPot.</h2>";
        $i = 0;
        foreach ($paidMatches as $paidMatch) {
          echo "<table class='table col-1-5'>";
            echo "<thead>";
              echo "<tr>";
                echo "<th>$paidMatch[user_id]</th>";
              echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
              echo "<tr>";
              $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_1];");
              $fav_name = pg_fetch_row($result);
              echo "<td>$fav_name[0]</td>";
              echo "</tr>";
              echo "<tr>";
              $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_2];");
              $fav_name = pg_fetch_row($result);
              echo "<td>$fav_name[0]</td>";
              echo "</tr>";
              echo "<tr>";
              $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_3];");
              $fav_name = pg_fetch_row($result);
              echo "<td>$fav_name[0]</td>";
              echo "</tr>";
              echo "<tr>";
              $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_4];");
              $fav_name = pg_fetch_row($result);
              echo "<td>$fav_name[0]</td>";
              echo "</tr>";
              echo "<tr>";
              $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_5];");
              $fav_name = pg_fetch_row($result);
              echo "<td>$fav_name[0]</td>";
              echo "</tr>";
              echo "<tr>";
                echo "<td>$paidMatch[tiebreaker] pts.</td>";
              echo "</tr>";
            echo "</tbody>";
          echo "</table>";
          $i++;
        }
      } else {
        echo "<h1>Everyone's Picks - $today.</h1>";
        echo "<h2>Total pot size so far - $$totalPot.</h2>";
      }
      ?>
    </div>
    <script type="text/javascript" src="https://nm373.infusionsoft.com/app/webTracking/getTrackingCode"></script>
  </body>

  <footer class="center">
    <!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->
  </footer>
</html>
