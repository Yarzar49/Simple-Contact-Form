<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate form data
if(empty($name) || empty($email) || empty($message)) {
	echo "Please fill in all required fields.";
	exit;
}

// Send email
$to = "yarzarfcb@gmail.com";
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

if(mail($to, $subject, $body, $headers)) {
	echo "Thank you for contacting us!";
} else {
	echo "There was an error sending your message. Please try again later.";
}
?>
