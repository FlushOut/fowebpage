<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "contact@flushoutsolutions.com"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre $email\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contact";
$cuerpo = "<strong>Name:</strong> ".$nombre."<br>";
$cuerpo .= "<strong>Email:</strong> ".$email."<br>";
$cuerpo .= "<strong>Phone:</strong> ".$phone."<br>";
$cuerpo .= "<strong>Message:</strong> ".$mensaje;
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombre != '' && $email != '' && $mensaje != ''){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
}
?>