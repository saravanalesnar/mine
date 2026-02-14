<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // This connects the library

$mail = new PHPMailer(true);

try {
    // 1. Server Settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'msakthivel.bear@gmail.com'; 
    $mail->Password   = 'uqnpftqooqmnflot'; // Your 16-digit App Password
    $mail->SMTPSecure = 'ssl';                  // Required for Gmail
    $mail->Port       = 465;                    // Required for Gmai

    // 2. Recipients
    $mail->setFrom('msakthivel.bear@gmail.com', 'Sakthi');
    $mail->addAddress('msakthivel.bear@gmail.com'); // Change this to her email!

    // 3. Content
    $mail->isHTML(true);
    $mail->Subject = 'A Message from the Stars';
    $mail->Body    = 'Happy Valentine Day My Love. I love you so much. ❤️';

    $mail->send();
    echo 'SUCCESS';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
