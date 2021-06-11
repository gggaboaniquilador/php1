<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="images/tools.ico">
	<title>Uso de Formularios-Ejemplo</title>
	<script type="text/javascript" src="validaciones.js">		
	</script>	
	</head>
	<body>
		<h2 align='center'>Verificación de Usuarios</h2>
		<hr>
		<h3 align="center">Por favor, ingrese sus datos</h3>
		<form method='get' action='verifica.php' onsubmit="return revisa()">
			<table align="center">
				<tr>
					<td align="right">Usuario:</td>
					<td><input type='text' name='usuario' id='usuario' placeholder="Escriba su usuario" maxlength="50" size="50" onblur="return novacio(this)"></td>
				</tr>
				<tr>
					<td>Contraseña:</td>
					<td><input type='password' name='clave' id='clave' placeholder="Escriba su contraseña" maxlength="50" size="50" onblur="return novacio(this)"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<p>
						<input type='submit' name='enviar' value='Enviar'>
						<input type='reset' name='limpiar' value='Limpiar'>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>