<?php

include('connect.php');
$qyery = $con->prepare("SELECT * FROM hr_jobs");
$qyery->execute();
$row = $qyery->fetch();
$min_salary = $row['min_salary'];
$max_salary = $row['max_salary'];
$job_name = $row['job_name'];

if (isset($_POST['save'])) {
	$per_id = $_POST['per_id'];
	$per_salary = $_POST['per_salary'];
	if ($_POST['per_salary'] >= $row['min_salary'] && $_POST['per_salary'] <= $row['max_salary']) {
		$per_id = $_POST['per_id'];

		$per_firstname = $_POST['per_firstname'];
		$per_lastname = $_POST['per_lastname'];
		$per_email = $_POST['per_email'];
		$per_phone = $_POST['per_phone'];
		$job_id = $_POST['job_id'];
		$dept_id = $_POST['dept_id'];
		$mgr_id = $_POST['mgr_id'];
		session_start();

		$user_name = $_SESSION['user_name'];
		$update = $con->prepare(" UPDATE hr_employees SET per_firstname= ?, per_lastname = ?, per_email=?,per_salary=?, per_phone=?, job_id=?, dept_id=?, mgr_id=?, user_name=?  WHERE per_id = ?");

		$update->execute(array($per_firstname, $per_lastname, $per_email, $per_salary, $per_phone, $job_id, $dept_id, $mgr_id, $user_name, $per_id));
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