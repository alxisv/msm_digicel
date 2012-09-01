<link rel="stylesheet" type="text/css" href="estilos.css" />
<meta http-equiv="Refresh" content="2;url=index.php">

<?php
include ("funciones.php");
	$mensaje = $_POST['mensaje'];
	$destino = $_POST['destino'];
	$autor =   $_POST['autor'];	
	$r=false;
	$emp=false;
	
	comprobar_vacios($mensaje,$destino,$autor);
	$emp=comprobar_empresa($destino);

	$correo= "503";
	$correo.= $destino ;
	$correo .= "@digimensajes.com";
	
	
	if($emp){ $r=mail($correo,$autor,$mensaje);	}
	else {
		echo $destino." no es numero Digicel valido.";
		exit;
	}
	
	if($r){		echo "Mensaje enviado.";	}
	else{ 		echo "Fail.";	}
	
	
	

function comprobar_vacios($mensaje,$destino,$autor){
			if (empty($mensaje) or empty($destino) or empty($autor))
			{
				   echo "Debes llenar todos los campos.";
				   exit;
		    }
		}

	
	?>