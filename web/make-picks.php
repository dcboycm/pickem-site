<?php
   include('session.php');
   include('./include/config.php');

   $myusername = $_SESSION['login_user'];
   $firstname = $_SESSION['first_name'];
   $lastname = $_SESSION['last_name'];

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
        $("input[name=picked]").change(function(){
          var max= 5;
          if( $("input[name=picked]:checked").length == max ){
              $("input[name=picked]").attr('disabled', 'disabled');
              $("input[name=picked]:checked").removeAttr('disabled');
            }else{
              $("input[name=picked]").removeAttr('disabled');
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
        var username = <?php echo(json_encode($username)) ?>;
        var tiebreaker = $('#tiebreaker').val();
        alert(username"\n" selected[0]"\n" selected[1]"\n" selected[2]"\n" selected[3]"\n" selected[4]"\n" tiebreaker);
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
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

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
    <?php
    $result = pg_query($conn, "select * from weekly_matches where week_number = 1 and match_date = '2017-09-07' order by match_date;");
    $rows = pg_fetch_all($result);
    $i = 0;
      foreach ($rows as $row) {
        echo "<tbody>";
          echo "<tr>";
          // Need an if check for who is the FAVORITE, this will determine who goes first in the list
          $result = pg_query($conn, "select fav_name from team where id = {$row['team_home']};");
          $home_fav = pg_fetch_row($result);
          $result = pg_query($conn, "select fav_name from team where id = {$row['team_away']};");
          $away_fav = pg_fetch_row($result);
          if ($row[team_home] == $row[team_fav]) {
            echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_home]}'><br></td>";
            echo "<td>{$home_fav[0]}</td>";
            echo "<td>{$row['spread']}</td>";
            echo "<td>{$away_fav[0]}</td>";
            echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_away]}'><br></td>";
          } else {
            echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_away]}'><br></td>";
            echo "<td>{$away_fav[0]}</td>";
            echo "<td>{$row['spread']}</td>";
            echo "<td>{$home_fav[0]}</td>";
            echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_home]}'><br></td>";
          }          echo "</tr>";
        echo "</tbody>";
        $i++;
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
    $result = pg_query($conn, "select * from weekly_matches where week_number = 1 and match_date = '2017-09-10' order by match_date;");
    $rows = pg_fetch_all($result);
    $i = 0;
      foreach ($rows as $row) {
        echo "<tbody>";
          echo "<tr>";
            // Need an if check for who is the FAVORITE, this will determine who goes first in the list
            $result = pg_query($conn, "select fav_name from team where id = {$row['team_home']};");
            $home_fav = pg_fetch_row($result);
            $result = pg_query($conn, "select fav_name from team where id = {$row['team_away']};");
            $away_fav = pg_fetch_row($result);
            if ($row[team_home] == $row[team_fav]) {
              echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_home]}'><br></td>";
              echo "<td>{$home_fav[0]}</td>";
              echo "<td>{$row['spread']}</td>";
              echo "<td>{$away_fav[0]}</td>";
              echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_away]}'><br></td>";
            } else {
              echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_away]}'><br></td>";
              echo "<td>{$away_fav[0]}</td>";
              echo "<td>{$row['spread']}</td>";
              echo "<td>{$home_fav[0]}</td>";
              echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_home]}'><br></td>";
            }
          echo "</tr>";
        echo "</tbody>";
        $i++;
      }
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
    $result = pg_query($conn, "select * from weekly_matches where week_number = 1 and match_date = '2017-09-11' order by match_date;");
    $rows = pg_fetch_all($result);
    $i = 0;
      foreach ($rows as $row) {
        echo "<tbody>";
          echo "<tr>";
          // Need an if check for who is the FAVORITE, this will determine who goes first in the list
          $result = pg_query($conn, "select fav_name from team where id = {$row['team_home']};");
          $home_fav = pg_fetch_row($result);
          $result = pg_query($conn, "select fav_name from team where id = {$row['team_away']};");
          $away_fav = pg_fetch_row($result);
          if ($row[team_home] == $row[team_fav]) {
            echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_home]}'><br></td>";
            echo "<td>{$home_fav[0]}</td>";
            echo "<td>{$row['spread']}</td>";
            echo "<td>{$away_fav[0]}</td>";
            echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_away]}'><br></td>";
          } else {
            echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_away]}'><br></td>";
            echo "<td>{$away_fav[0]}</td>";
            echo "<td>{$row['spread']}</td>";
            echo "<td>{$home_fav[0]}</td>";
            echo "<td><input class='single-checkbox'type='checkbox' name='picked' value='{$row[team_home]}'><br></td>";
          }          echo "</tr>";
        echo "</tbody>";
        $i++;
      }
    ?>
    </table>

      <div class="tiebreaker">
        <h2>Tie-Breaker Points: <?php echo "DEN/LAC" ?></h2>
      </div>
      <div style="text-align: center;" class="tiebreaker-points center">
        <input style="text-align: center;" type="text" name="tiebreaker" id="tiebreaker" placeholder="50">  pts.</input>
      </div>
  	</div>

    <div style="padding-top: 20px;" class="center">
      <input type="submit" id="btn-submit" class="btn btn-custom btn-lg btn-block" onclick="submitSheet()" value="Submit">
    </div>
  </body>

  <footer class="center">
    <!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->
  </footer>
</html>
