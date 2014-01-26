<?php
	require_once 'db_helpers.php';
	class Membership {

		function validate_user($username, $password) {

			$authRes = DB_Helper::verify_username_and_password( $username , $password );
			if( $authRes ) {
				$_SESSION['status'] = 'authorized';
				header("location: AdminPage.php");
			} else {
				header("location: index.php");
			}
		}

		function log_user_out() {

			if( isset($_SESSION['status'])) {
				unset($_SESSION['status']);
			}

			if( isset( $_COOKIE[session_name()])) {
				setcookie(session_name(),'',time() - 10000);
				session_destroy();
				header("location: index.php");
			}
		}

		function confirm_member() {
			return $_SESSION['status'] == 'authorized';
			}
		
	}

?>

