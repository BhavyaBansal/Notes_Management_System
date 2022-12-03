<?php
include 'google_upload/dbConfig/connection.php';
if(isset($_GET['token']))
{
    $q="update signupnms set status='active' where token='{$_GET['token']}'";
    $result=$database->query($q);
    if($result)
    {
        include('activation.html');
    }
    else
    {
        include('activation_error.html');
    }
}
else
{
    header('Location: login.html');
}
?>