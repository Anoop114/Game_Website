<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tower Block By Anoop</title>

  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="icon" type="image/png" href="img/favicon.png"/>
</head>

<body id="body">
  <!-- preloader -->
  <div id="preloader">
    <img src="img/preloader.gif" alt="Preloader" />
  </div>
  <!-- end preloader -->

  <!-- Fixed Navigation ==================================== -->
  <header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
      <div class="navbar-header">
        <!-- responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>
        </button>
        <!-- /responsive nav button -->

        <!-- logo -->
        <a class="navbar-brand" href="#">
          <h1 id="logo">
            <a href="index.html"><img src="img/Tower Blocks.png" alt="Tower Block By Anoop" /></a>
          </h1>
        </a>
        <!-- /logo -->
      </div>

      <!-- main nav -->
      <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <ul class="nav navbar-nav">
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="game.html">PLAY</a></li>
          <li><a href="highscore.html">Your High Score</a></li>
        </ul>
      </nav>
      <!-- /main nav -->
    </div>
  </header>
  <!--
        End Fixed Navigation
        ==================================== -->

  <!--
        Home Slider
        ==================================== -->

  <section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- single slide -->
        <div class="item active">
          <video autoplay muted loop>
            <source src="img/bg.mp4" type="video/mp4">
          </video>
          <div class="carousel-caption">
            <h2 class="wow bounceInDown animated" data-wow-duration="700ms" data-wow-delay="500ms" style="color: darkviolet;">
              <span>Tower Blocks</span>
            </h2>
            <h3 class="wow slideInLeft animated" data-wow-duration="1000ms">
              <span class="color">Game</span>
            </h3>
            <h4 class="wow slideInRight animated" data-wow-duration="1000ms">
              <p>Click Hear To Play </p> <br>
              <form action="game.html">
                <button type="submit" class="btn btn-success btn-md">READY</button>
              </form>
            </h4>
          </div>
        </div>

        <!-- end single slide -->
      </div>
      <!-- End Wrapper for slides -->
    </div>
  </section>

  <!--
        End Home SliderEnd
        ==================================== -->

  <!-- Essential jQuery Plugins
		================================================== -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.singlePageNav.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
  <script>
    var wow = new WOW({
      boxClass: "wow", // animated element css class (default is wow)
      animateClass: "animated", // animation css class (default is animated)
      offset: 120, // distance to the element when triggering the animation (default is 0)
      mobile: true, // trigger animations on mobile devices (default is true)
      live: true, // act on asynchronously loaded content (default is true)
    });
    wow.init();
  </script>
</body>

</html>