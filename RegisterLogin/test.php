<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// require 'vendor/autoload.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'botappappbot2@gmail.com';                     // SMTP username
    $mail->Password   = 'NathanielOngYiiTak';                               // SMTP password
    $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged ;; PHPMailer::ENCRYPTION_STARTTLS
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above ;; 587

    //Recipients
    $mail->setFrom('boatppappbot2@gmail.com', 'Test Bot');
    $mail->addAddress('hinathanielong@gmail.com', 'Nathaniel Ong Yii Tak');     // Add a recipient
    $mail->addReplyTo('boatppappbot2@gmail.com', 'Test Bot');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
