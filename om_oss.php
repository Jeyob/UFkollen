<?php $thisPage="om_oss.php"; ?>
<html class="no-js">
    <head>
       <?php include("phpincludes/headinclude.php"); ?>
    </head>
    <body>
    <?php include("phpincludes/loginScreen.php"); ?>

    <?php include("phpincludes/navigation.php"); ?>

    <div id="wrap">
     <!-- <div class="jumbotron">
      <div class="container">
        <h2>Styrelsen</h2>
        <br>
        <img id="UF-Logo-big" src="#" width="330" height="200" alt="Bild på styrelsen">
      </div> -->
    
     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <div class="container">
      <h2>Vilka vi är</h2>
      <hr>
      <br>
    <div class="row">
      <div class="presentation-block col-md-4"> 
        <img src="img/Styrelse/Eden.JPG" width="150" height="150" class="img-rounded" >
        <h4>Eden Eyob</h4>
        <h5>Försäljningschef</h5>
        <a href="mailto:" rel="Maila oss" title="Maila Namn">info@ufkollen.se</a>
      </div>
      
      <div class="presentation-block col-md-4"> 
        <img src="img/Styrelse/Carl.JPG" width="150" height="150" class="img-rounded" >
        <h4>Carl Mikael Andersson</h4>
        <h5>Inköpschef</h5>
        <a href="mailto:" rel="Maila oss" title="Maila Namn">info@ufkollen.se</a>
      </div>

      <div class="presentation-block col-md-4"> 
        <img src="img/Styrelse/Hamza.PNG" width="150" height="150" class="img-rounded" >
        <h4>Hamza Sultana Beomidhagh</h4>
        <h5>VD</h5>
        <a href="mailto:" rel="Maila oss" title="Maila Namn">info@ufkollen.se</a>
      </div>
    </div>
    <div class="row">
      
      <div class="presentation-block col-md-4"> 
        <img src="img/Styrelse/Jacob.PNG" width="150" height="150" class="img-rounded">
        <h4>Jacob borssén</h4>
        <h5>Ekonomichef</h5>
        <a href="mailto:" rel="Maila oss" title="Maila Namn">info@ufkollen.se</a>
      </div>
      
      <div class="presentation-block col-md-4"> 
        <img src="img/Styrelse/Matilda.JPG" width="150" height="150" class="img-rounded">
        <h4>Matilda Sadeghi</h4>
        <h5>Marknadsföringschef</h5>
        <a href="mailto:" rel="Maila oss" title="Maila Namn">info@ufkollen.se</a>
      </div>
    </div>
    </div>
    <hr>
      <div id="push"></div>
  </div>

<div id="footer">
        <div class="container">
          <p class="muted credit">&copy; UF KOLLEN 2013</p>
       </div> 
</div>

     <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
</body>
</html>
