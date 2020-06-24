<?php

require_once 'PHPMailerAutoload.php';

function sendmail($email, $sms, $subject) {
    $mail = new PHPMailer;

    $mail->isSMTP();

    $mail->SMTPDebug = 0;

    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "socialfriends786@gmail.com";

    //Password to use for SMTP authentication
    $mail->Password = "social@786";

    //Set who the message is to be sent from
    $mail->setFrom('socialfriends786@gmail.com', 'Lobby');

    //Set an alternative reply-to address
    $mail->addReplyTo('socialfriends786@gmail.com', 'Lobby');

    //Set who the message is to be sent to
    $mail->addAddress($email, 'Lobby');

    //Set the subject line
    $mail->Subject = $subject;

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $message = $sms;
    $mail->msgHTML($message, dirname(__FILE__));

    //Replace the plain text body with one created manually
    $mail->AltBody = 'Lobby';

    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');
    //send the message, check for errors
    if (!$mail->send()) {
        $done = 1;
   //     echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $done = 2;
    //    echo "Message sent!";
    }
    //echo $done;
}

?>