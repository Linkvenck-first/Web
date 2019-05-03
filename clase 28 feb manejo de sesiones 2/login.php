<?php 
//	$_REQUEST
//		-$_POST,$_GET,$_COOKIE
	$valido=false;
	
	if (isset($_POST['aceptar'])) {
		$usuario=$_POST['usuario'];
		$contra=$_POST['contra'];
		session_start();
		$_SESSION['usuario']=$usuario;
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Acceso</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="contendor">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<input type="text" class="form_ctrl" name="usuario" placeholder="usuario" required>
			<input type="password" class="form_ctrl" name="contra" placeholder="Contraseña" required>
			<input type="submit" class="btn" name="aceptar" value="Ingresar">
			<?php 
				if (!$valido && isset($_POST['aceptar'])){
					echo "<p> usuario y/o Contraseña no valido</p>";
				}
			?>
		</form>
	</div>
</body>
</html>

