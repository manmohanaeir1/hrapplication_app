<?php
session_start();

include('connect.php');

if(isset($_POST['save'])) {
	$per_id = $_POST['per_id'];
	$per_firstname = $_POST['per_firstname'];
	$per_lastname = $_POST['per_lastname'];
	$per_email = $_POST['per_email'];
	$per_salary = $_POST['per_salary'];
	$per_phone = $_POST['per_phone'];
	$job_id = $_POST['job_id'];
	$dept_id = $_POST['dept_id'];
	$mgr_id = $_POST['mgr_id'];
	$user_name = $_SESSION['name'];
	$update = $con->prepare(" UPDATE hr_employees SET per_firstname= ?, per_lastname = ?, per_email=?,per_salary=?, per_phone=?, job_id=?, dept_id=?, mgr_id=?, user_name=?  WHERE per_id = ?"); 

	$update->execute(array($per_firstname, $per_lastname,$per_email,$per_salary, $per_phone, $job_id, $dept_id, $mgr_id,$user_name,$per_id ));
	header('location:all_hr_application.php');
}
?>