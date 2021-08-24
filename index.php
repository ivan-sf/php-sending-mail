
<form action="mail.php" method="POST" onsubmit="enviar_ajax(); return false" id="form1">
    <input type="text" placeholder="Nombre" name="nombre" ><br>
    <input type="text" placeholder="Correo" name="correo" ><br>
    <input type="text" placeholder="Telefono" name="telefono" ><br>
    <input type="text" placeholder="Mensaje" name="mensaje" ><br>
    <input type="submit" value="Enviar mensaje">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
function enviar_ajax(){	

	$.ajax({
	type: 'POST',
	url: 'mail.php',
	data: $('#form1').serialize(),
	success: function(respuesta) {
		if(respuesta=='ok'){
		alert('enviado');
		}
		else {
		alert('error');
		}
	}
	});
}
</script>