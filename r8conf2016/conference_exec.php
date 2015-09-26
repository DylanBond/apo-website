<?php
require_once ('session.php');
require_once ('../mysql_access.php');
require_once ('../get_photo.php');
?>
<!doctype html>
<html>
<head>
    <?php require 'head.php';?>
</head>

<body class="slide" data-type="background" data-speed="5">
    <nav id="nav" role="navigation"></nav>
    <div id="header"></div>
    <div class="row">
    <ul class="large-block-grid-2 small-block-grid-1">

        <div class="small-12 columns">
          <h1 class="text-center">Conference Executive Member</h1>
        </div>

      <!-- This is the part that gets repeated for each person -->
        <div class="small-12 medium-6 large-4 columns">
      		<img src="../img/unknown.jpg" width="125" style="display: block; margin-left: auto; margin-right: auto;">
      		<h4 class="text-center">
            Name
            <br>
          </h4>
          <p class="text-center">
            <a href="mailto:">
              Email
            </a>
          </p>
        </div>
      <!-- This is the end of the part that gets repeated for each person -->

      <!-- This is the part that gets repeated for each person -->
        <div class="small-12 medium-6 large-4 columns">
          <img src="../img/unknown.jpg" width="125" style="display: block; margin-left: auto; margin-right: auto;">
          <h4 class="text-center">
            Second Name
            <br>
          </h4>
          <p class="text-center">
            <a href="mailto:">
              Email
            </a>
          </p>
        </div>
      <!-- This is the end of the part that gets repeated for each person -->

  </ul>
  </div>
    <!-- Javascript method to include footer -->
    <div id="footer"><?php include 'footer.php';?></div>
    <!-- PHP method to include footer -->
</body>
</html>
