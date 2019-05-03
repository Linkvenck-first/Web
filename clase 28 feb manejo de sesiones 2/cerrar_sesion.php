<?php 
	require 'abre_sesion.php';
	$_SESSION=array();
	session_destroy();
	if (isset($_COOKIE[session_name()])) {
		# code...
		setcookie(session_name(),'',time()-42000,'/');
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cerrar sesion</title>
	<meta charset="utf-8">
</head>
<body>
	<p>
		<h1>Sesion Cerrada</h1>		
	</p>

</body>
</html>