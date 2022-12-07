<?php
session_start();
include('connect.php');
if (isset($_POST['save'])) {
	$per_salary = $_POST['per_salary'];
	$qyery = $con->prepare("SELECT * FROM hr_jobs");
	$qyery->execute();
	$row = $qyery->fetch();
	$min_salary = $row['min_salary'];
	$max_salary = $row['max_salary'];
	$job_name = $row['job_name'];
	if ($per_salary >=  $min_salary && $per_salary <= $max_salary) {
		$per_firstname = $_POST['per_firstname'];
		$per_lastname = $_POST['per_lastname'];
		$per_email = $_POST['per_email'];
		$per_hire_data  = $_POST['per_hire_data'];
		$per_phone = $_POST['per_phone'];
		$job_id = $_POST['job_id'];
		$dept_id = $_POST['dept_id'];
		$manager_id = $_POST['mgr_id'];
		$user_name = $_SESSION['user_name'];
		$add_personnel = $con->prepare("INSERT INTO hr_employees(per_firstname, per_lastname, per_email,per_salary, per_hire_data, per_phone, job_id, dept_id, mgr_id, user_name) 
		VALUES(?,?,?,?,?,?,?,?,?,?)");
		$add_personnel->execute(array($per_firstname, $per_lastname, $per_email, $per_salary, $per_hire_data, $per_phone, $job_id, $dept_id, $manager_id, $user_name));
		header('location:all_hr_application.php');
	} else {
		$qyery = $con->prepare("SELECT * FROM hr_jobs");
		$qyery->execute();
		$row = $qyery->fetchAll();

?>
		<h1 style="color: red;">Salary is not in range!! </h1>
		<p style="color: red;">Please enter valid salary. </p>

		<?php foreach ($row as $key => $row) { ?>
			<h3>Salary Range OF <?php echo $row['job_name']  . "  " . "Between " . $row['min_salary'] . " - " . $row['max_salary']; ?> </h3>
		<?php } ?>
		<a href="home.php"><button>back</button></a>

<?php }
} ?>