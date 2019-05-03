<?php 
	$eso=1;
	$altura=1;
	if(isset($_GET['eso'])){
		$eso=$_GET['eso'];
	}
	if(isset($_GET['altura'])){
		$altura =$_GET['altura'];
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formulario </title>
 	<meta charset="utf-8">
 </head>
 <body>
 		<form method="get">
 			<p><input type="number"  name="eso" placeholder="Teclea tu peso" required></p>
 			<p><input type="number" name="altura" placeholder="eclea tu altura" required></p>
 			<p><input type="submit" name="" value="Enviar"></p>
 		</form>
 		<div>
 			<h1>
 				<?php 
 					if($eso!=1 && $altura!=1 ){ //si la variable que definimos arriba tiene valor
 						$eso=$eso*1000;
 						$res=$eso/($altura*$altura);
 						if ($res<18.5) {
 							echo "Hola su peso está debajo de 18.5 Por debajo del peso";
 						}elseif ($res>=18.5 && $res<=24.9) {
 							echo "Hola su peso está entre 18.5 y 24.9 Saludable";

 						}elseif ($res>25 && $res<=29.9) {
 							echo "Hola su peso está entre 25 y 29.9 con sobreeso";

 						}elseif ($res>30 && $res<=39.9) {
 							echo "Hola su peso está entre 25 y 29.9 obeso";

 						}elseif ($res>=40) {
 							echo "Hola su peso está mas de 40 Obesidad extrema o de alto riesgo";

 						}


 						
 					}
 			 	?>
 			 </h1>
 		</div>

 </body>
 </html>