<?php
$first_name = mysql_real_escape_string($_POST["first_name"]);
$last_name  = mysql_real_escape_string($_POST["last_name"]);
$ticket  = mysql_real_escape_string($_POST["ticket"]);
$email  = mysql_real_escape_string($_POST["email"]);
$comments  = mysql_real_escape_string($_POST["comments"]);

email($email, $first_name, $last_name, $comments);

function email($email, $firstname, $lastname, $message) {
    require 'php/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'dreamteamfontysen@gmail.com';                 // SMTP username
    $mail->Password = 'dreamteam1';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('dreamteamfontysen@gmail.com', 'Dream Team');
    $mail->addAddress('dreamteamfontysen@gmail.com');

    $mail->Subject = 'Inquiry';
    $mail->Body = 'From: '.$firstname.' '.$lastname.' <br>Email: '.$email.'<br> Message: '.$message;
    $mail->IsHTML(true);

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Email has been sent';
    }
}

?>