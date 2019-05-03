<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de contacto</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
<body>
	<div class="contenedor">
		<form method="POST" action="<?php htmlspecialchars_decode($_SERVER['PHP_SELF']); ?>">
			<input type="text" name="nombre" placeholder="nombre" value="<?php if(isset($nombre)){ echo($nombre); }?>">
			<input type="text" name="correo" placeholder="correo" value="<?php if(isset($correo)) echo($correo); ?>">
			<textarea name="mensaje" placeholder="mensaje" <?php if(isset($mensaje)) echo($nombre); ?>></textarea>
			<input type="submit" name="submit" value="Enviar correo">
			<?php  
				if (!empty($errores)){
			?>
					<div class="errores">
						<h1> <?php echo $errores; ?> </h1>
					</div>
			<?php
				}elseif($valido==true) {
			?>	
					<div class="exito">
						<h1> Correo enviado exitosamente</h1>
					</div>	
			<?php	
				}
			?>
			
		</form>
	</div>
</body>
</html>