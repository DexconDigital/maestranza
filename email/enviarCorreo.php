<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['name'];
    $telefono = $_POST['telefono']; 
    $email = $_POST['email'];
    $mensaje = $_POST['message'];
    

}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('Maestranza@Maestranzagestioninmobiliaria.com', 'Maestranza@Maestranzagestioninmobiliaria.com');
    //destinos
    
    //  $mail->addAddress('wdsp9898@gmail.com');
    //  $mail->addAddress('desarrollo2@dexcondigital.com');
    //  $mail->addAddress('comunicaciones@maestranza.com.co');
    
    
    $mail->Subject='Mensaje desde la página web Maestranza Gestión Inmobilairia';
    $mail->Body = '<span>Hola, '.$nombre.' quiere contactarse con ustedes.</span>
                    <h4>Datos de contacto:</h4>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Teléfono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "
    <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../contactanos.php'</script>";
          
}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
