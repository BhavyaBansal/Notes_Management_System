<?php
$to_email = "bhavyabansal0916@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
// $headers = "From: notesmanagementsystem@gmail.com";
$check=mail($to_email, $subject, $body);
if(mail($to_email, $subject, $body)) {
    echo "Email successfully sent to $to_email...";
    print_r($check);

} else {
    echo "Email sending failed...";
}