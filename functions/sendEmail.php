<?php

function sendEmail($toEmail,$fromEmail,$sujetEmail,$messageEmail){
    $to =  $toEmail;
    $sujet =$sujetEmail;
    $message = $messageEmail;
    $headers = 'From:'.$fromEmail.''."\r\n".'Reply-To'.$fromEmail."\r\n".'X-mailer:PHP/'.phpversion();
    
    mail($to,$sujet,$message,$headers);
        
}

?>