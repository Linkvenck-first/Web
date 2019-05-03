<?php 
	$errores='';
	$valido=false;
	if (isset($_POST['submit'])){
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$mensaje=$_POST['mensaje'];
		
		$nombre= htmlspecialchars_decode(trim($nombre));
		$mensaje= htmlspecialchars_decode(trim($mensaje));

		if (empty($nombre)) {
			$errores='Escriba un nombre xfa <br>';
		}

		if (empty($correo)) {
			$errores .='Escriba un correo xfa <br>';
		}elseif (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
			$errores .='Escriba un correo valido xfa <br>';
		}

		if (empty($mensaje)) {
			$errores .='Escriba un mensaje xfa <br>';
		}
		if (empty($errores)) {
			$valido=true;
			$destinatario='admin@jasso.me';
			$asunto='correo enviado desde mi formulario';
			$mensajeFinal='De: $nombre<br> 
							correo: $correo<br>
							mensaje: $mensaje';
		}
	}
	require 'index.view.php';
 ?>

