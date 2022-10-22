<?php
$name = $_POST['name'];
$visitor email = $_POST['email'];
$subject = $_POST['purchase'];
$message = $_POST['message'];

$email_from = 'info@GMMB Luxury Empire.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"
               "User Email: $visitor_email.\n".
               "User Purchase": $message.\n";


$to = 'nathanaelohiro@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);
               
header("location: contact.html");
?>