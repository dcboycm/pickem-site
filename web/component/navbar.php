<?php
  <nav class='navbar navbar-default center'>
    <div class='container-fluid'>
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class='navbar-header'>
        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
          <span class='sr-only'>Toggle navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a class='navbar-brand' href='#'>
          <img alt='Brand' src='images/brand_logo.png'>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
        <ul class='nav navbar-nav'>
          <li class='active'><a href='#'><i class='glyphicon glyphicon-home'></i>Home</a></li>
          <li class=''><a href='make-picks.php'><i class='glyphicon glyphicon-file'></i>Make Picks</a></li>
          <li class=''><a href='all-picks.php'><i class='glyphicon glyphicon-th'></i>Everyone's Picks</a></li>
          <!-- <li class=''><a href='#' class='contact' data-toggle='modal' data-target='.contact-modal'><i class='glyphicon glyphicon-envelope'></i>Contact Us</a></li> -->
        </ul>
        <ul class='nav navbar-nav pull-right '>
          <li style='padding-top: 15px; padding-right: 15px; color: #777;'>Welcome, <?php echo $nickname[0] ?></li>
          <li style='padding-top: 15px; color: #777;'>  |</li>
          <li><a href='logout.php'>Log Out</a></li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
?>
