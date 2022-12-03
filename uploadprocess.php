<?php
include_once("google_upload/dbConfig/connection.php");
session_start();
if (isset($_POST['upload'])) {
  $allowed_types = array('pdf');
  $faculty =strtolower ($_POST['faculty']);
  $course = strtolower($_POST['course']);
  $branch = strtolower($_POST['branch']);
  $semester = strtolower($_POST['semester']);
  $subject = strtolower($_POST['subject']);
  $maxSize = 20 * 1024 * 1024;
  $flag = true;
  foreach ($_FILES['file']['tmp_name'] as $key => $value) {

    $file_name = $_FILES['file']['name'][$key];
    $file_type = $_FILES['file']['type'][$key];
    $ext = substr(strrchr($file_name, '.'), 1);
    $file_size = $_FILES['file']['size'][$key];

    if (!in_array(strtolower($ext), $allowed_types)) {
      $_SESSION['err_msg'] = $file_name . " cannot be uploaded because of invalid format" . strtolower($ext);
      global $flag;
      $flag = false;
    } elseif ($file_size > $maxSize) {
      global $flag;
      $flag = false;
      $_SESSION['err_msg'] = $file_name . " size cannot be greater than 20mb";
    } else {
      $file_tem_loc = $_FILES['file']['tmp_name'][$key];
      // checking if the file exists 
      if (file_exists("google_upload/files/" . $file_name)) {
        global $ext;
        $file_name = basename($file_name, $ext) . rand(1, 100) .'.'.$ext;
      }

      //checking if file exists in database or not

     

      // 


      //
      $file_store = "google_upload/files/" . $file_name;
      $status =  move_uploaded_file($file_tem_loc, $file_store);
      if ($status) {

        $q = "insert into uploads(file_name,file_size,faculty,course,branch,semester,subject,uploaded_by_email) values('$file_name',$file_size*0.001,'$faculty','$course','$branch','$semester','$subject','{$_SESSION['email']}')";
        $result = $database->query($q);
        if ($result) {
          $mail_subject = count($_FILES['file']['tmp_name']).' Notes Uploaded';
          global $message;
          $message.= $file_name.' ';
        }
        $_SESSION['err_msg'] = "your file have been uploaded successfully first we will check it and then we upload it.";
      } else {
        $_SESSION['err_msg'] = "There is some technical issue in uploading this file please try after sometime.";
      }
    }
  }
  $message.=" notes has been uploaded for approval by {$_SESSION['email']}
  faculty $faculty
  course $course
  branch $branch
  semester $semester
  subject $subject
  ";
  $mailsend=mail('notesmanagementsystem@gmail.com',$mail_subject,$message);
  if($mailsend)
  {
    echo 'mail sent successfully';
  }
  else
  {
    echo 'problem in mail sending'; 
  }
}
header("Location:upload.php");
