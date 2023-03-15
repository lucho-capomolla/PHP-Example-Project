<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/vendor/PHPMailer/src/Exception.php';
require '/vendor/PHPMailer/src/PHPMailer.php';
require '/vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
  
  $mail->isSMTP();
  $mail->Host = 'Your mail server'
  $mail->SMTPAuth = true;
  $mail->Username = 'username';
  $mail->Password = 'password';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->setFrom('sender@mail.com');
  $mail->addAdress('recipient@mail.com');
  $mail->Subject = 'A mail sent from PHP';
  $mail->Body = 'Hello from PHP!';

  $mail->send();

  echo "Message sent!";

} catch (Exception $e) {

    echo "Message not sent: ", $mail->ErrorInfo;

}
