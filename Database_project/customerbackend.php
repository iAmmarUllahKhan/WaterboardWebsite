<?php
session_start();
include ("config.php");

$action = $_POST['action'];
if (!isset($action)) {
	$action = $_GET['action'];	
}

if (!isset($action)) {
	header("location: Managerlogin.php");
}


switch ($action) {

	

    case 'launch_complain':

		// take all form values
	
		$cid = $_SESSION['id'];
		$complain = $_POST['description'];
		$dot = $_POST['date'];
		
		// write them in database
		$sql = "INSERT INTO complain SET 
		customer_id = '$cid',
		complain_txt = '$complain',
		date_of_submit = '$dot' 
		";
		mysqli_query($conn, $sql);
		header("location: customercomplain.php?msg=complain has been added.");

	break;


	case 'view_water_timings':
		// $customer_id = $_POST['customer_id'];
		
	
		
	
	
		// // write them in database
		// $sql = "select timing from watertimings where area = (select area from customer where id='$customer_id') 
		// ";
        
		// $result = mysqli_query($conn, $sql);
        // $total = mysqli_num_rows($result);
        //  echo ' $row['timing']';
	
	break;	


    case 'view bill':
		
		// $cid = $_GET['cid'];

		// $sql = "select * FROM bill WHERE customer_id= '$cid' ";
		// $result=mysqli_query($conn, $sql);
		// $row = mysqli_fetch_assoc($result);
        // echo ' $row['units'] ';
        // echo ' $row['tax'] ';
        // echo ' $row['rate'] ';
        // echo ' $row['final_bill'] ';



	break;



	}
    ?>