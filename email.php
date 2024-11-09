<?php
if(isset($_POST['submitbutton']))
{
    $to      = 'nicholasamely@gmail.com';
    $subject = 'SARDOG Website Test Email';
    $message = 'You have submitted the SARDOG Contact form.';
    $headers = 'From: namely@mail.fresnostate.edu' . "\r\n" .
        'Reply-To: namely@mail.fresnostate.edu' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}