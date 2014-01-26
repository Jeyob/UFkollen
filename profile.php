<!DOCTYPE html>
<?php $thisPage="categories.php"; ?>
<html class="no-js">
    <head>
        <?php include("phpincludes/headinclude.php"); ?>
    </head>
    <body>
     
     <?php include("phpincludes/loginScreen.php"); ?>
     <?php include("phpincludes/navigation.php"); ?>    

    <div class="container">
      <div class="row">
           <img src="img/google1.jpg" width=200 height=200 >           
      </div>
      <div class="row">
        <div id="company-list" class="col-lg-2 list">
          <h4>Företag i kategorin</h4>
          <hr>
          <ul class="styled-list">
            <li><a href="#">Fortum</a></li>
            <li><a href="#">Fortum</a></li>
      
          </ul>
        </div>  
        <div id="company-desc" class="col-lg-5">
          <h4 >Beskrivning </h4>
          <hr>
          <!-- Here we write description of company -->
          <p>Det här företaget har gjort dittan och dattan
          allt vad du kan tänka dig....!!!</p>

          <p>Kontakt uppgifter nedan!</p>
        </div>

        <div id="company-contact" class="col-lg-3">
          <h4 >Kontakt</h4>
          <hr>
          <p> Mobil:+463842349423 </p>
          <p> Adress: Solna gymnasium </p>
        </div>

      </div>

      <hr>

      <footer>
        <p>&copy; UF KOLLEN 2013</p>
      </footer>
    </div>
     </body>
</html>
