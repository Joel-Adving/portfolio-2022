<?php
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

$recipient = "joel.adving@gmail.com";
$subject = "Contact Form | Joel Adving";

$headers = "From: $name <$email>\r\n";

mail($recipient, $subject, $message, $headers);
?>
