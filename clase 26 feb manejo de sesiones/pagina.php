<?php 
//	$_REQUEST
//		-$_POST,$_GET,$_COOKIE
	session_start();
	$nombre='';
	if (!isset($_SESSION['nombre'])) {
		$_SESSION['nombre']='omar';
		$nombre=$_SESSION['nombre'];
	}else{
		$nombre=$_SESSION['nombre'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Página de inicio</title>
	<meta charset="utf-8">
</head>
<body>
	<p>
		<h1>Pagina de inicio</h1>
		<h1>Hola <?php echo $nombre; ?></h1>
		<a href="pagina2.php">Página 2 </a>
	</p>

</body>
</html>

