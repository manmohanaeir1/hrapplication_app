<?php
session_start();

include ('connect.php');

if(isset($_POST['login'])){
	$_SESSION['id'] = $_POST['id'];
$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];

$fetch = $con->prepare("SELECT id FROM admin WHERE admin_user = ? AND admin_pass = ? ");
$fetch->execute(array($admin_user, $admin_pass));
$count = $fetch->rowcount();
$row = $fetch->fetch();
$id = $row['id'];
$_SESSION['id'] = $id;
$_SESSION['admin_user'] = $admin_user;
if (isset($_SESSION['admin_user'])) {
	header('location:home.php');
} else {

	header('location:login.php');
}

}
?>
