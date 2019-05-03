<?php
	$fila=1;
	$columna=5;
	$arreglo[0]=array('*');
	$arreglo[1]=array('@','@',);
	$arreglo[2]=array('#','#','#');
	$arreglo[3]=array('#','#','#','#');
	$arreglo[4]=array('#','#','#','#','#');

	//$arreglo2=['#','#','#','#','#']
	
	$tabla="<table border=1>";
	for($i=0;$i<$columna;$i++){
		$tabla .= "<tr>";
		for ($j=0; $j <$fila ; $j++) { 
			$tabla .= "<td> " . $arreglo[$i][$j] . "</td>"; 
		}
		$fila++;
		$tabla .="</tr>";
	}
	$tabla .="</table>";
	echo $tabla;
?>