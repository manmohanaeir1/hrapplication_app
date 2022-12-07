<?php
include('connect.php');
if(isset($_POST['save'])) {
	$job_name = $_POST['job_name'];
	$job_code = $_POST['job_code'];
	$min_salary = $_POST['min_salary'];
	$max_salary = $_POST['max_salary'];
	$add_job = $con->prepare("INSERT INTO hr_jobs (job_name,job_code, min_salary, max_salary) VALUES (?,?,?,?)");
	$add_job->execute(array($job_name, $job_code, $min_salary ,$max_salary));
	header('location:job_table.php');
}
