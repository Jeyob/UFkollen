<?php $thisPage="index.php"; ?> 
<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php include("phpincludes/headinclude.php"); ?>
        <script src="jquerySlider/ResponsiveSlides.js-master/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
          // Slideshow 4
          $("#slider4").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500
          });
        });
      </script>

      
    </head>
  <body>
      
    <div id="wrap">
        <?php include("phpincludes/loginScreen.php"); ?>

        <?php include("phpincludes/navigation.php"); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-caption" style="position:absolute;">
        <h1>Vill du också synas här?</h1>
            <p class="lead">Klicka på knappen nedan för mer information om hur du på enklaste sätt kan lägga till ditt företag.</p>
            <a class="btn btn-large btn-primary" href="signup.php">Registera er nu</a>
      </div>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/Gruppbild1.jpg" alt="">
          <div class="container">        
          </div>
        </div>
        <div class="item">
          <img src="img/Lallish.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-5">
          <h2>Affärsidé</h2>
          <p>UF- kollen UF tillhandahåller en stilren webbhemsida där Stockholms aktiva UF-företag kartläggs, helt kostnadsfritt. Vår produkt gör det möjligt för både företag och konsumenter att enkelt kunna finna information kring UF:s marknad i Stockholm, för detta år. </p>
          
        </div>
        <div class="col-md-5">
          <h2>Vad är UF?</h2>
          <p>"Ung Företagsamhet är en ideell och obunden organisation med syftet att tillsammans med skolan införa entreprenörskap och ett engagerat näringsliv i utbildningssystemet. Ung Företagsamhet ger barn och ungdomar möjlighet att träna och utveckla sin kreativitet, företagsamhet och sitt entreprenörskap." -Ung Företagsamhet</p>
          
       </div>
      </div>

      <hr>

      </div> <!-- /container -->        
      <div id="push"></div>
    </div><!-- wrapper -->        
    
    <div id="footer">
        <div class="container">
          <p class="muted credit">&copy; UF KOLLEN 2013</p>
       </div> 
  </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
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
