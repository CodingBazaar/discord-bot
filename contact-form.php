<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'tonystark.is.idol.1@gmail.com';

$email_subject = "Your discord bot inquiry";

$email_body = "User name: $name \n
               User email: $visitor_email \n
               User message: $message \n";

$to = "exploremore.somethingmore@gmail.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: discord-bot.html");