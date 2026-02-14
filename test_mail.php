<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Manually check if the file exists
if (!file_exists('vendor/autoload.php')) {
    die("Error: The 'vendor' folder is missing! You must run 'composer require phpmailer/phpmailer'");
}

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'msakthivel.bear@gmail.com'; 
    $mail->Password = 'PASTE_YOUR_16_DIGIT_APP_PASSWORD_HERE'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('msakthivel.bear@gmail.com');
    $mail->addAddress('msakthivel.bear@gmail.com');

    $mail->Subject = 'Test';
    $mail->Body    = 'If you see this, the PHP is working!';
    $mail->send();
    echo "<h1>IT WORKED!</h1>";
} catch (Exception $e) {
    echo "<h1>FAILED</h1>";
    echo "Error: " . $mail->ErrorInfo;
}
