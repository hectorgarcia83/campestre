<?php 

$to = "hectorgarcia83@gmail.com";
$subject = "Contacto via web";
$body = "Una persona ha solicitado información desde el sitio web.";
$body .= "<br><strong>Nombre: </strong> ".$_POST["nombre"];
$body .= "<br><strong>Email: </strong> ".$_POST["mail"];
$body .= "<br><strong>Teléfono: </strong> ".$_POST["telefono"];
$body .= "<br><strong>Mensaje: </strong> ".nl2br($_POST["mensaje"]);

mail($to,$subject,$body,"From:noreply@elcampestre.com");
?>