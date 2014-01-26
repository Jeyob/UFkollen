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
    
    <div class="jumbotron">
      <div class="container">
        <h2>Välkommen till UF Kollen!</h2>

        <div class="img_slider">
          <ul class="rslides" id="slider4">
            <li>
              <img id="UF-Logo-big" src="img/Magnifying_Glass_UF.png"height="300">
              <p><a href="#" class="btn btn-primary btn-lg">Intresserad av att veta vad vi gör, klicka här &raquo;</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-5">
          <h2>Affärsidé</h2>
          <p>Vår affärside är brilliant!
          Det hela grundar sig i att alla väljer oss.
          Det betyder således att det inte blir något över
          till de andra! </p>
          
        </div>
        <div class="col-md-5">
          <h2>Vad är UF?</h2>
          <p>Unga förtagare (UF) är hej hoppsan!.
          Vi tänkte starta en sida som shooohoo
          för att sedan avsluta i en jajappp!! </p>
          
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

</body>
</html>
