<?php 

    $to      = 'luzyour078@gmail.com';
    $subject = 'Teste de envio de e-mail';
    $message = 'Olá, você é programador web?';
    $headers = 'From: fluiz04989@gmail.com' . "\r\n" . 
            'Reply-To: fluiz04989@gmail.com';

    mail($to,$subject, $message, $headers);

    echo "Enviado!";

?>