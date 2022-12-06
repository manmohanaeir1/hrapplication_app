<?php
require("header.php");

include('connect.php');

if (isset($_POST['login'])) {
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	//check login details
	$fetch = $con->prepare("SELECT user_id FROM user_login WHERE user_name = ? AND password = ? ");
	$fetch->execute(array($user_name, $password));
	$count = $fetch->rowcount();

	if($count > 0) { 
		//if login details are correct	
		session_start();
 
		$_SESSION['user_name'] = $user_name;
		header('location:home.php');
	} else {
		echo "Invalid username or password";
	}
}
