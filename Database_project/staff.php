<?php
session_start();
include ("config.php");



$action = $_POST['action'];
if (!isset($action)) {
	$action = $_GET['action'];	
}

if (!isset($action)) {
	header("location: register.php");
}


switch ($action) {
	case 'add_staff':

		// take all form values
		$staffname = $_POST['staffname'];
		$email = $_POST['email'];
		$dpt = $_POST['dpt'];
		$password = $_POST['password'];
		
	
		// write them in database
		$sql = "INSERT INTO staff SET 
		email = '$email',
        pass = '$password',
        staff_name = '$staffname',
		department = '$dpt'
		
		";
	 if(mysqli_query($conn, $sql))
     header("location: register.php?msg=Staff has been added.");
        break;
    
        case 'update_staff':
	
            $id = $_POST['id'];
            $staff_name = $_POST['staffname'];
            $department = $_POST['dpt'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
        
        
            // write them in database
            $sql = "UPDATE staff SET 
            email = '$email',
            pass = '$pass',
            staff_name = '$staff_name',
            department = '$department' 
            WHERE id=$id
            ";
            mysqli_query($conn, $sql);
            header("location: register.php?msg=Student has been updated.");
        
        break;
        
        case 'delete_staff':
		
            $id = $_GET['id'];
    
            $sql = "DELETE FROM staff WHERE id=$id";
            mysqli_query($conn, $sql);

            header("location: register.php?msg=Student has been deleted.");
    
        break;


    
    
    }

    ?>