<?php 
	require 'abre_sesion.php';
	
	$query = "select *	 from Calificaciones where matricula_alu='$_SESSION['usuario']'";
	//echo $query . '<br/>';
	$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Página 1</title>
 	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 	
	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <body>
 	<div class="contenedor">
		<?php require 'menu.php'; ?>
	 	<p>
	 		<h1>Calificaciones</h1> <br>
	 	</p>
	 	<section>
	 		<p>
	 			<?php 
	 				if ($resultado->num_rows > 0) {
					    // output data of each row
					    while($fila = $resultado->fetch_assoc()) {
					        echo "Materia: " . $fila[""]. "  Califcacion: " . $fila["calificacion"]. " " . "<br>";
					    }
					} else {
					    echo "0 results";
					}
	 			?>
	 		</p>
	 	</section>
 		
 	</div>
 
 </body>
 </html>