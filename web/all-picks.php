<?php
   include('session.php');

   $myusername = $_SESSION['login_user'];
   $firstname = $_SESSION['first_name'];
   $lastname = $_SESSION['last_name'];

   $tz = 'America/Phoenix';
   $timestamp = time();
   $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
   $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
   $today = $dt->format('l');
   $hour = $dt->format('H:i:s');

   $result = pg_query($conn, "SELECT user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker FROM public.test_matches where paid = true;");
   $paidMatches = pg_fetch_row($result);

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
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="center" id="all-picks">
      <?php
      if ($today != "Sunday") {
        <h1>Everyone''s Picks - $today</h1>
        <table class="table">
          <thead>
            <tr>
              <th>curtischristophermiller@gamil.com</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MIN</td>
            </tr>
            <tr>
              <td>WAS</td>
            </tr>
            <tr>
              <td>BUF</td>
            </tr>
            <tr>
              <td>TEN</td>
            </tr>
            <tr>
              <td>NE</td>
            </tr>
            <tr>
              <td>45 pts.</td>
            </tr>
          </tbody>
        </table>
      } else {
        <h1>Everyone''s Picks - $today</h1>
        <h2>Total sheets submitted - {Need to get the number.}</h2>
      }
      ?>
    </div>
  </body>

  <footer class="center">
    <!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->
  </footer>
</html>
