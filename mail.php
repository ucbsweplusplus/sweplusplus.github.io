<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent="From: $name \n Message: $message";
$recipient = "ucb.swe.plus@gmail.com";
$subject = "$subject";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>