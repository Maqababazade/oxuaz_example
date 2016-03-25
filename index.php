<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <!-- Custom style -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <nav>
        <div class="nav-wrapper container">
          <a href="#!" class="brand-logo"><img src="assets/imgs/logo.png"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Home</a></li>
            <li><a href="badges.html">Gallery</a></li>
            <li><a href="collapsible.html">About</a></li>
            <li><a href="mobile.html">Contact</a></li>
            <li><a href="mobile.html">Login</a></li>
            <li><a href="mobile.html">Registration</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Home</a></li>
            <li><a href="badges.html">Gallery</a></li>
            <li><a href="collapsible.html">About</a></li>
            <li><a href="mobile.html">Contact</a></li>
            <li><a href="mobile.html">Login</a></li>
            <li><a href="mobile.html">Registration</a></li>
          </ul>
        </div>
      </nav>
      <?php 
        include 'app/news.php';
       ?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>
  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>