<?php
require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'dreamteamfontysen@gmail.com';                 // SMTP username
        $mail->Password = 'dreamteam1';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('dreamteamfontysen@gmail.com', 'Dream');
        $mail->addAddress('dreamteamfontysen@gmail.com');

        $mail->Subject = 'Account Activation';
        $mail->Body    = 'Hello, ';
        $mail->IsHTML(true); 

        if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Email has been sent';
        }
?>


