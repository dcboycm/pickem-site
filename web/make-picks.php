<?php
   include('session.php');
   include('./include/config.php');

   $myusername = $_SESSION['login_user'];
   $firstname = $_SESSION['first_name'];
   $lastname = $_SESSION['last_name'];

   $result = pg_query($conn, "select * from weekly_matches order by match_date;");
   $rows = pg_fetch_all($result);

   print_r($rows);
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
            <li class=""><a href="#"><i class="glyphicon glyphicon-envelope"></i>Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right ">
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <table>
      <thead>
        <tr>
          <th>Select</th>
          <th>Favorite</th>
          <th>Spread</th>
          <th>Underdog</th>
          <th>Select</th>
        </tr>
      </thead>
    <?php
      foreach ($rows as $row) {
        echo "<td><input type='radio' name='picked1' value='Select'><br></td>";
        echo "<td>{$row['team_home']}</td>";
        // echo "<td>{$row['team_fav']}</td>";
        echo "<td>{$row['spread']}</td>";
        echo "<td>{$row['team_away']}</td>";
        echo "<td><input type='radio' name='picked1' value='Select'><br></td>";
        // echo "<td>{$row['week_number']}</td>";
        // echo "<td>{$row['week_year']}</td>";
        // echo "<td>{$row['match_date']}</td>";
      }
    ?>
    </table>

    <div class="center" id="make-picks">
  		<h1>Football Pool 2017-2018</h1>
      <h2>Week 1 - September 7th - September 11th</h2>
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
  			<tbody>
  				<tr>
            <td><input type="radio" name="picked1" value="Select"><br></td>
  					<td>@NE</td>
  					<td>5.5</td>
  					<td>KC</td>
            <td><input type="radio" name="picked1" value="Select"><br></td>
  				</tr>
  			</tbody>
        <table class="table center">
          <thead>
            <h2>Sunday</h2>
            <tr>
              <th>Favorite</th>
              <th>Spread</th>
              <th>Underdog</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>@BUF</td>
              <td>5.5</td>
              <td>NYJ</td>
            </tr>
            <tr>
              <td>@CHI</td>
              <td>5.5</td>
              <td>ATL</td>
            </tr>
            <tr>
              <td>@CIN</td>
              <td>5.5</td>
              <td>BAL</td>
            </tr>
            <tr>
              <td>@CLE</td>
              <td>5.5</td>
              <td>PIT</td>
            </tr>
            <tr>
              <td>@DET</td>
              <td>5.5</td>
              <td>ARI</td>
            </tr>
            <tr>
              <td>@HOU</td>
              <td>5.5</td>
              <td>JAX</td>
            </tr>
            <tr>
              <td>@MIA</td>
              <td>5.5</td>
              <td>TB</td>
            </tr>
            <tr>
              <td>@TEN</td>
              <td>5.5</td>
              <td>OAK</td>
            </tr>
            <tr>
              <td>@WAS</td>
              <td>5.5</td>
              <td>PHI</td>
            </tr>
            <tr>
              <td>@LAR</td>
              <td>5.5</td>
              <td>IND</td>
            </tr>
            <tr>
              <td>@GB</td>
              <td>5.5</td>
              <td>SEA</td>
            </tr>
            <tr>
              <td>@SF</td>
              <td>5.5</td>
              <td>CAR</td>
            </tr>
            <tr>
              <td>@DAL</td>
              <td>5.5</td>
              <td>NYG</td>
            </tr>
          </tbody>
          <table class="table center">
            <thead>
              <h2>Monday</h2>
              <tr>
                <th>Favorite</th>
                <th>Spread</th>
                <th>Underdog</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>@MIN</td>
                <td>3</td>
                <td>NO</td>
              </tr>
              <tr>
                <td>@DEN</td>
                <td>5</td>
                <td>LAC</td>
              </tr>
            </tbody>
  		</table>
      <div class="tiebreaker">
        <h2>Tie-Breaker Points: <?php echo "DEN/LAC" ?></h2>
      </div>
      <div style="text-align: center;" class="tiebreaker-points center">
        <input style="text-align: center;" type="text" name="tiebreaker" placeholder="50">  pts.</input>
      </div>
  	</div>
  </body>

  <footer class="center">
    <!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->
  </footer>
</html>
