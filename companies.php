<?php $thisPage="categories.php"; ?>
<?php ini_set('display_errors', true); ?>
<?php include_once("db_helpers.php"); ?>
<?php include_once("cCompanies.php"); ?>

<?php 
    
    // var_dump($_SERVER['REQUEST_URI']);
    $parts = parse_url($_SERVER['REQUEST_URI']);
    parse_str($parts['query'], $query);
    $category = utf8_encode( $query['category'] );

    if(!$category){
        die();
    }

    /* if we get here then we specified a company */
?>


<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php include("phpincludes/headinclude.php"); ?>
    </head>
    <body>
     
     <?php include("phpincludes/loginScreen.php"); ?>
     <?php include("phpincludes/navigation.php"); ?>    

<div id="wrap">
     <div class="container">
        <div id="quick-nav" class="company-listning container">
            <div id="company-listning-desc">
                <h4>Använd snabblänkarna för att hoppa till företag sorterad alfabetiskt</h4>
            </div>

            <div id="company-jump-list" class="jumpto ">
                 <?php 

                    $Letters = DB_Helper::getCDFL( $category ); 
                    
                    while( $res = $Letters->fetch_array()) {
                        echo "<a href=\"#ap-".$res['First_char']."\">".$res['First_char']."</a>\n\t";
                        $objArray[] = new cCompanies($category, $res['First_char']);
                    }
                    if( count($objArray) > 1 ) {
                        usort($objArray, array("cCompanies","compareObj")); //sort ascending
                    }
                ?> 
          </div>
        </div> 

    <div id="c-wrapper" class="container">
        <?php 
            // $obj = new cCompanies($category, "");
            // $obj->getSplitArray(3);
        foreach ($objArray as $value) {
            
            $_res = $value->getSplitArray(3);
            // var_dump($_res);

            echo "
                <div id=\"ap-".$value->startWith."\" class=\"row\">
                    <div class=\"subheader\">
                        <h2>".$value->startWith."</h2>
                        <hr>
                    </div>

                    <div class=\"col-md-3 company-links\">";
                    
                    foreach ($_res[0] as $_company) {
                        echo "<a href=\"companyProfile.php?company=".$_company['name'].'">'. $_company['name']."</a><br>";
                    }
            
            echo "</div>

                    <div class=\"col-md-3 company-links\">";

                    foreach ((array)$_res[1] as $_company) {
                        echo "<a href=\"companyProfile.php?company=".$_company['name'].'">'. $_company['name']."</a><br>";
                    }

            echo   "</div>

                    <div class=\"col-md-3 company-links \">";
                    foreach ((array)$_res[2] as $_company) {
                        echo "<a href=\"companyProfile.php?company=".$_company['name'].'">'. $_company['name']."</a><br>";
                    }
            echo  "</div>
                </div>";
        }

        ?>
     </div>   
    </div>
    <div id="push"></div>
    </div><!-- END wrap -->
    <div id="footer">
        <div class="container">
          <p class="muted credit">&copy; UF KOLLEN 2013</p>
       </div> 
  </div>

     </body>
</html>