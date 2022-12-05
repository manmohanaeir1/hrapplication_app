<?php
require("header.php");

include('connect.php');
session_start();
if (isset($_POST['login'])) {
	$_SESSION['id'] = $_POST['user_id'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	//check login details
	$fetch = $con->prepare("SELECT user_id FROM user_login WHERE user_name = ? AND password = ? ");
	$fetch->execute(array($user_name, $password));
	
	if ($fetch->rowCount() > 0) {
		$_SESSION['name'] = $user_name;
		$_SESSION['id'] = $user_id;


		header("location: home.php");
		$_SESSION['success'] = "You are logged in";
	} else {
		header("location: login.php");
		$_SESSION['error'] = "<div class='alert alert-danger' role='alert'>Oh snap! Invalid login details.</div>";
	}
}
