<?php
session_start();
include ("config.php");

$action = $_POST['action'];
if (!isset($action)) {
	$action = $_GET['action'];	
}

if (!isset($action)) {
	header("location: login.php");
}


switch ($action) {

	case 'login':

		// login process
		$user = "admin@gmail.com";
		$password = "admin";
		
		$username = $_POST['email'];
		$pwd = $_POST['password'];
		
		if ($username == $user && $pwd == $password) {
		 session_regenerate_id();
		 $_SESSION['logged'] = true;
		 header("location: dashboard.php");
		} else {
		 header("location: login.php");
		}		
		
	break;


	case 'logout':

		session_destroy();
		header("location: login.php");

	break;
    }

    ?>