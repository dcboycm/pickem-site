<?php
include("./include/config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

  // escapes the strings entered by the user
  $myusername = pg_escape_string($conn,$_POST['email']);
  $mypassword = pg_escape_string($conn,$_POST['key']);
  $hashedpassword = md5($mypassword);

  // builds the query into a result
  $result = pg_query($conn, "SELECT id FROM users WHERE email = '$myusername' and password = '$hashedpassword' and active = true");
  $result_first = pg_query($conn, "SELECT first_name FROM users WHERE id = $results");
  $result_last = pg_query($conn, "SELECT last_name FROM users WHERE id = $results");

  file_put_contents("php://stderr", "****** First Name: $result_first. *******".PHP_EOL);
  file_put_contents("php://stderr", "****** First Name: $result_last. *******".PHP_EOL);

  // get the number of rows returned
  $rows = pg_num_rows($result);

  file_put_contents("php://stderr", "*********** Username: $myusername Password: $hashedpassword. ***************".PHP_EOL);
  file_put_contents("php://stderr", "*********** Rows: $rows returned. ***************".PHP_EOL);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if($rows == 1) {
    $_SESSION['login_user'] = $myusername;
    $_SESSION['first_name'] = $result_first;
    $_SESSION['last_name'] = $result_last;
      header("location: home-page.php");
    }else {
      $error = "Your Login Name or Password is invalid";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pickem Site - Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/stylesheets/main.css" />
    <script>
      function checkPass() {
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("re-password").value;
        if (pass1 != pass2) {
          //alert("Passwords Do not match");
          document.getElementById("password").style.borderColor = "#E34234";
          document.getElementById("re-password").style.borderColor = "#E34234";
          return false;
        }
      }
    </script>
  </head>
  <section id="login">
      <div class="container">
      	<div class="row">
      	    <div class="col-xs-12">
          	    <div class="form-wrap">
                  <?php
                    if ($error != ""):
                  ?>

                  <div class="alert alert-danger" role="alert">Your Login Name or Password is invalid.</div>

                  <?php
                    endif;
                  ?>
                  <h1>Log in with your email account</h1>
                      <form role="form" action="/" method="post" id="login-form" autocomplete="off">
                          <div class="form-group">
                              <label for="email" class="sr-only">Email</label>
                              <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                          </div>
                          <div class="form-group">
                              <label for="key" class="sr-only">Password</label>
                              <input type="password" name="key" id="key" class="form-control" placeholder="Password">
                          </div>
                          <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                      </form>
                      <a href="javascript:;" class="register" data-toggle="modal" data-target=".register-modal">Register</a>
                      <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                      <hr>
          	    </div>
      		</div> <!-- /.col-xs-12 -->
      	</div> <!-- /.row -->
      </div> <!-- /.container -->
  </section>

  <div class="modal fade register-modal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <form role="form" action="register-user.php" onsubmit="return checkPass()" method="post" id="register-modal" autocomplete="off">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Register for a new account.</h4>
          </div>
          <div class="modal-body">
            <p>First Name</p>
            <input type="text" name="firstName" id="firstName" class="form-control" autocomplete="off">
            <p>Last Name</p>
            <input type="text" name="lastName" id="lastName" class="form-control" autocomplete="off">
            <p>Email Address</p>
            <input type="email" name="email" id="email" class="form-control" autocomplete="off">
            <p>Password</p>
            <input type="password" name="password" id="password" class="form-control" autocomplete="off">
            <p>Retype Password</p>
            <input type="password" name="re-password" id="re-password" class="form-control" autocomplete="off">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-custom" onSubmit="checkPass();">Submit</button>
          </div>
        </div> <!-- /.modal-content -->
      </div> <!-- /.modal-dialog -->
    </form>
  </div> <!-- /.modal -->

  <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-sm">
  		<div class="modal-content">
  			<div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal">
  					<span aria-hidden="true">×</span>
  					<span class="sr-only">Close</span>
  				</button>
  				<h4 class="modal-title">Recovery password</h4>
  			</div>
  			<div class="modal-body">
  				<p>Type your email account</p>
  				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
  			</div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
  				<button type="button" class="btn btn-custom">Recovery</button>
  			</div>
  		</div> <!-- /.modal-content -->
  	</div> <!-- /.modal-dialog -->
  </div> <!-- /.modal -->

  <footer id="footer">
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
              </div>
          </div>
      </div>
  </footer>
</html>
