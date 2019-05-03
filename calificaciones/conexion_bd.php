<?php 
	$bd ='calificaciones';
	$servidor='localhost';
	$usuario='root';
	$contrasena='';

	//creamos una conexión a la base de datos
	$conexion=mysqli_connect($servidor, $usuario,$contrasena,$bd);

	
	// checamos la conexion
	if(!$conexion){
		die('Conexion a la base de datos ' . $bd . ' falló: ' . mysqli_connect_error());
	}

	echo "Conectado a la base de datos $bd <br/>";


	function valida_usuario_bd($usuario, $contrasena, $conexion){
		$query = "select 1 as user_Valido from usuarios where usuario='$usuario' and contra=MD5('$contrasena') ";
		echo $query . '<br/>';
		$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
		if(mysqli_num_rows($resultado)==0){
			return false;
		}else{
			return true;
		}
	}


 ?>