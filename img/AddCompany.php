<?php 
    session_start(); 
    //ob_start();
    require_once 'classes/Membership.php';
    include_once("db_helpers.php");
    ini_set('display_errors', true); 

    $membership = new Membership();
    if( !$membership->confirm_member() ){
        header("location: index.php");
    }
    $thisPage="AdminPage.php"; 
?>

<!DOCTYPE html>
<html class="no-js">

<head>
    <?php include("phpincludes/headinclude.php"); ?>


    <script type="text/javascript">
    $(document).ready(function() { 
       $("#uploadedLogo").change(function(){
            var imgPath = 'img/';
            var filePath = $(this).val().replace(/C:\\fakepath\\/i, '');
            var d = new Date();
            $("#c_logo").prop('src',imgPath+filePath+"?"+d.getTime());
            $(this).val(imgPath+filePath);
        });

        $("#productImg").change(function(){
            var imgPath = 'img/';
            var filePath = $(this).val().replace(/C:\\fakepath\\/i, '');
            var d = new Date();
            $("#productImg_preview").prop('src',imgPath+filePath+"?"+d.getTime());
            $(this).val(imgPath+filePath);
        });

    });
    function fadeInSuccessNotification() {
        $("#Success_notification").fadeIn(300);
        $("#Success_notification > img").fadeIn(1000);
    }

    </script>
</head>
<body>
  <?php include("phpincludes/loginScreen.php"); ?>
  <?php include("phpincludes/navigation.php"); ?>  
 
 <div id="Success_notification">
     <img src="img/Green_Checkmark.svg" width="300">
 </div>

 <div id="contentWrapper" class="container">

   <form id="companyAddForm" action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    
    <?php 
    	
    	if(!isset($_POST['SubmitCompany'])) {
    ?>

     	<div class="container">  
     	  <div class="col-md-4" style="margin-top:30px;">
            <img id="c_logo" src="#" width="300" height="300" alt="company logo" class="img-rounded">
            <input id="uploadedLogo" name="uploadedLogo" type="file">
     	  </div>
          <div id="form_left_col" class="col-md-6" style="margin-top:40px;">		
            <div class="input-group-lg">
     		 <input type="text" id="companyName" name="companyName" class="form-control" placeholder="Företagsnamn"></br>
     		 <input type="text" id="companyAddress" name="companyAddress" class="form-control" placeholder="Address"></br>
     		 <select id="category" name="category" class="input-group-lg form-control">
     			<option value="none">-Välj-</option>
     				<?php 
     					$_categories = DB_Helper::getRows("Categories");
     					if($_categories) {
     						while ($res = $_categories->fetch_array()) {
     							echo "<option value=".$res['id'].">".utf8_encode($res['name'])."</option>";
     						}
     					}
     				?>
     		 </select>
            </div><!-- END input-group -->
          </div> <!-- END form_left_col -->
        </div> <!-- END container -->

        <div class="container">
     		<div class="col-md-4" style="margin-top:15px;">
                <img id="productImg_preview" name="productImg_preview" class="img-rounded" src="#" width="300" height="300" alt="produktbild" >
     		    <input type="file" name="productImg" id="productImg" >
            </div>    
            <div class="col-md-6">     	
     		  <textarea id="pDescription" form="companyAddForm" class="form-control" placeholder="Produkt Beskrivning" name="pDescription" rows="30"></textarea>
     		</div>
        </div>
    <div class="container">    
	<input id="companySubmitBtn" name="SubmitCompany" type="submit" value="Lägg till" class="btn btn-lg btn-success submit-btn">
    </div>
 </form>
</div>
<?php 

	}  else { //If we get here then we clicked on submit 
		

		$clogopath="uploads/";
		$clogopath= $clogopath.basename($_FILES['uploadedLogo']['name']);
		
		$plogopath="uploads/";
		$plogopath= $plogopath.basename($_FILES['productImg']['name']);

		$pdescp=$_POST['pDescription']; //Företags beskriving

		$cname=$_POST['companyName']; //Företagsnamn

		$cAddress = $_POST['companyAddress'];

		$cCategory = $_POST['category']; //Kategori

		try {
			//TODO: kolla om företaget inte redan finns
			$success = DB_Helper::addCompany( $cname, $cAddress, $cCategory , $clogopath, $pdescp, $plogopath );
            
            if( $success) {
               header('Refresh: 3; URL=http://localhost/Edens/AddCompany.php');
               echo "<script>
                        $(function(){
                            fadeInSuccessNotification();
                        });
                    </script>";
            }else {
               die("Request failed");
            }


		}catch( Exception $e) {
			//TODO: inform
		}

		// DB_Helper::addCategory( "Hem" );

	}

?>

</body>
</html>