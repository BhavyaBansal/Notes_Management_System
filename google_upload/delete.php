<?php
include_once('dbConfig/connection.php');
if(isset($_GET['del']))
{
    unlink($_GET['del']);
    $q="delete  from uploads where id={$_GET['id']}";
    $database->query($q);
}
header('Location:index.php');

?>