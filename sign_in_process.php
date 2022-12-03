<?php
ob_start();
session_start();
if(isset($_POST['btn2']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(!empty($email) && !empty($password))
	{
		$con=new mysqli('localhost','root','','nms');
 		$q="select * from signupnms where email='{$email}'";
 		$result=$con->query($q);
 		if ($result->num_rows>0)
 		{
 			$row=$result->fetch_assoc();
			 if(password_verify($password,$row['password']))
			 {
				 if($row['status']=='active')
				{
					$_SESSION['email']=$row['email'];
 				$_SESSION['password']=$row['password'];
				header('Location:sidebar.php');
				}
				else
				{
					include('invalid.html');
				}
			 }
			 else
			 {
				 include('invalid.html');
			 }
 			
 		}
 		else
 		{
    // echo '<script>alert("Invalid username and password!!")</script>';  
 		include('invalid.html');
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