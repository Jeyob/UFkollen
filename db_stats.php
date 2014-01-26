<?php
	
	include_once('db.php');

		function incrementLike( $companyName ){
			
			$db = new DB();
			$db->query("UPDATE Companystats 
							   SET nlikes = nlikes + 1 
							   WHERE cpyid in 
							   			(select id 
							   			from companies 
							   			where name = '".$companyName."')");
		}

		 function incrementViews( $companyName ){
		
			$db = new DB();
			$db->query("UPDATE Companystats 
							   SET nclicks = nclicks + 1 
							   WHERE cpyid in 
							   		   (select id 
							   			from companies 
							   			where name = '".$companyName."')");	

		}

		function getNlikes( $companyName ) {

			$db = new DB();
			$res = $db->query("SELECT nlikes 
							   FROM Companystats CMPS 
							   INNER JOIN companies CMP 
							   ON CMP.id = CMPS.cpyid
							   WHERE CMP.name = '".$companyName."'");
			$res = $res->fetch_array();
			return $res['nlikes'];

		}

		function getNviews( $companyName ){

			$db = new DB();
			$res = $db->query("SELECT nclicks 
							   FROM Companystats CMPS 
							   INNER JOIN companies CMP 
							   ON CMP.id = CMPS.cpyid
							   WHERE CMP.name = '".$companyName."'");

			$res = $res->fetch_array();
			return $res['nclicks'];

		}
		

?>