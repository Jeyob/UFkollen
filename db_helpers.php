<?php
	ini_set('display_errors', true);

	include 'db.php';

	class DB_Helper {	

	public static function addCompany( $cname, $cAddress, $cCategory , $clogopath, $pdescp, $plogopath){

		$db = new DB();

		/* returns true if call successful */
		return $db->addCompany( $cname, $cAddress, $cCategory , $clogopath, $pdescp, $plogopath );

	}

	public static function addCategory( $categoryName ) {
		
		$db = new DB();

		$successful = $db->addCategory( $categoryName );
		
		if( !$successful ) {
			return NULL;
		}
		return $successful;
	}

	public static function getCompany( $companyName ) {
		$db = new DB();
		return $db->getCompany( $companyName );
	}

	public static function getRows( $TableName ) {

		$db = new DB();

		return $db->getRows( $TableName );

	}

	public static function getNumRowsTable ( $TableName ) {
		$db = new DB();

		$resultset = $db->getNumRowsTable( $TableName );
		return $resultset->num_rows;

	}

	/*
	*
	*	GetNumRowsCategory
	*	
	*	Param: The category of intreset
	*	
	*	Return: The number of companies within the category
	*
	*/
	public static function getNumCompaniesInCategory( $category ){
		$db = new DB();
		$resultset = $db->getNumCompaniesInCategory( $category ); 
		// echo $resultset['count'];
		// var_dump($resultset);
		//ows = $resultset->fetchArray();
		return $resultset->num_rows;
	}

	public static function getCDFL( $category ) {
		$db = new DB();
		$resultset = $db->getDistinctCompanyFirstLetters( $category );
	
		return $resultset;
	}

	public static function getCDFL_A_C( $category ) {
		$db = new DB();
		$resultset = $db->getDistinctCompanyFirstLetters_AND_Count( $category );
		
		return $resultset;
	}

	public static function verify_username_and_password( $un, $pwd ) {

		$db = new DB();

		$result = $db->verifyCredentials( $un, md5($pwd) );

		return $result;
	}

	}

	
?>