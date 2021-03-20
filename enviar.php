<?php
$nombre = $_POST['yourname'];
$mail = $_POST['correoelectronico'];
$numtel = $_POST['numerotelefono'];
$empresa = $_POST['textarea'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su telefono es: " . $numtel . " \r\n";
$mensaje .= "Mensaje: " . $_POST['textarea'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'carlosthecultbitz@gmail.com';
$asunto = 'MENSAJE DE PAGINA WEB SAN FRANCISCO DE ASIS';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
echo'<script type="text/javascript">
    alert("Se registro su consulta!");
    window.location.href="index.html";
    </script>';
?>