<?php
	ini_set('display_errors', true);
	
	define("FTP_USER", "ufkollen");
	define("FTP_PASSWD", "sommar2013");
	define("FTP_SERVER","ftp.s1186079-26454.crystone.net");
	define("FTP_BASE", "/webspace/httpdocs/ufkollen.se/img/uploads/");
	define("ftpBin", FTP_BINARY);
	define("ftpAsc", FTP_ASCII); 


/**
* 
*/
class FTP_HELPER
{
	
	public static function putFile($filePath, $targetFilename) {

		// set up basic connection
		$conn_id = ftp_connect(FTP_SERVER);

		// login with username and password
		$login_result = ftp_login($conn_id, FTP_USER, FTP_PASSWD);

		//echo $login_result;

		// upload a file
		$remote_file = FTP_BASE.basename($targetFilename);
		
		//echo $remote_file;

		if (ftp_put($conn_id, $remote_file, $filePath, FTP_BINARY)) {
 			//echo "successfully uploaded $file\n";
		} else {
 			echo "There was a problem while uploading $file\n";
		}

		// close the connection
		ftp_close($conn_id);

	}

	public static function deleteFile($filePath) {


	}
}


?>