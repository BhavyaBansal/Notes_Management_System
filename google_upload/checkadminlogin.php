<?php

session_start();
if(!isset($_SESSION['email']))
{
    header("Location: ../index.php");
}
if($_SESSION['email']!='notesmanagementsystem@gmail.com')
{
    header("Location: ../index.php");
}

?>