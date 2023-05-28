<?php
session_start();
include ("config.php");

$action = $_POST['action'];
if (!isset($action)) {
	$action = $_GET['action'];	
}

if (!isset($action)) {
	header("location: customerlogin.php");
}


switch ($action) {

	case 'login':

		// login process
	
		
		$username = $_POST['email'];
		$pwd = $_POST['password'];

		$sql = "SELECT id FROM customer WHERE email = '$username' and pass = '$pwd'";
		$result = mysqli_query($conn,$sql);
		$res = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $res['id'];
      
      $count = mysqli_num_rows($result);
      if($count > 0) {
		
		$_SESSION['logged'] = $true;
		
		header("location: customerhome.php");
	 }else {
		header("location: customerlogin.php");
	 }
  

		
				break;


	case 'logout':

		session_destroy();
		header("location: customerlogin.php");

	break;
    }

    ?>