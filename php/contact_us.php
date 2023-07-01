<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
$mail = new PHPMailer(true);

$user = $_POST['email'];
$text = $_POST['text'];

$email = 'admin@domain.com';



$to = 'boatengtechgroup@gmail.com';
$subject = 'Contact us';

$message = '<h2>Email:</h2> ' . $user . '<br><br><h2>Message:</h2> ' . $text;



try{
$mail->setFrom($email);
    $mail->addAddress($to);     //Add a recipient
    $mail->addReplyTo($email);
    

  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $text;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>