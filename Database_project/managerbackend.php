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

	

    case 'add_customer':

		// take all form values
	
		$name = $_POST['name'];
		$house_number = $_POST['house_number'];
		$phone = $_POST['phone'];
		$area = $_POST['area'];
		$address = $_POST['address'];
	    $email = $_POST['email'];
        $password = $_POST['pass'];



		// write them in database
		$sql = "INSERT INTO customer SET 
		cusname = '$name',
		house_number = '$house_number',
		phone = '$phone',
		addr = '$address',
		area = '$area',
		email = '$email',
		pass = '$password'
		";
		$res = mysqli_query($conn, $sql);
		echo "|$res|";
		if($res){
		header("location: manageroperation.php?msg=customer has been added.");}
		
		$sq = "INSERT INTO bill SET 
        customer_id= (select id from customer where cusname = '$name' and 
        house_number = '$house_number' and
        phone = '$phone' and 
        addr = '$address' and
        area = '$area' and
        email = '$email' and
        pass = '$password'
        )";
		$result = mysqli_query($conn, $sq);
		echo "|$result|";
		if($result){
			header("location: manageroperation.php?msg=customer has been added to bill table.");}

	break;


	case 'update_customer':
		$id = $_POST['id'];
		$cusname = $_POST['cusname'];
		$house_number = $_POST['house_number'];
		$phone = $_POST['phone'];
		$area = $_POST['area'];
		$addr = $_POST['address'];
	    $email = $_POST['email'];
        $password = $_POST['pass'];
	
		
	
	
		// write them in database
		$sql = "update customer SET 
		cusname = '$cusname',
		house_number = '$house_number',
		phone = '$phone',
		area='$area',
		addr = '$addr',
		email = '$email',
		pass = '$password'
		WHERE id='$id'
        ";
        
        
		mysqli_query($conn, $sql);
		header("location: manageroperation.php?msg=customer has been updated.");
	
	break;	


    case 'delete_customer':
		
		$id = $_POST['id'];
		$sql = "DELETE FROM customer WHERE id='$id'";
		if(mysqli_query($conn, $sql)){
		header("location: manageroperation.php?msg=customer has been deleted.");}

	break;

    case 'update_complain':
        $complain_id = $_POST['id'];
        $status = $_POST['status'];
    

        $sql = "Update complain SET 
		status = '$status' where id='$complain_id'
		";
        mysqli_query($conn, $sql);
		header("location: managercomplain.php?msg=status of complain has been updated.");

	break;

	}
    ?>