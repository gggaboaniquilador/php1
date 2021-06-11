<!DOCTYPE html>
<html>
<head>
	<title>Verificación de Usuario Registrado</title>
</head>
<body>
	<h2 align='center'>Verificación de Usuario Registrado</h2>
	<hr>	
 		<?php
 		$usuario=$_GET['usuario']; //Toma el valor del campo usuario enviado por GET
 		$clave=$_GET['clave']; //Toma el valor del campo clave
 		$existe=false;
 		$correcta=false;
 		$punteroarchivo=fopen("datos.txt","r"); //Abre el archivo de texto para lectura
 		while (!feof($punteroarchivo)) //Mientras no sea fin del archivo
 		{
 			$cadena=fgets($punteroarchivo); //Lee una línea del archivo
 			if(strlen($cadena)>1) //Si la línea tiene más de un carácter
 			{
	 			$datos=explode(",",$cadena); //La línea leída la convierte en un array usando la coma como separador de elementos
	 			if ($datos[7]===$usuario) //En el lugar 7 del array está el nombre de usuario
	 			{
	 				$existe = true;	 				
	 				if (substr($datos[8],0,8)===$clave) //La clave está en el lugar 8
	 				{	 				
		 				$correcta = true;		 				
		 				break;
		 			}
		 			else
		 				break;
		 		}
	 		}
 		}
		fclose($punteroarchivo); //Cierra el archivo de texto
		if (!$existe)
			echo '<script type="text/javascript">alert("Usuario no existe");</script>';
		else
			if (!$correcta)
				echo '<script type="text/javascript">alert("Clave errónea");</script>';
			else
				{
				echo "Ingreso exitoso!";
				session_start(); //Arranca la sesión del sitio
				$_SESSION["id_sesion"] = session_id(); //Agrega al array de sesión el ID de sesión
				$_SESSION['datos'] = $datos; //Agrega el array del usuario a la sesión para que exista en cada script del sitio
				header('Location: principal.php'); //Redirige hasta este archivo
				}
 		?>
</body>
</html>