<link rel="stylesheet" type="text/css" href="estilos.css" />
<?php
function enviarMensaje($autor,$destino,$mensaje){
	$r=false;
	$emp=false;
	comprobar_vacios($mensaje,$destino,$autor);
	$emp=comprobar_empresa($destino);
	$correo= "503";
	$correo.= $destino ;
	$correo .= "@digimensajes.com";
	if($emp){ $r=mail($correo,$autor,$mensaje);	}
	else { echo $destino." no es numero Digicel valido.";echo '<br /><a href="javascript:history.back(1)">Regresar</a>';exit;}
	if($r){		return true;	}
	else{ 		return false;	}
}	
function comprobar_empresa($numero){
		if(is_numeric($numero)){
			$numero2= substr("$numero", 0, 2); // devuelve primeros 2 digitos
			$numero4= substr("$numero", 0, 4); // devuelve primeros 4 digitos
			(int) $numero4;		#><--Convierto en entero 
			if ($numero2=="73"){return true;}
			if ($numero4>="7400" and $numero4<="7449"){return true;}
			elseif($numero4>="7460" and $numero4<="7469") {return true;}
			elseif($numero4>="7760" and $numero4<="7779") {return true;}
			elseif($numero4>="7970" and $numero4<="7979") {return true;}
		}
		else{ return false;}
}
function comprobar_vacios($mensaje,$destino,$autor){
	if (empty($mensaje) or empty($destino) or empty($autor)){
		echo "Debes llenar todos los campos.";
		echo '<br /><a href="javascript:history.back(1)">Regresar</a>';
		exit;}
}