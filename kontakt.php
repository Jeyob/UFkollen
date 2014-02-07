<?php $thisPage="kontakt.php"; ?>
<html class="no-js">
    <head>
       <?php include("phpincludes/headinclude.php"); ?>
    </head>
    <body>
    <?php include("phpincludes/loginScreen.php"); ?>

    <?php include("phpincludes/navigation.php"); ?>

    <div id="wrap">

    <div class="container">
    <div class="panel panel-default">
    	<div class="panel-body">
    		<p class="text-error">* Saknar förnamn</p>
    		<p class="text-error">* Saknar efternamn</p>
    		<p class="text-error">* Saknar emailadress</p>
    		<p class="text-error">* Du får inte skicka tomma mail</p>
    	</div>
    </div>

   <form class="well well-lg" method="post" action="email.php">
  	<div class="row">
		<div class="span3">
			<label class="control-label">Förnamn</label>
			<input id="firstname" type="text" name="firstname" class="form-control" placeholder="Your First Name">
			<label class="control-label">Efternamn</label>
			<input id="lastname" type="text" name="lastname" class="form-control" placeholder="Your Last Name">
			<label class="control-label">Email Address</label>
			<input id="email" type="text" name="email" class="form-control" placeholder="Your email address">
		</div>
		<div class="span5">
			<label class="control-label">Meddelande</label>
			<textarea name="message" id="message" class="form-control" rows="15"></textarea>
		</div>
	
		<input style="margin-top:10px;" type="submit" class="btn btn-primary pull-right" />
	</div>
</form>
    	

    </div> <!-- end container -->


    	<div id="push"></div>

    </div><!-- end wrap -->


    <div id="footer">
        <div class="container">
          <p class="muted credit">&copy; UF KOLLEN 2013</p>
       </div> 

</div>
</body>

</html>