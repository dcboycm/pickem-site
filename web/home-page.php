<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

  <body>
    <div id="profile">
      <h1>Welcome <?php echo $login_session; ?></h1>
      <b id="logout"><a href="index.php">Log Out</a></b>
    </div>
  </body>

</html>
