<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];
    
    $to = 'muditj214@gmail.com'; // Replace with your email address
    $subject = 'New Feedback from Contact Form';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = 'From: ' . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Your message has been sent successfully!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
}
?>
