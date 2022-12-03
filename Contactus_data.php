<?php
    if(isset($_POST['btn'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $text=$_POST['text'];

        $to='notesmanagementsystem@gmail.com';
        $subject="Contact_Us_Details";
        $message="<b>Name:</b>".$name."\n". "<b>Phone:</b>".$phone."\n". "<b>Text:</b> "."\n\n".$text;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1> Sent Successfully.... Thank you"." ".$fullname.", We will contact you shortly</h1>";
        }
        else{
            echo "Something getting wrong.......";
    }
}
?>