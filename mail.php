<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$formcontent = " From: $name \n Phone: $phone \n Message: $message";
$recipient = "easilver59@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
