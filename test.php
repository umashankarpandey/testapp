/* send mail using php mailer */

function send_mail($to, $subject, $body) { 
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "XXXXXXXXXXXXXXXXXXXX";
    $mail->Password = "XXXX_password";
    $mail->setFrom('XXXXXXXXXXXXXXXXXXXX', 'Your Name');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->send();
}        