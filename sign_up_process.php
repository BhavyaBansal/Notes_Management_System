<?php
session_start();
if (isset($_POST['btn']))
{
$fname=$_POST['name'];
$lname=$_POST['dob'];
$uname=$_POST['phone_no'];
$email=$_POST['email'];
$pass=$_POST['password'];
$hash_password=password_hash($pass,PASSWORD_DEFAULT);
$tcode=$_POST['teacher_code'];
   if (!empty($fname) && !empty($lname) && !empty($uname) && !empty($pass) && !empty($email))
   {
     $con=new mysqli('localhost','root','','nms');
     if ($con->connect_error) {
       echo "problem in connection";
       include('login.html');
     }
     $token=bin2hex(random_bytes(15));
     $q="insert into signupnms(name,dob,phone_no,email,password,teacher_code,token) values('{$fname}','{$lname}','{$uname}','{$email}','{$hash_password}','{$tcode}','{$token}')";
     $result=$con->query($q);
     $subject='Email Verification';
     $txt="Hi {$fname} click open this link to activate your account http://localhost/nms2/activation.php?token={$token}";
     $status=mail($email,$subject,$txt);
     if($result && $status)
     {
	      // header('Location:login.html');
      //echo "User Registered Successfully!!";
        // echo '<script>alert("User Registered Successfully!!")</script>'; 
        include('register_msg.html');
     }
     else
     {
	     echo "<h3 style='color:red;position:absolute;'>Problem in Record Insertion...!!</h3>";
	     include('login.html');
     }
   }
   else
   {
	echo "<h2 style='color: red'>All Fields are required</h2>";
	include('login.html');
   }
}
else
{
	header('Location:login.html');
}
?>
