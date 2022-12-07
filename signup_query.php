<?php
include('connect.php');
if(isset($_POST['signup'])) {
	$username = $_POST['user_name'];
	$qyery = $con->prepare("SELECT * FROM user_login");
	$qyery->execute();
	$row = $qyery->fetch();

	$check = $con->prepare("SELECT * FROM user_login WHERE user_name = ?");
	$check->execute(array($username));
	$count = $check->rowcount();
	if ($count > 0) {
		echo "Username already exists";
	} else {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$add_user = $con->prepare("INSERT INTO user_login(user_name, email, password) VALUES(?,?,?)");
		$add_user->execute(array($username, $email, $password));
		header('location:index.php');
	}
	
	
}
?>