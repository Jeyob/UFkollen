<?php
	ini_set('display_errors', true);
	
	class DB extends mysqli {
		 const DB_HOST = "127.0.0.1";
		 const DB_USER = "jonas";
		 const DB_NAME = "UFkollen";
		 const DB_PASSWD = "123wrath,.-";


		public function __construct() {

			parent::__construct(DB::DB_HOST, DB::DB_USER, DB::DB_PASSWD, DB::DB_NAME);

			if (mysqli_connect_error()) {
            	die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        	}
		}

		public function __destruct() {
			$this->close();
		}
		/*
		*
		*	Adds a company to the database
		*
		*	$cname: company name
		*	$cdesc: a description if the company
		*	$clogopath: the path to the logo
		*
		*/
		public function addCompany( $cname, $cAddress, $cCategory , $clogopath, $pdescp, $plogopath ){

			return $this->query("INSERT INTO companies (name, address, logopath, productpath, productdesc, categoryid) 
								VALUES ('".$cname."','"
										 .$cAddress."','"
										 .$clogopath."','"
										 .$plogopath."','"
										 .$pdescp."','"
										 .$cCategory."')");

		}

		public function getRows( $tableName ) {
			return $this->query("select * from ".$tableName);
		}

		public function addCategory( $categoryName ){

			return $this->query("INSERT INTO Categories(name) VALUES ('".$categoryName."')");

		}

		public static function getNumRowsTable ( $TableName ) {
			return $this->query("select count(*) as count from '".$TableName."'");
		}

		public function getNumCompaniesInCategory( $category ) {
			return $this->query("select c.name as count from companies c inner join Categories cg
								on c.categoryid = cg.id  where
								cg.name = '".$category."'");
		}

		public function getDistinctCompanyFirstLetters( $category ) {


			return $this->query("SELECT
  								UPPER(substr(CMP.name, 1,1)) AS First_char
  								FROM Categories C inner join companies CMP
  								on C.id = CMP.categoryid 
  								WHERE C.name = '".$category."' 
  								GROUP BY UPPER(substr(CMP.name, 1,1))
  								ORDER BY first_char ASC");
		}

		public function getDistinctCompanyFirstLetters_AND_Count ( $category ){

			return $this->query(" SELECT
  								UPPER(substr(CMP.name, 1,1)) AS First_char,
  								COUNT(*) as Count
								FROM Categories C inner join companies CMP
								on C.id = CMP.categoryid
								WHERE C.name = '".$category."'
								GROUP BY UPPER(substr(CMP.name, 1,1))
								ORDER BY first_char collate nocase ASC");

		}

		public function getCompanies( $category ){
			
			return $this->query(" SELECT CMP.*  FROM 
								  Categories C INNER JOIN 
								  companies CMP ON
								  C.id = CMP.categoryid WHERE 
								  C.name = '".$category."'" );
		}

		public function getCompanies2( $category, $startWith ){
			return $this->query(" SELECT CMP.*  FROM 
								  Categories C INNER JOIN 
								  companies CMP ON
								  C.id = CMP.categoryid WHERE 
								  C.name = '".$category."' AND
								  CMP.name like '".$startWith."%'");

		}


		public function getCompany( $companyName ) {

			$res = $this->query(" SELECT CMP.*, CAT.name as categoryName FROM 
								  companies CMP INNER JOIN 
								  Categories CAT ON 
								  CMP.categoryid = CAT.id WHERE 
								  CMP.name = '". $companyName ."'");
			return $res;
		}

		public function verifyCredentials( $un, $pwd ) {

			$query = " SELECT * FROM Users WHERE 
						username='".$un."' AND
						password='".$pwd."' limit 1 ";

			$res = $this->query( $query );

			if( $res->num_rows > 0 ) {
				$res->free();
				return true;
			} else {
				return false;
			} 

		}
	}



?>