<?php 
error_reporting(0); 
$Email = $_POST['Email']; 
$Nombre = $_POST['Nombre']; 
$Empresa = $_POST['Empresa']; 
$Mensaje = $_POST['Mensaje'];  

$header = 'From: ' . $Email . " de la Pagina web " "\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $Nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $Email . " \r\n"; 
$mensaje .= "su empresa " . $_POST['Empresa'] . " \r\n";  
$mensaje .= "Dijo: ".$_POST['Mensaje'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'info@grintsys.com'; 
$asunto = 'COntactado por sitio'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 
echo 'mensaje enviado correctamente'; 
?>