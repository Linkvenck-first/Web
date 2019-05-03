<?php 
	require 'abre_sesion.php';
	require 'conexion_bd.php';
	$query = "select *	 from alumno where matricula='1630045'";
	//echo $query . '<br/>';
	$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
	$fila = $resultado -> fetch_assoc();
	//$coso=$resultado ->num_rows;
	//echo $coso . '<br/>';
	//echo $fila["nombre"] . '<br/>';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 	
 	<title>Página de inicio</title>
 	<meta charset="utf-8">
 </head>
 <body>
 	<div class="contenedor">
		<?php require 'menu.php'; ?>
	 	<p>
	 		<?php echo "<h1>" .$fila["nombre"] . " " . $fila["apellido_P"] . " " . $fila["apellido_M"] . "</h1>"  ?>
	 	</p>
	 	<section>
	 		<br>
	 		<?php 
	 		echo " 
	 		<p>
	 			Apellido Paterno: " . $fila["apellido_P"] . "<br>
	 			Apellido Materno: " . $fila["apellido_M"] . "<br>
	 			Nombre(s): " . $fila["nombre"] . "<br>
	 			Matricula: " . $fila["matricula"] . "<br>
	 			Domicilio: " . $fila["domicilio"] . "<br>
	 		</p>"  
	 		?>
	 	</section>
 		
 	</div>
 
 </body>
 </html>