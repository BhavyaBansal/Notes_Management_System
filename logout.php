<?php
session_start();
if (isset($_SESSION['email']))
{
	session_unset();
	session_destroy();
	// echo "<h4 align='center'>You have been logged out successfully!!!</h4>";
	// echo "<script>alert('You have been logged out successfully!!!')</script>";
	// echo "<script>alert('You have been logged out successfully!!!'');</sript>";
	include('logout_msg.html');
	// include('index.php');
}
else{
include('upload_error.html');
}
?>