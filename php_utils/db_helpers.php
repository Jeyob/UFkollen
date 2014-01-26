<?php
	include 'db.php';
	
	public function addCompany($cname, $cCategory, $cdesc, $clogopath){
		$db = new DB();
	}
 
	public function addCategory( $categoryName ) {
		echo "ADD called";
		$db = new DB();

		$successful = $db->addCategory( $categoryName );
		
		echo $successful;

		if( !$successful ) {
			return NULL;
		}
		return $successful;
	}

?>