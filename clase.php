<?php 
	function saludo(){
		echo "hola <br>";
	}
	
	function suma($num1, $num2){
		$resultado=$num1*$num2;
		return $resultado;
	}
	saludo();
	
	echo "La suma es " . suma(5,5) ;

	//count(),round()
	//Funciones de cadenas
	//substr()
	echo "<br>" . substr("Sopa de Macaco", 8,14);
	echo "<br>" . strlen("hola hola");
	echo "<br>" . strlen(trim('hola hola'));
	echo "<br>" . htmlspecialchars("<h1> hola </h1>");
	echo "<br>" . strpos("hola","1");
	echo "<br>" . round(3.1416,2);
?>

 