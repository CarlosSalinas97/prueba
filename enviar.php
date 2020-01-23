<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['telefono'];
$asunto = $_POST['asunto'];
$empresa = $_POST['mensaje'];

$header = 'From: '.$email." \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .="Su email es: " . $email . " \r\n";
$mensaje .="Asunto: " . $asunto ." \r\n";
$mensaje .="Telefono: " . $tel . " \r\n";
$mensaje .="Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .="Enviado el " . date('d/m/Y', time());

$para = 'carlisd75@gmail.com';
$asunto = 'Mensaje página web';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='URL DE MI PAGINA';</script>";

?>