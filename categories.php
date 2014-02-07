<?php $thisPage="categories.php"; ?>
<?php ini_set('display_errors', true); ?>
<?php include_once("db_helpers.php"); ?>

<html class="no-js">
    <head>
        <?php include("phpincludes/headinclude.php"); ?>
    </head>
    <body>
    <?php require_once 'phpincludes/loginScreen.php'; ?>

    <?php require_once 'phpincludes/navigation.php'; ?>
    <?php
      
      $C_Telefoni         =   DB_Helper::getNumCompaniesInCategory('Telefoni');
      $C_Elektronik       =   DB_Helper::getNumCompaniesInCategory('Elektronik');
      $C_Hobby            =   DB_Helper::getNumCompaniesInCategory('Hobby & Fritid');
      $C_Beauty_Skin      =   DB_Helper::getNumCompaniesInCategory('Skönhet & Hudvård');
      $C_Mode             =   DB_Helper::getNumCompaniesInCategory('Mode & Accessoarer');
      $C_Services         =   DB_Helper::getNumCompaniesInCategory('Tjänster');
      $C_Other            =   DB_Helper::getNumCompaniesInCategory('Övrigt');
    
    ?>
    <div id="wrap">
      <div  class="container emphasize">
         <div class="container">
          <div class="col-md-4 category">
            <img class="thumbnail" src="#" height="150" width="150">
            <p> <a class="btn btn-default" href=<?php $oStr = ($C_Telefoni > 0 ? "companies.php?category=Telefoni" : "#"); echo $oStr; ?> role="button">Telefoni <span class="badge"><?php echo DB_Helper::getNumCompaniesInCategory('Telefoni');  ?> st</span></a>  </p>
          </div>

          <div class="col-md-4 category">
            <img class="thumbnail" src="#" height="150" width="150">
            <p> <a class="btn btn-default" href=<?php $oStr = ($C_Elektronik > 0 ? "companies.php?category=Elektronik" : "#"); echo $oStr; ?> role="button">Elektronik <span class="badge"><?php echo DB_Helper::getNumCompaniesInCategory('Elektronik');  ?> st</span></a>  </p>
          </div>

          <div class="col-md-4 category">
            <img class="thumbnail" src="#" height="150" width="150">
            <p> <a class="btn btn-default" href=<?php $oStr = ($C_Hobby > 0 ? "companies.php?category=Hobby+%26+Fritid" : "#"); echo $oStr; ?> role="button">Hobby &amp; Fritid <span class="badge"><?php echo DB_Helper::getNumCompaniesInCategory('Hobby & Fritid');  ?> st</span></a>  </p>
          </div>
         </div> 

         <div class="container">
          <div class="col-md-4 category">
            <img class="thumbnail" src="#" height="150" width="150">
            <p> <a class="btn btn-default" href=<?php $oStr = ($C_Beauty_Skin > 0 ? "companies.php?category=Sk%F6nhet+%26+Hudv%E5rd": "#"); echo $oStr; ?>  role="button">Sk&ouml;nhet &amp; Hudv&aring;rd <span class="badge"><?php echo DB_Helper::getNumCompaniesInCategory('Skönhet & Hudvård');  ?> st</span></a>  </p>
          </div>

          <div class="col-md-4 category">
            <img class="thumbnail" src="#" height="150" width="150">
            <p> <a class="btn btn-default" href=<?php $oStr = ($C_Mode > 0 ? "companies.php?category=Mode+%26+Accessoarer" : "#"); echo $oStr; ?>  role="button">Mode &amp; Accessoarer <span class="badge"><?php echo DB_Helper::getNumCompaniesInCategory('Mode & Accessoarer');  ?> st</span></a>  </p>
          </div>

          <div class="col-md-4 category">
            <img class="thumbnail" src="#" height="150" width="150">
            <p> <a class="btn btn-default" href=<?php $oStr = ($C_Services > 0 ? "companies.php?category=Tj%E4nster" : "#"); echo $oStr; ?>  role="button">Tj&auml;nster <span class="badge"><?php echo DB_Helper::getNumCompaniesInCategory('Tjänster');  ?> st</span></a>  </p>
          </div>
         </div>

         <div class="container">
          <div class="col-md-4">
            <div class="container category">
              <img class="thumbnail" src="#" height="150" width="150">
              <p> <a class="btn btn-default" href=<?php $oStr = ($C_Other > 0 ? "companies.php?category=%D6vrigt" : "#"); echo $oStr; ?> role="button">&Ouml;vrigt <span class="badge"><?php echo DB_Helper::getNumCompaniesInCategory('Övrigt');  ?> st</span></a>  </p>
          </div>
        </div>
      </div>
      </div>
      <div id="push"></div>
    </div><!-- end #wrap-->

      <div id="footer">
        <div class="container">
          <p class="muted credit">&copy; UF KOLLEN 2013</p>
       </div> 
      </div>


</body>
</html>