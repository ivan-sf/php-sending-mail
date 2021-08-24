<?php 
$destinatario = "ivansantander2020@gmail.com"; 
$asunto = "Titulo del mensaje"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Hola mundo!</h1> 
<p> 
<b> Lorem ipsum dolor sit amet consectetur </b> adipisicing elit. Nulla velit, dignissimos hic suscipit, aut id eum temporibus assumenda tenetur ea rem aperiam, quidem animi. Voluptate vero aut porro eum totam!
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Ivan Santander <ivansantander2020@gmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: ivansantander2020@gmail.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: ivansantander2020@gmail.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: darisantander.02@gmail.com\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: idsantanderfigueroa@gmail.com,ihosting14@gmail.com\r\n"; 



if(mail($destinatario,$asunto,$cuerpo,$headers)){
   echo"OK";
}else{
   echo"ERROR";
}
?>