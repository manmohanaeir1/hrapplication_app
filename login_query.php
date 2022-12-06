<?php
session_start();
require("header.php");

include('connect.php');

if (isset($_POST['login'])) {
	$_SESSION['id'] = $_POST['user_id'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	//check login details
	$fetch = $con->prepare("SELECT user_id FROM user_login WHERE user_name = ? AND password = ? ");
	$fetch->execute(array($user_name, $password));
	$row = $fetch->fetch();
	$user_id = $row['user_id'];
	$_SESSION['user_id'] = $user_id;
	$_SESSION['name'] = $user_name;
	//check session
	if (isset($_SESSION['name'])) {
		header('location:home.php');
	} else {

		header('location:login.php');
	}
}
