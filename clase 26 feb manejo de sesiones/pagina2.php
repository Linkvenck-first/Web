<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		$nombre=$_SESSION['nombre'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Página 2</title>
	<meta charset="utf-8">
</head>
<body>
	<p>
		<h1>Pagina 2</h1>
		<h1>Hola <?php echo $nombre; ?></h1>
		<a href="cerrar_sesion.php">Cerrar</a>
	</p>

</body>
</html>

