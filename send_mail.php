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
    $mail->Username   = getenv('EMAIL_USERNAME'); 
    $mail->Password   = getenv('EMAIL_PASSWORD'); 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('msakthivel.bear@gmail.com', 'Your Name');
    $mail->addAddress('RECIPIENT_EMAIL@gmail.com', 'My Love'); // CHANGE THIS TO HER EMAIL

    $mail->isHTML(true);
    $mail->Subject = 'I Love You';
    $mail->Body    = 'Happy Valentine Day My Love. I love you so much. ❤️';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
