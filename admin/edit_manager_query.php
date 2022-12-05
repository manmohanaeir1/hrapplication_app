<?php
include('connect.php');

if(isset($_POST['update'])) {
	$mgr_id = $_POST['mgr_id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];

	$add_personnel = $con->prepare("UPDATE hr_manager SET first_name = ? , last_name = ? WHERE mgr_id = ?");
	$add_personnel->execute(array($first_name, $last_name, $mgr_id));
	header('location:manager_table.php');

}
?>