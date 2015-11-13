<?php 

$to = "hectorgarcia83@gmail.com";
$subject = "Contacto via web";
$body = "Una persona ha solicitado información desde el sitio web.";
$body .= "<br><strong>Nombre: </strong> ".$_POST["nombre"];
$body .= "<br><strong>Email: </strong> ".$_POST["mail"];
$body .= "<br><strong>Teléfono: </strong> ".$_POST["telefono"];
$body .= "<br><strong>Mensaje: </strong> ".nl2br($_POST["mensaje"]);

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: Campestre <no-reply@campestre.com>' . "\r\n";

mail($to,$subject,$body,$cabeceras);
?>