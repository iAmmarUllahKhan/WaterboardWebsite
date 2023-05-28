<?php
session_start();
include ("config.php");

$action = $_POST['action'];
if (!isset($action)) {
	$action = $_GET['action'];	
}

if (!isset($action)) {
	header("location: accountantlogin.php");
}


switch ($action) {


	case 'update_bill':
		$customer_id = $_POST['customer_id'];
		$id = $_POST['id'];
		$units = $_POST['units'];
		 $rate= 10; 
		$tax= 10;
		$final_bill= $units*$rate+$tax;
echo " customer id:".$customer_id;
echo "bill id:".$id;
echo " units: ".$units;
echo " tax:".$tax;
echo " rate:".$rate;
echo " finalbill:".$final_bill;				
		
	
	
		// write them in database
		$sql = "update bill SET 
		customer_id = '$customer_id',
		units = '$units',
		rate = '$rate',
		tax = '$tax',
		final_bill = '$final_bill'
		WHERE id='$id'
        ";
        
        
		if(mysqli_query($conn, $sql))
		{
            header("location: accountantoperation.php?msg=customer has been updated.");
        }
        else{
            echo "error";
        }
	break;	


    
	}
    ?>