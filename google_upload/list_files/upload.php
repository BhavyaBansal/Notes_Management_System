<?php
include('submit.php');
include('../dbConfig/connection.php');
$files= array();
$dir = dir('../files');
while ($file = $dir->read()) {
    if ($file != '.' && $file != '..') {
        $files[] = $file;
    }
}
$dir->close();
foreach ($files as $file_name) {
    $file_path = '../files/'.$file_name;
    $q="select * from uploads where file_name='{$file_name}' and file_id is null";
    $result=$database->query($q);
    $row=$result->fetch_assoc();
$location=folderId($service,$row['faculty'],$row['course'],$row['branch'],$row['semester'],$row['subject']);
    $file_id=insert_file_to_drive($service,$file_path,$file_name,(string)$location);

    //updating the google drive file id of file
        $q="update uploads set file_id='{$file_id}' where file_name='{$file_name}' and file_id is null";
        $result=$database->query($q);
    
    

    unlink($file_path);
}
header('Location:../index.php');

?>