<?php
  include("./include/config.php");
  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = pg_escape_string($_POST['firstName']);
    $lastname = pg_escape_string($_POST['lastName']);
    $emailaddress = pg_escape_string($_POST['email']);
    if ($_POST['password']!= $_POST['re-password'])
    {
         echo("Oops! Password did not match! Try again. ");
    }
    $password = pg_escape_string($_POST['password']);

    $result = pg_query($conn, "INSERT INTO users (first_name, last_name, email, password, active) VALUES ('$firstname', '$lastname', '$emailaddress', '$password', false);");

    $query = "INSERT INTO users (first_name, last_name, email, password, active) VALUES('" . $firstname . "', '" . $lastname . "', '" . $emailaddress . "', '" . $password . "', true)";
    $result = pg_query($query);
    if (!$result) {
        $errormessage = pg_last_error();
        echo "Error with query: " . $errormessage;
        exit();
    }
    printf ("These values were inserted into the database - %s %s %s", $firstname, $lastname, $emailaddress);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thanks for Registering!</title>
  </head>
  <body>

    <h1>Thanks for registering!</h1>
    <input type="submit" action="index.php" id="return" class="btn btn-custom btn-lg btn-block" value="Log in">

  </body>
</html>
