<?php
include ('connect.php');
session_start();
//destroy the session
if(session_destroy()) {
//redirect to login page
header("location: index.php");
}
?>