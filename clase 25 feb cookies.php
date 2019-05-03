<?php 
//	$_REQUEST
//		-$_POST,$_GET,$_COOKIE
	if (isset($_COOKIE['contador'])) {
		setcookie('contador',$_COOKIE['contador']+1,time()+5);
		$mensaje="Contador de visitas: " . $_COOKIE['contador'];
	}else {
		setcookie('contador',1,time()+10);
		$mensaje="Bienvenido a la pagina";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jugando con las cookies</title>
	<meta charset="utf-8">
</head>
<body>
	<p>
		<h1><?php echo $mensaje; ?></h1>
	</p>

</body>
</html>

