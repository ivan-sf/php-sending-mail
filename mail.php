<?php 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = "ivansantander2020@gmail.com"; 
// $destinatario = "jherrera@be4tech.co"; 
$asunto = "Contacto Web Be4tech"; 
$cuerpo = ' 
<html> 
<head>   
   <title>Han realizado una pregunta en be4tech</title> 
</head> 
<body> 
<h1>Datos del remitente!</h1> 
<b>Nombre:</b> '.$nombre.'<br>
<b>Correo:</b> '.$correo.'<br>
<b>Telefono:</b> '.$telefono.'<br>
<b>Mensaje:</b> '.$mensaje.'
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: $nombre <$correo>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: $correo\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: $correo\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: $correo\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: $correo,ihosting14@gmail.com\r\n"; 



if(mail($destinatario,$asunto,$cuerpo,$headers)){
   echo"ok";
}else{
   echo"error";
}
?>