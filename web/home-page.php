<?php
  include('session.php');
  include('./include/config.php');

  $myusername = $_SESSION['login_user'];
  $firstname = $_SESSION['first_name'];
  $lastname = $_SESSION['last_name'];

  $result = pg_query($conn, "select nickname from users where email = '$myusername';");
  $nickname = pg_fetch_row($result);

?>
<!DOCTYPE html>
<html>
<head>
<title>Pickem Site - Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
            <li class="active"><a href="home-page.php"><i class="glyphicon glyphicon-home"></i>Home</a></li>
            <li class=""><a href="make-picks.php"><i class="glyphicon glyphicon-file"></i>Make Picks</a></li>
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
    <div class="center" id="profile">
      <!-- <h1>Welcome <?php echo $firstname.' '.$lastname; ?>!</h1> -->
    </div>

    <div style="text-align: center;" class="grid center">
      <div style="text-align: left;" class="col-1-2 news">
        <div class="content">
          <h2>News:</h2>
          <p>
            It's the end of the 2017-2018 season. A new year is upon us.
            Please click on the Make Picks tab located at the top of the
            page to see who is playing this week!
          </p>
        </div>

        <hr>

        <div style="text-align: left;" class="content">
          <h2>League Rules:</h2>
          <p>
            The rules are the same:
            <ol>
              <li>You have to pick 5 games.</li>
              <li>You have to win all 5 games.</li>
              <li>Ties are decided by tiebreaker, closest to total score of the last game or Monday night game regardless of overage.</li>
              <li>Sheets are $5 each unless it rolls over.</li>
            </ol>
            This year the Football Pool will be completely digital, all picks
            need to be submitted via the website. Monies and fees will be
            managed through PayPal and Venmo. With this being a website there
            will also be a small, <strong>(5%)</strong> , of the total pot that goes towards
            hosting.
          </p>
        </div>

        <hr>

        <div style="text-align: center;" class="content">
          <h2>Payment Methods:</h2>
          <a href="https://www.paypal.me/CurtisMiller"><img src=".\images\paypal.png" style="width:50px;height:50px;"/></a>
          <a href="https://venmo.com/Curtis-Miller-6"><img src=".\images\venmo.png" style="width:50px;height:50px;"/></a>
        </div>
      </div>

      <div class="col-1-2 updates">
        <div class="content">
          <p>
            <h3>Week 12 - 2018</h3>
            <p>Last weeks winner: dcboycm!</p>
            <p>Pot size: $270.00.</p>
          </p>
        </div>
      </div>
      <div class="col-1-2 updates">
        <div class="content">
          <p>
            <h3>Week 13 - 2018</h3>
            <p>Last weeks winner: markw!</p>
            <p>Pot size: $80.00.</p>
          </p>
        </div>
      </div>
      <div class="col-1-2 updates">
        <div class="content">
          <p>
            <h3>Week 14 - 2018</h3>
            <p>Rollover!</p>
            <p>Pot size: $70.00.</p>
          </p>
        </div>
      </div>
      <div class="col-1-2 updates">
        <div class="content">
          <p>
            <h3>Week 15 - 2018</h3>
            <p>Rollover!</p>
            <p>Pot size: $150.00.</p>
          </p>
        </div>
      </div>
      <div class="col-1-2 updates">
        <div class="content">
          <p>
            <h3>Week 16 - 2018</h3>
            <p>Rollover!</p>
            <p>Pot size: $230.00.</p>
          </p>
        </div>
      </div>

    <div class="modal fade contact-modal" tabindex="-1" role="dialog" aria-labelledby="contactUsModal" aria-hidden="true">
    	<div class="modal-dialog modal-sm">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal">
    					<span aria-hidden="true">×</span>
    					<span class="sr-only">Close</span>
    				</button>
    				<h4 class="modal-title">Contact Us</h4>
    			</div>
          <form  action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="submit">
            Your name:<br>
            <input name="name" type="text" value="" size="30"/><br>
            Your email:<br>
            <input name="email" type="text" value="" size="30"/><br>
            Your message:<br>
            <textarea name="message" rows="7" cols="30"></textarea><br>
            <input type="submit" value="Send email"/>
          </form>
    		</div> <!-- /.modal-content -->
    	</div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
    <script type="text/javascript" src="https://nm373.infusionsoft.com/app/webTracking/getTrackingCode"></script>
  </body>

  <footer class="center">
      <!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->
  </footer>

</html>
