<?php
include('connect.php');

if(isset($_POST['update'])) {
	$job_id = $_POST['job_id']; 
	$job_name = $_POST['job_name'];
	$min_salary = $_POST['min_salary'];
	$max_salary = $_POST['max_salary'];

	$add_personnel = $con->prepare("UPDATE hr_jobs SET job_name = ?  , min_salary= ?, max_salary=?  WHERE job_id = ?");
	$add_personnel->execute(array(  $job_name,$min_salary, $max_salary, $job_id));
	header('location:job_table.php');

}
?>