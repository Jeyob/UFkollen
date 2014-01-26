<?php 
    session_start();
    require_once 'classes/Membership.php';
    
    $thisPage="AdminPage.php"; 
    $membership = new Membership();
    if( !$membership->confirm_member() ) {
        header("location: index.php");
    }
    
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php include("phpincludes/headinclude.php"); ?>
    </head>

    <body>
     
     <?php include("phpincludes/loginScreen.php"); ?>
     <?php include("phpincludes/navigation.php"); ?>    

     <div class="container" style="margin-top:10%;">
     	<div class="row">
     		
     			<a href="AddCompany.php" class="btn btn-primary btn-lg adm-btn">Företag &raquo;</a>
<hr>
     			<a href="#" class="btn btn-primary btn-lg adm-btn">Kategori &raquo;</a>

     	</div>
     	<div class></div>
     </div>


</html>