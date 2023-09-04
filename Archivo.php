<?php
$name = $_POST['firstname'];
$name = $_POST['lastname'];
$phone = $_POST['telefono'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$message = $ POST['comentarios'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su teléfono es: " . $phone . "\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Asunto: " . $asunto . " \r\n";
$message .= "Mensaje: " . $ POST['comentarios'] . " \r\n";

$para = 'fernandoclingo@live.com.ar';
$asunto = 'Formulario Web';

mail($para, $asunto, utf8_decode($message),$header);

header("Location:Web.html");
?>
