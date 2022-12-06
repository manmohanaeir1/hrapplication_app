<?php
session_start();

include('connect.php');

if(isset($_POST['save'])) {
		
	$per_salary = $_POST['per_salary'];

	$qyery = $con->prepare("SELECT * FROM hr_jobs");
	$qyery->execute();
	$row = $qyery->fetch();
	$min_salary = $row['min_salary'];
	$max_salary = $row['max_salary'];

	if($per_salary >= $min_salary && $per_salary <= $max_salary){
		$per_firstname = $_POST['per_firstname'];
		$per_lastname = $_POST['per_lastname'];
		$per_email = $_POST['per_email'];
		$per_hire_data  = $_POST['per_hire_data'];
		$per_phone = $_POST['per_phone'];
		$job_id = $_POST['job_id'];
		$dept_id = $_POST['dept_id'];
		$manager_id = $_POST['mgr_id'];

		$user_name = $_SESSION['name();
		'];

		$add_personnel = $con->prepare("INSERT INTO hr_employees(per_firstname, per_lastname, per_email,per_salary, per_hire_data, per_phone, job_id, dept_id, mgr_id, user_name) 
		VALUES(?,?,?,?,?,?,?,?,?,?)");

		$add_personnel->execute(array($per_firstname, $per_lastname,$per_email,$per_salary,$per_hire_data, $per_phone, $job_id, $dept_id, $manager_id,$user_name));
		header('location:all_hr_application.php');
	}else{
		echo "Salary is not in range";
	}
}
?>