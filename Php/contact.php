<?php
// Include PHPMailer autoload file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php mailer/src/Exception.php';
require 'php mailer/src/PHPMailer.php';
require 'php mailer/src/SMTP.php';

if (isset($_POST["submit"])) 
{
    // PHPMailer configuration
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Your SMTP host (for Gmail, use smtp.gmail.com)
    $mail->SMTPAuth = true;
    $mail->Username = 'mjmjajaj715@gmail.com'; // Your Gmail address
    $mail->Password = ' rgna azkx zlha lykr'; // Your Gmail password or app password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to for Gmail SMTP is 465

    $mail->setFrom('mjmjajaj715@gmail.com');
    $mail->addAddress($_POST["email"]); 
    // Replace with your email address

    $mail->Subject = $_POST["Name"];
    $mail->Body = $_POST["Comment"];

    $mail->send();
    try {
        // Send mail
        echo '<p>Your message has been sent successfully!</p>';
    } 
    catch (Exception $e) 
    {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
        // Uncomment the line below for debugging (do not use in production)
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>