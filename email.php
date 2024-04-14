<?php
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['telefono'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$message = $ POST['comentarios'];

if(empty(trim($name)))
{
    $name='Anonimo';
}
if(empty(trim($lastname)))
{
    $name=' ';
}

//$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; 
charset=uft-8 \r\n";
$header .= "From: $name $lastname <$mail> \r\n";
$header .= "To: fernandoclingo@live.com.ar \r\n"

$message .= "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su teléfono es: " . $phone . "\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Asunto: " . $asunto . " \r\n";
$message .= "Mensaje: " . $ POST['comentarios'] . " \r\n";

$para = 'fernandoclingo@live.com.ar';
$asunto = 'Formulario Web';

mail($para, $asunto, utf8_decode($message),$header);

header("Location:Web.html");
?>
