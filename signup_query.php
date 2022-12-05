<?php
include('connect.php');
if(isset($_POST['signup'])) {
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	$add_personnel = $con->prepare("INSERT INTO user_login  (user_name, email, password) VALUES (?,?,?)");
	$add_personnel->execute(array($user_name, $email,$password));

	header('location:index.php');
}
?>