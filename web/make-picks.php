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
   $week_number = $_SESSION["week_number"];

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
    <script>
      $(document).ready(function() {
        $(".single-checkbox").change(function(){
          var max= 5;
          if( $(".single-checkbox:checked").length == max ){
              $(".single-checkbox").attr('disabled', 'disabled');
              $(".single-checkbox:checked").removeAttr('disabled');
            }else{
              $(".single-checkbox").removeAttr('disabled');
            }
          });
        });
    </script>
    <script>
      function submitSheet() {
        var selected = [];
        $('.single-checkbox:checked').each(function() {
          selected.push($(this).attr('value'));
        });
        var tiebreaker = $('#tiebreaker').val();
        if(selected.length == 5 && tiebreaker != ""){
          return true;
        } else {
          alert("You must select 5 teams and/or set the tiebreaker.");
          document.getElementById("tiebreaker").style.borderColor = "#E34234";
          return false;
        }
      }
    </script>
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
            <li style="padding-top: 15px; padding-right: 15px; color: #777;">Welcome, <?php echo $nickname[0] ?></li>
            <li style="padding-top: 15px; color: #777;">  |</li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  <div class="center" id="make-picks">
		<h1>Football Pool 2017-2018</h1>
    <h2>Week 1 - September 7th - September 11th</h2>
    <form action="submit-picks.php" method="post" onsubmit="return submitSheet();">
      <?php
        if ($today == "Wednesday") {
          echo "<table class='table center'>
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
                </table>";
        } else {
          echo "It's is not Wednesday";
        }
       ?>
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
      $result = pg_query($conn, "select * from weekly_matches where week_number = '$week_number' and match_date = '2017-09-07' order by match_date;");
      include('./component/table_data.php');
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
      $result = pg_query($conn, "select * from weekly_matches where week_number = '$week_number' and match_date = '2017-09-10' order by match_date;");
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
      $result = pg_query($conn, "select * from weekly_matches where week_number = '$week_number' and match_date = '2017-09-11' order by match_date;");
      include('./component/table_data.php');
      ?>
      </table>

        <div class="tiebreaker">
          <h2>Tie-Breaker Points: <?php echo "DEN/LAC" ?></h2>
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
        } else {
          echo "<div style='padding-top: 20px;'' class='center'>";
            echo "<input type='submit' id='btn-submit' class='btn btn-custom btn-lg btn-block' disabled='disabled' value='Submit'>";
          echo "</div>";
        }
      ?>
  </form>
  <script type="text/javascript" src="https://nm373.infusionsoft.com/app/webTracking/getTrackingCode"></script>
  </body>

  <footer class="center">
    <!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->
  </footer>
</html>
