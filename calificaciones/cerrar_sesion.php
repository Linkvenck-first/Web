


<?php 
	require 'abre_sesion.php';
	$_SESSION=array();
	session_destroy();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cierre</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 	
 	
 </head>
 <body>
 	<p>
 		<h1>Session cerrada, hasta la próxima</h1>
 		<a href="login.php">Acceder</a>
 	</p>
 </body>
 </html>