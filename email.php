
<?php
/*$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['telefono'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$message = $_POST['comentarios'];

if(empty(trim($name)))
{
    $name='Anonimo';
}
if(empty(trim($lastname)))
{
    $name=' ';
}

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
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

header("Location:envio_exitoso.html");
?>*/



$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['telefono'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$message = $_POST['comentarios'];

if(empty(trim($name))) {
    $name='Anonimo';
}
if(empty(trim($lastname))) {
    $lastname=''; // Aquí se corrigió para asignar el valor a $lastname en lugar de $name
}

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=utf-8 \r\n"; // Se corrigió 'uft-8' a 'utf-8'
$header .= "From: $name $lastname <$mail> \r\n"; // Se corrigió para manejar el caso en que $lastname está vacío
$header .= "To: fernandoclingo@live.com.ar \r\n"; // Se agregó un punto y coma al final

$message .= "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su teléfono es: " . $phone . "\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Asunto: " . $asunto . " \r\n";
$message .= "Mensaje: " . $_POST['comentarios'] . " \r\n"; // Se corrigió $ POST a $_POST

$para = 'fernandoclingo@live.com.ar';
$asunto = 'Formulario Web';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:envio_exitoso.html");

?>