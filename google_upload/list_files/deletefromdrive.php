<?php
include('../checkadminlogin.php');
include('../dbConfig/connection.php');
include('submit.php');

if(isset($_GET['id']))
{
    $q="delete from uploads where file_id='{$_GET['id']}'";
    $result=$database->query($q);
    $service->files->delete($_GET['id']);
}
header('Location: ../alluploads.php');

?>