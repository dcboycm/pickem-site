<?php
  include("./include/config.php");
  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = pg_escape_string($_POST['firstName']);
    $lastname = pg_escape_string($_POST['lastName']);
    $emailaddress = pg_escape_string($_POST['email']);
    if ($_POST['password']!= $_POST['re-password'])
    {
         echo("Oops! Password did not match! Try again.");
    } else {
      $password = pg_escape_string($_POST['password']);

      $result = pg_query($conn, "INSERT INTO users (first_name, last_name, email, password, active) VALUES ('$firstname', '$lastname', '$emailaddress', '$password', true);");
      if (!$result) {
          $errormessage = pg_last_error();
          echo "Error with query: " . $errormessage;
          exit();
      }
      printf ("These values were inserted into the database - %s %s %s", $firstname, $lastname, $emailaddress);
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
                  <input type="submit" action="index.php" id="return" class="btn btn-custom btn-lg btn-block" value="Log In">
                </div>
            </div>
        </div>
      </div>
    </section>
  </body>
</html>
