<?php
include('connect.php');

$id = $_GET['per_id'];
	$delete = $con->prepare("DELETE FROM hr_employees WHERE per_id = '$id'");
	$delete->execute();
	header('location:home.php');
?>