<?php
	session_start(); //Se arranca la sesión o continúa la misma
	if (!(array_key_exists("id_sesion", $_SESSION)) || ($_SESSION["id_sesion"]!=session_id())) //Verifica si esas claves de array existen en SESSION
	{
		echo "<h1>No ha iniciado sesión...</h1><br>";
		}
	else
	{
	$datos=$_SESSION['datos']; //Carga una variable con los datos del usuario
	$id_sesion=$_SESSION["id_sesion"]; //Carga una variable con el ID de la sesión
?>
<!DOCTYPE html>  
<html>
<head>
	<title>Usuarios Registrados-Página Principal</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1 align='center'>Bienvenido(a). Su ID de sesión es: <?= session_id(); ?></h1>
	<hr>
	<center><table width="50%" border="1" align="center" bordercolor='blue'>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Dirección</th> 			
			<th>Sexo</th>
			<th>Pasatiempos</th>
			<th>Ciudades</th>
			<th>Usuario</th>
			<th>Password</th>
		</tr>
		<?php			 		
		echo "<center><tr>";
		echo "<td>".$datos[0]."</td>";
		echo "<td>".$datos[1]."</td>";
		echo "<td>".$datos[2]."</td>";
		echo "<td>".$datos[3]."</td>";
		echo "<td>".$datos[4]."</td>";
		echo "<td>".$datos[5]."</td>";
		echo "<td>".$datos[6]."</td>";
		echo "<td>".$datos[7]."</td>";
		echo "<td>".$datos[8]."</td>";
		echo "</tr></center>";
		?>
	</table></center>
	<p>
	<div id='enlace' align="center">
		<a href="logout.php">Cerrar Sesión</a>
	</div>
</body>
</html>
<?php
}
?>