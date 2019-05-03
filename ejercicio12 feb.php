<?php 
	$num=0;
	if(isset($_GET['num'])){
		$num=$_GET['num'];
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formulario </title>
 	<link rel="stylesheet" type="text/css" href="./estilo.css">
 	<meta charset="utf-8">
 </head>
 <body>
 		<form method="get">
 			<p><input type="text"  name="num" placeholder="Teclea numeros" required></p>
 			<p><input type="submit" name="" value="Enviar"></p>
 		</form>
 			<?php		
 				$sum=0; $med=0; $var=0; $stand=0;
				if ($num!="") {
					$arNum=explode(",", $num);
					echo "<p> $num</p><br>";
					print_r($arNum);
					for ($i=0; $i <count($arNum); $i++) { 
							$sum=$sum+$arNum[$i];
					}
					$med=$sum/count($arNum);
					for ($i=0; $i <count($arNum); $i++) { 
							$var=$var+  pow(($arNum[$i]-$med),2);
					}
					$var=$var/(count($arNum)-1);
					$stand=sqrt($var);
				}
				echo "<h2> Desviacion estandar</h2><h2> $stand </h2>";

			?>
 		</div>
 </body>
 </html>