<?php

$destino="chorizoazul30@gmail.com";
$asunto=$_POST["area"];
$nombre=$_POST["Nombre"];
$correo=$_POST["Correo"];
$telefono=$_POST["Telefono"];
$archivo=$_POST["Archivo"];

$contenido="Nombre: " . $nombre . "\nArea de interes: " . $asunto . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono;





use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0 ;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'chorizoazul30@gmail.com';                     // SMTP username
    $mail->Password   = 'Politecnico3001';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('from@example.com', $nombre);
    $mail->addAddress('chorizoazul30@gmail.com');     // Add a recipient
   
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $contenido;
    
    $mail->send();
    echo 'Mensaje Enviado';
} 

catch (Exception $e) {
    echo 'Hubo un error en el mensaje: ', $mail->ErrorInfo;
}


?>