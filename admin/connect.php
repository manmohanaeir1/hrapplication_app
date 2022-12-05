<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";

	try {
		$con = new PDO("mysql:host=$host;dbname=hrapplication_app", $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'Connection Failed:' . $e->getMessage();
	}
?>