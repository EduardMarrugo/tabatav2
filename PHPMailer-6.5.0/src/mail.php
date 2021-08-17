<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Create a new PHPMailer instance
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
$mail = new PHPMailer();

$mail->isSMTP();

$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'pruebatabatav2@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'Tabata123';


require_once (__DIR__."/../../controlador/mdb/mdbUsuario.php");
$correo = $_POST['correo'];
$user = recuperarConCorreo($correo);

if($user != null){
    
    //Set who the message is to be sent from
    $mail->setFrom('pruebatabatav2@gmail.com', 'Magic Mailer');
    //Set an alternative reply-to address
    $mail->addReplyTo('pruebatabatav2@gmail.com', 'Magic');
    //Set who the message is to be sent to
    $mail->addAddress($user->getCorreo(), 'correotemporal');
    //Set the subject line
    $mail->Subject = 'Your password';
    $mail->Body = "Your password is ".$user->getPassword();
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
    header("Location: ../../vista/login.php");
}else{
    //Si el usuario no existe se vuelve a mostrar el login
    echo "<script>console.log('No existe Correo' );</script>";
    header("Location: ../../vista/login.php");
}




//header("Location: ../../vista/login.php");