<?php 
	require 'abre_sesion.php';
	require 'conexion_bd.php';	
	$usuario=$_SESSION['usuario'];
	$query = "select * from info_Usuario where curp='$usuario'";
	echo $query . '<br/>';
	echo $_SESSION['usuario'];
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
	 		<?php echo "<h1>" .$fila["nombre"] . " " . $fila["apellido_p"] . " " . $fila["apellido_m"] . "</h1>"  ?>
	 	</p>
	 	<section>
	 		<br>
	 		<?php 
	 		echo " 
	 		<p>
	 			Apellido Paterno: " . $fila["apellido_p"] . "<br>
	 			Apellido Materno: " . $fila["apellido_m"] . "<br>
	 			Nombre(s): " . $fila["nombre"] . "<br>
	 			Fecha de nacimiento: " . $fila["fecha_nac"] . "<br>
	 			Estado: " . $fila["estado"] . "<br>
	 		</p>"  
	 		?>
	 	</section>
 		
 	</div>
 
 </body>
 </html>