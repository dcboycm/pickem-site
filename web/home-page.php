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
<title>Pickem Site - Home Page</title>
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
            <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i>Home</a></li>
            <li class=""><a href="make-picks.php"><i class="glyphicon glyphicon-file"></i>Make Picks</a></li>
            <li class=""><a href="all-picks.php"><i class="glyphicon glyphicon-th"></i>Everyone's Picks</a></li>
            <!-- <li class=""><a href="#" class="contact" data-toggle="modal" data-target=".contact-modal"><i class="glyphicon glyphicon-envelope"></i>Contact Us</a></li> -->
          </ul>
          <ul class="nav navbar-nav pull-right ">
            <li style="padding-top: 15px; padding-right: 15px; color: #777;">Welcome, <?php echo $firstname ?></li>
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
      <div style="text-align: left;" class="col-1-2">
        <div class="content">
          <h2>News:</h2>
          <p>
            It's the start of the 2017-2018 season. It's a new year and a new
            way to select your picks. Please click on the Make Picks tab located
            at the top of the page to see who is playing this week!
          </p>
        </div>
        <div style="text-align: left;" class="content">
          <h2>League Rules:</h2>
          <p>
            The rules are the same:
            <ol>
              <li>You have to pick 5 games.</li>
              <li>You have to win all 5 games.</li>
              <li>Ties are decided by tiebreaker, closest to total score of Monday night game regardless of overage.</li>
              <li>Sheets are $5 each unless it rolls over.</li>
            </ol>
            This year the Football Pool will be completely digital, all picks
            need to be submitted via the website. Monies and fees will be
            managed through PayPal and Venmo. With this being a website there
            will also be a small, <strong>(5%)</strong> , of the total pot that goes towards
            hosting.
          </p>
        </div>
      </div>
      <div class="col-1-2">
        <div class="content">
          <h2>Updates:</h2>
          <p>
            <h3>Conference Championship Weekend</h3>
            <p>Last weeks winner: Alex Ramos.</p>
            <p>Pot size: $55.00.</p>
          </p>
          <p>
            <h3>Divisional Weekend Weekend</h3>
            <p>Last weeks winner: REYES.</p>
            <p>Pot size: $90.00.</p>
          </p>
        </div>
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
