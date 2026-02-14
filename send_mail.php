<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    
    // REPLACE THESE TWO LINES
    $mail->Username   = 'msakthivel.bear@gmail.com'; 
    $mail->Password   = 'uqnp ftqo oqmn flot'; // Use an app password for Gmail

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('msakthivel.bear@gmail.com', 'Sakthi');
    $mail->addAddress('msakthivel.bear@gmail.com', 'Sakthi'); // Change to her email later!

    $mail->isHTML(true);
    $mail->Subject = 'I Love You';
    $mail->Body    = 'Happy Valentine Day My Love. I love you so much. ❤️';

    $mail->send();
    echo 'SUCCESS';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}