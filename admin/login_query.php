<?php

include ('connect.php');

if(isset($_POST['login'])){
$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];

$fetch = $con->prepare("SELECT id FROM admin WHERE admin_user = ? AND admin_pass = ? ");
$fetch->execute(array($admin_user, $admin_pass));
$count = $fetch->rowcount();
$row = $fetch->fetch();

if($count > 0){
	session_start();

	$_SESSION['admin_user'] = $admin_user;

	header('location:home.php');	
}else{
	echo "Invalid username or password";
}
}

?>
