<?php
  include("./include/config.php");
  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = pg_escape_string($_POST['firstName']);
    $lastname = pg_escape_string($_POST['lastName']);
    $emailaddress = pg_escape_string($_POST['email']);
    $email_lower = strtolower($emailaddress);
    $nickname = pg_escape_string($_POST['nickname']);
    if ($_POST['password']!= $_POST['re-password'])
    {
         echo("Oops! Password did not match! Try again.");
    } else {
      $password = pg_escape_string($_POST['password']);
      $hashedpassword = md5($password);

      $result = pg_query($conn, "INSERT INTO users (first_name, last_name, email, password, active, nickname) VALUES ('$firstname', '$lastname', '$email_lower', '$hashedpassword', true, '$nickname');");
      if (!$result) {
          $errormessage = pg_last_error();
          echo "Error with query: " . $errormessage;
          exit();
      }
      // printf ("These values were inserted into the database - %s %s %s", $firstname, $lastname, $email_lower);
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Thanks for Registering!</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/stylesheets/main.css" />
  </head>

    <section id="registered">
      <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                  <h1>Thanks for registering!</h1>
                  <a href="index.php" class="btn btn-custom btn-lg btn-block">Log In</a>
                </div>
            </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="https://nm373.infusionsoft.com/app/webTracking/getTrackingCode"></script>
  </body>
</html>
