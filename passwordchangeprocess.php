<?php
ob_start();
session_start();
if(isset($_POST['btn']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(!empty($email) && !empty($password))
	{
		$con=new mysqli('localhost','root','','notesmanagement');
 		$q="update signupnms set password='{$password}' where email='{$email}'";
 		$result=$con->query($q);
 		echo "$result";
 		if ($result->num_rows>0)
 		{
 			// $row=$result->fetch_assoc();
 			// $_SESSION['email']=$row['email'];
 			header('Location:passchangesuccessful.html');
 		}
 		else
 		{
    	echo '<script>alert("Invalid Email!!")</script>'; 
 		// include('invalid.html');
 		}
	}
	else
	{
		echo '<script>alert("Fill both the fields!!")</script>';  
		include('login.html');
	}
}
else
{
	header('Location:login.html');
}
?>