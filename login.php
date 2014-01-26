<?php
	session_start();

	ini_set('display_errors', true);
	require_once 'classes/Membership.php';

	$membership = new Membership();

	if( isset( $_GET['status'] ) && $_GET['status'] == 'loggedout') {
		$membership->log_user_out();
	}

	if( $_POST && !empty( $_POST['username'] ) && !empty( $_POST['password']) ) {
		$response = $membership->validate_user( $_POST['username'], $_POST['password'] ); 
	}else {
		header("location: index.php");
	}

?>