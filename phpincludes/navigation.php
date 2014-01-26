<?php 
    //session_start(); 
    //ob_start();
    require_once 'classes/Membership.php';
    require_once 'db_helpers.php';
    ini_set('display_errors', true);
?>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">      
      <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UF KOLLEN</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
       <?php echo ($thisPage == 'index.php') ?
        '<li class="active"><a href="index.php">Startsida</a></li>' :
        '<li><a href="index.php">Startsida</a></li>'; ?>
       <?php echo ($thisPage == 'categories.php') ?    
            '<li class="active"><a href="categories.php">Kategorier</a></li>' :
            '<li><a href="categories.php">Kategorier</a></li>'; ?>
       <?php echo ($thisPage == 'om_oss.php') ?           
            '<li class="active"><a href="om_oss.php">Om oss</a></li>':
            '<li><a href="om_oss.php">Om oss</a></li>'; ?>
        <?php echo ($thisPage == '.php') ?           
            '<li class="active"><a href="kontakt.php">Kontakt</a></li>':
            '<li><a href="kontakt.php">Kontakt</a></li>'; ?>
      <?php echo ($thisPage == 'hetastDennaVecka.php') ?
            '<li class="active"><a href="hetastDennaVecka.php">Om oss</a></li>':
            '<li><a href="#" onClick="location.href=\'hetastDennaVecka.php\';">
                  <img src="img/Favorite_icon.svg" height="20"></a></li>'; ?>
                
       <?php
              $membership = new Membership();
              if( isset($_SESSION['status']) ) {
                echo ( $thisPage == 'AdminPage.php' ) ?
                  '<li class="active"><a href="AdminPage.php">AdminPanel</a></li>':
                  '<li><a href="AdminPage.php">AdminPanel</a></li>';
              }
            ?>         
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-form">
            <li>
              <?php
                if( !empty($_SESSION['status']) && $_SESSION['status'] == 'authorized' ) {
                    echo '<button id="logoutBtn" class="btn btn-primary">Logout</a>';

                } else {
                    echo '<button id="loginBtn" class="btn btn-success">Login</button>';
                }

              ?>
              </li>
          </ul>
            
        </div><!--/.navbar-collapse -->
      </div>
    </div>

