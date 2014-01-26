<?php

	include_once("db.php");

	class cCompanies {

	private $category;
	private $CompanieList;
	private $db;
	private $srcArray;
	public $startWith;


	/* 
	*  Prepare calss with all companies within this category
	*
	*/
	
	public function __construct() {
		$db = new DB(); 
		switch( func_num_args()) {
			case 1:
				break;
			case 2:
				$this->db = new DB();
				$rs = $this->db->getCompanies2( func_get_arg(0), ($this->startWith=func_get_arg(1)) ); //$category, $startwith
				while ( $row = $rs->fetch_array() ) {
					$this->srcArray[] = $row;
				}
				break;
			default:
				throw new Exception("Error Processing Request", 1);
		}
		 // var_dump($this->srcArray);

		}	

	public function __destruct() {
		//do something
	}


	/*
	* Splits the array into $nSplits parts
	* 
	* Returns an 3-dimensional array
	*
	*/
	public function getSplitArray( $nSplits ){
		$nCompaniesInCol = ceil(count($this->srcArray)/$nSplits);
		$numRows = count($this->srcArray);
		$outArray;
		
		// echo "Rows: ".$numRows."<br>";
		// echo "Distribution: ".$nCompaniesInCol."<br>";
		// echo "Splits: ".$nSplits."<br>";

		for ($col=0, $row=0; $col < $nSplits; $col++) { 
			// printf("col %d\n",$col);
			if( $row < $numRows) {
				for ($i = 0; $i < $nCompaniesInCol && $row < $numRows; $row++, $i++) { 
					 $outArray[$col][] = $this->srcArray[$row];
				}
			} else {
				$outArray[$col][] = NULL;
			}
		}
		 // echo count($outArray[0]);
		return $outArray;
	}

	public function getSrcArray() {
		return $this->srcArray;
	}

	public function __call( $method, $args ){
		switch ($method) {
			case 'isEmpty':
				$numargs = count($arg);
				if( $numargs == 1 ) {
					//Returns a boolean value denoting if 
	  				//there are no companies for that company

				} else {
					// Returns a boolean value denoting if 
	  				// the number companies starting with the 
					// inputted first letter is zero

				}
				break;
			
			default:
				throw new Exception("No such method", 1);
				break;
		}
	}

	public static function compareObj($lhs, $rhs) {

		return ($lhs->startWith < $rhs->startWith) ? -1 : 1;
	
	}

}



?>