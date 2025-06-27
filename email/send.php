<?php
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($POST["send"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->HOST='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username='';
    $mail->Password='Aditya1286';
}
$mail->SMTPSecure='ssl';
$mail->Port = 465;
$mail->SetFrom('adget1378@gmail.com');
$mail
?>