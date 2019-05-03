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
			
			<input type="text" name="apellidoP" placeholder="apellidoP" value="<?php if(isset($apellidoP)) echo($apellidoP); ?>">
			

			<input type="text" name="apellidoM" placeholder="apellidoM" value="<?php if(isset($apellidoM)) echo($apellidoM); ?>">

			<input type="date" name="fecha" value="<?php if(isset($fecha)){ echo($fecha); }?>">
			
			<input type="radio" name="sexo" value="H">Masculino
			
			<input type="radio" name="sexo" value="M">Femenino

			<input type="text" name="estado" placeholder="estado" value="<?php if(isset($estado)) echo($estado); ?>">



			<input type="submit" name="submit" value="Obtener Curp">
			



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
						<h1> <?php echo $curp; ?></h1>
					</div>	
			<?php	
				}
			?>
			
		</form>
	</div>

	
</body>
</html>