<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		
		<center><h1>Nuevo Hotel</h1></center>
		
		<form name="nuevo_usuario" method="post" action="guarda_usuario.php">
			<table width="19%">
				<tr>
					<td><b>Nombre</b></td>
					<td><input type="text" name="nombre" size="25" /></td>
				</tr>
				<tr>
					<td><b>Direccion</b></td>
					<td><input type="text" name="direccion" size="25" /></td>
				</tr>
				<tr>
					<td><b>Telefono</b></td>
					<td><input type="value" name="telefono" size="25" /></td>
				</tr>
				<tr>
					<td><b>Correo</b></td>
					<td><input type="text" name="correo" size="25" /></td>
				</tr>
				<tr>
					<td><b>Password</b></td>
					<td><input type="password" name="password" size="25" /></td>
				</tr>

				<tr>
					<td><b>Estrellas</b></td>
					<td><input type="value" name="estrellas" size="25" /></td>
				</tr>
				<!-- Boton enviar -->
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>						