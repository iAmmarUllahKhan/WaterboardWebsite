<?php
session_start();
include ("config.php");

$action = $_POST['action'];
if (!isset($action)) {
	$action = $_GET['action'];	
}

if (!isset($action)) {
	header("location: managerloginNew.php");
}


switch ($action) {

	case 'login':

		// login process
	
		
		$username = $_POST['email'];
		$pwd = $_POST['password'];

		$sql = "SELECT id FROM staff WHERE email = '$username' and pass = '$pwd'";
		$result = mysqli_query($conn,$sql);
	
      
      $count = mysqli_num_rows($result);
      if($count > 0) {
		
		$_SESSION['logged'] = $true;
		
		header("location: managerHome.php");
	 }else {
		header("location: managerloginNew.php");
	 }
  

		
				break;
				


	case 'logout':

		session_destroy();
		header("location: managerloginNew.php");

	break;
    }

    ?>