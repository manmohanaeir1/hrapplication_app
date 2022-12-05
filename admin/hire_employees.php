<?php
include('connect.php');

if(isset($_GET['per_id'])) {
	$per_id = $_GET['per_id']; 
    
	$update = $con->prepare("UPDATE hr_employees SET status = '1'  WHERE per_id = $per_id");
	$update->execute();
	header('location:home.php');
    

}
?>