<?php
	
	class DB extends SQLite3 {

		const DB_PATH = "/var/www/Edens/UF_kollen_db.db";	
		public function __construct() {

			$this->open($DB_PATH, SQLITE3_OPEN_READWRITE);

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
		public function addCompany( $cname, $cdesc, $clogopath ){



		}


		public function addCategory( $categoryName ){

			return $this->exec("INSERT INTO categories(name) VALUES ('".$categoryName."')");

		}
	}



?>