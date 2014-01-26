<!DOCTYPE html>
<?php $thisPage="categories.php"; ?> 
<?php ini_set('display_errors', true); ?>
<?php include_once("db_helpers.php"); ?> 
<?php include_once("db_stats.php"); ?>

<?php

?>

<html class="no-js">
    <head>
        <?php include_once("phpincludes/headinclude.php"); ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#like-anchor").click(function (e) {
                    e.preventDefault();
                    var _company_ = $("#companyName").html();
                    var url = "db_stats.php";

                    $.post( url, { company: _company_ } );

            });
            
        });
        </script>
    </head>

    <body>
        <?php include_once("phpincludes/loginScreen.php"); ?>
        <?php include_once("phpincludes/navigation.php"); ?>
        <div id="backDiv" class="jumbotron" > </div>
        
        <div class="container content-holder">
        
          <div class="bodyDiv">
    		<div class="companyHeader">
    			<img border="0" src="img/google1.jpg" class="logo" id="companyLogo" width="300">
    		</div>
            <hr>
    		<div id="companyWrapper">
    			<div id="companyOverview">
    				<div id="companyOverview_content">
    					<h2>Info</h2>
    					<dl>
    						<dt>Företag</dt>
    						<dd>
    							<span id="companyName"><input type="text" value="Google" /></span>
    						</dd>
    						<dt>Säte</dt>
    						<dd>
    							<span><input type="text" value="ZeroPoint"/></span>
                                <!-- <span>Hagalundsgatan 31, 5tr</span> -->
    						</dd>
    						<dt>Kategori</dt>
    						<dd>
    							<span><input type="text" value="Tjänster" /></span>
    						</dd>
    					</dl>
    				</div>
    			</div>

    			<div id="companyPresentationWrapper">

	    			<div id="companyPresentation" itemprop="description"> 
	    				<textarea rows="50" cols="97"></textarea>
	    			</div>
	    		</div>
            </div> 
    		</div> <!-- end bodyDiv-->
            
            <div id="company-sidecol">
                <div id="company-sidecol_content">
                <dl>
                    <dt>Sidvisningar</dt>
                    <dd style="margin-top:0.5em;">
                        <span>3</span>
                    </dd>
                    <dt>Gillar</dt>
                    <dd style="margin-top:0.5em;">
                        <img id="like-img" src="img/like.png" height="12"><span>3</span><span id="like-btn"><a id="like-anchor" href="#">Gilla</a></span>
                    </dd>
                </dl>
            </div>
        </div>
        </div>
	 	<hr>

     	<footer>
        
        <p>&copy; UF KOLLEN 2013</p>
      	
      	</footer>
    	
    	</div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>


</html>