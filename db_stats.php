<?php
	ini_set('display_errors', true);
	include_once('db.php');
	
	class DB_STATS {
		
		public static function incrementLike( $companyName ){
			
			$db = new DB();
			$db->query("UPDATE Companystats 
							   SET nlikes = nlikes + 1 
							   WHERE cpyid in 
							   			(select id 
							   			from companies 
							   			where name = '".$companyName."')");
		}

		public static function incrementViews( $companyName ){
		
			$db = new DB();
			$db->query("UPDATE Companystats 
							   SET nclicks = nclicks + 1 
							   WHERE cpyid in 
							   		   (select id 
							   			from companies 
							   			where name = '".$companyName."')");	

		}

		public static function getNlikes( $companyName ) {

			$db = new DB();
			$res = $db->query("SELECT nlikes 
							   FROM Companystats CMPS 
							   INNER JOIN companies CMP 
							   ON CMP.id = CMPS.cpyid
							   WHERE CMP.name = '".$companyName."'");
			$res = $res->fetch_array();
			return $res['nlikes'];

		}

		public static function getNviews( $companyName ){

			$db = new DB();
			$res = $db->query("SELECT nclicks 
							   FROM Companystats CMPS 
							   INNER JOIN companies CMP 
							   ON CMP.id = CMPS.cpyid
							   WHERE CMP.name = '".$companyName."'");

			$res = $res->fetch_array();
			return $res['nclicks'];

		}
	}

?>