<?php
  echo "<nav class='navbar navbar-default center'>";
    echo "<div class='container-fluid'>";
      echo "<!-- Brand and toggle get grouped for better mobile display -->";
      echo "<div class='navbar-header'>";
        echo "<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>";
          echo "<span class='sr-only'>Toggle navigation</span>";
          echo "<span class='icon-bar'</span>";
          echo "<span class='icon-bar'</span>";
          echo "<span class='icon-bar'</span>";
        echo "</button>";
        echo "<a class='navbar-brand' href='#'>";
          echo "<img alt='Brand' src='images/brand_logo.png'>";
        echo "</a>";
      echo "</div>";

      echo "<!-- Collect the nav links, forms, and other content for toggling -->";
      echo "<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>";
        echo "<ul class='nav navbar-nav'>";
          echo "<li class='active'><a href='#'<i class='glyphicon glyphicon-home'</i>Home</a></li>";
          echo "<li class=''<a href='make-picks.php'<i class='glyphicon glyphicon-file'></i>Make Picks</a></li>";
          echo "<li class=''<a href='all-picks.php'><i class='glyphicon glyphicon-th'></i>Everyone's Picks</a></li>";
        echo "</ul>";
        echo "<ul class='nav navbar-nav pull-right '>";
          echo "<li style='padding-top: 15px; padding-right: 15px; color: #777> Welcome, <?php echo $nickname[0] ?></li>";
          echo "<li style='padding-top: 15px; color: #777;>  | </li>";
          echo "<li><a href='logout.php'>Log Out</a></li>";
        echo "</ul>";

      echo "</div><!-- /.navbar-collapse -->";
    echo "</div><!-- /.container-fluid -->";
  echo "</nav>";
?>
