<?php include 'funciones.php';
if(isset($_POST['autor'])){ $r= enviarMensaje($_POST['autor'], $_POST['destino'], $_POST['mensaje']); if($r){$message='Mensaje enviado.'; }}
?>
<form name="formulario" action="" method="post"> <?php if(!empty($r)){echo $message.'<br />';} ?> <input id ="autor" class="texto" type="text"  name="autor" size="10" value="<?php if(isset($_POST['autor'])){echo $_POST['autor'];}?>" maxlength="8" placeholder="Autor" /><br />
<input id ="destino" type="text" placeholder="Destino" class="texto"  name="destino" size="10" maxlength="8" value="<?php if(isset($_POST['destino'])){echo $_POST['destino'];}?>" /><br /> 
	<textarea cols="25" rows="6" class="texto" name="mensaje"  placeholder="Mensaje" id="mensaje"
	onKeyDown="Contador(this.form.mensaje,this.form.marcador,110);"
	onKeyUp="Contador(this.form.mensaje,this.form.marcador,110);"
	></textarea>
	<br /> 
	<input id="enviar" value="ENVIAR" type="submit" />  
	<br /> 
	<input readonly type="text" id="marcador" name="marcador" size="1"  value="110" />Caracteres <br>
</form>
<script type="text/javascript" >
function Contador(CajaDeTexto, marcador, limiteMaximo) {
if (CajaDeTexto.value.length > limiteMaximo) 
CajaDeTexto.value = CajaDeTexto.value.substring(0, limiteMaximo);
else 
marcador.value = limiteMaximo - CajaDeTexto.value.length;
}
</script>
</html>