<?php 
	$errores='';
	$valido=false;
	if (isset($_POST['submit'])){
		$nombre=$_POST['nombre'];
		$apellidoP=$_POST['apellidoP'];
		$apellidoM=$_POST['apellidoM'];
		$fecha=$_POST['fecha'];
		$sexo=$_POST['sexo'];
		$estado=$_POST['estado'];
		
		$error="";
		
		if (empty($nombre)) {
			$errores='Escriba un nombre xfa <br>';
		}

		if (empty($apellidoP)) {
			$errores .='Escriba un apellido xfa <br>';
		}

		if(empty($apellidoM)) {
			$errores .='Escriba un apellido  xfa <br>';
		}

		if (empty($fecha)) {
			$errores .='Escriba una fecha xfa <br>';
		}
		if (empty($sexo)) {
			$errores .='Seleccione su genero xfa <br>';
		}
		if (empty($estado)) {
			$errores .='Escriba una etsado xfa <br> <br>';
		}
		if (empty($errores)) {
			$valido=true;
			$nombre= htmlspecialchars_decode(trim($nombre));
			$apellidoP= htmlspecialchars_decode(trim($apellidoP));
			$apellidoM= htmlspecialchars_decode(trim($apellidoM));
			$fecha= htmlspecialchars_decode(trim($fecha));


			$nombre= strtoupper($nombre);
			$apellidoP= strtoupper($apellidoP);
			$apellidoM= strtoupper($apellidoM);
			$estado= strtoupper($estado);
			//$fecha= htmlspecialchars_decode(trim($fecha));
			//strtoupper($string)	
			$nombre = str_replace("Ñ", "X", $nombre);
			$apellidoP = str_replace("Ñ", "X", $apellidoP);
			$apellidoM = str_replace("Ñ", "X", $apellidoM);

			$nombres="";
			$curp="";

			$curp=substr($apellidoP, 0,2);
			$curp.=substr($apellidoM, 0,1);
			$curp.=substr($nombre, 0,1);
			echo "Nombre $curp ";
			$arFecha=explode("-", $fecha);	
			$curp.= substr($arFecha[0],2,4);
			$curp.= $arFecha[1];
			$curp.= $arFecha[2];
			echo "fecha $curp ";
			$curp.= $sexo;
			echo "sexo $curp";

			$flag=1;
			$conson=["B","C","D","F","G","H","J","K","L",
						"M","N","Ñ","P","Q","R","S","T","V",
						"W","X","Y","Z"];
			for ($i=0; $i <22 ; $i++) { 

				$flag2=strpos($estado,$conson[$i] );
				if ($flag2>$flag) {
					$flag=$flag2;
				}
			}
			$curp.=substr($estado,0,1);
			$curp.=substr($estado,$flag,$flag-1);

			$flag=99;
			for ($i=0; $i <22 ; $i++) { 
				$flag2=strpos($apellidoP,$conson[$i] );
				if ($flag2<$flag && $flag2!=0) {
					$flag=$flag2;
				}
			}
			$curp.=substr($apellidoP,$flag,$flag-1);
			
			$flag=99;
			for ($i=0; $i <22 ; $i++) { 
				$flag2=strpos($apellidoM,$conson[$i] );
				if ($flag2<$flag && $flag2!=0) {
					$flag=$flag2;
				}
			}
			$curp.=substr($apellidoM,$flag,$flag);


			$flag=99;
			for ($i=0; $i <22 ; $i++) { 
				$flag2=strpos($nombre,$conson[$i] );
				if ($flag2<$flag && $flag2!=0) {
					$flag=$flag2;
				}
			}
			$curp.=substr($nombre,$flag,$flag);

			$nRand= rand(0, 99);
			if ($nRand>=0 && $nRand<=9) {
				$curp.="0" . $nRand;
			}else{
				$curp.=$nRand;
			}

		}
	}
	
	require 'index.view.php';
 ?>

