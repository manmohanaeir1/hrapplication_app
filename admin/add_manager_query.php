<?php
include('connect.php');
if(isset($_POST['save'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];



	$add_personnel = $con->prepare("INSERT INTO hr_manager (first_name, last_name) VALUES (?, ?)");
	$add_personnel->execute(array($first_name, $last_name));
	header('location:manager_table.php');
}
?>