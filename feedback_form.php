<?php

#Receive user input
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

#Filter user input
function filter_email_header($form_field) {
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email  = filter_email_header($email);

#Send email
$headers = "From: $email";
$sent = mail('rraithel@gmail.com', 'Feedback Form Submission', $message, $headers);
