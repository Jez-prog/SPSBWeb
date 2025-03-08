<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gamil.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

$mail->Username = "jezreeleguillermo@gmail.com";
$mail->Password = "zjdh gyod gnhy qfua";

$mail->setFrom($email, $name);
$mail->addAddress("jezreeleguillermo@gmail.com", "Jezreel");
$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

