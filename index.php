<?php
    $submitButtonHTML = "<input type='submit' value='Log In'/>";
    $loginHeaderText = "Log In";
    $isAdminLogin = true;
    $totalSiteLogins = '0.00';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- CSS  -->
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Login system Example</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#"></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Login</h1>
      <div class="row center">
      </div>
      <div class="row center">

      <form method="post" action="./validateLogin.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"/>

        <label for="pwd">password</label>
        <input type="password" name="pwd" id="pwd"/>
        
        <?php 
           echo $submitButtonHTML;
        ?>
    </form>
    <?php 
        echo "Total site logins: ".round($totalSiteLogins, 0, PHP_ROUND_HALF_EVEN);
    ?>
    </div>
      <br><br>

    </div>
  </div>

  <footer class="page-footer orange"  style="position: fixed;  right: 0;  bottom: 0;  left: 0;  text-align: center;">
    <div class="footer-copyright">
      <div class="container">
      Fernando Sánchez Beristain <a class="orange-text text-lighten-3" href="#"></a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <!--  Scripts-->

  </body>
</html>
