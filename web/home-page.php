<?php
   include('session.php');

   $myusername = $_SESSION['login_user'];
   $firstname = $_SESSION['first_name'];
   $lastname = $_SESSION['last_name'];

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     $name=$_REQUEST['name'];
     $email=$_REQUEST['email'];
     $message=$_REQUEST['message'];
     if (($name=="")||($email=="")||($message==""))
         {
 		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
 	    }
     else{
 	    $from="From: $name<$email>\r\nReturn-path: $email";
         $subject="Message sent using your contact form";
 		// mail("youremail@yoursite.com", $subject, $message, $from);
 		echo "Email sent!";
 	    }
   }

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
            <li class=""><a href="javascript:;" class="contact" data-toggle="modal" data-target=".contact-modal"><i class="glyphicon glyphicon-envelope"></i>Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right ">
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="center" id="profile">
      <h1>Welcome "<?php echo $firstname.' '.$lastname; ?>" !</h1>
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

  </body>

  <footer class="center">
      <!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->
  </footer>

</html>
