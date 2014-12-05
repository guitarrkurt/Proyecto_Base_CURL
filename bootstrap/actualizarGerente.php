<?php
	require("conexion.php");
	//Recibimos el id por metodo GET
	$id = $_GET['id'];
	//Hacemos nuestra consulta, buscamos el id que nos dan
	$query = "SELECT nombre, direccion, telefono, correo, estrellas, password FROM hotel WHERE id = '$id' ";
	//Ejecutamos la consulta
	$resultado = $mysqli->query($query);

	$row = $resultado->fetch_assoc();

?>

<html>
	<head>
		<title>Actualizar</title>
	</head>

	<body>
		<center><h1>Actualizar Hotel</h1></center>
		<form name="modificar_hotel" method="POST" action="actualizar_hotelGerente.php">
			<table width = "19%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id;?>">
					<td width="20"><b>Nombre</b></td>
					<td width="30"><input type="text" name="nombre" size="25" value="<?php echo $row["nombre"];?>" /></td>
				</tr>
				<tr>
					<td><b>Dirección</b></td>
					<td><input type="text" name="direccion" size="25" value="<?php echo $row['direccion']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Telefono</b></td>
					<td><input type="value" name="telefono" size="25" value="<?php echo $row['telefono']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Correo</b></td>
					<td><input type="text" name="correo" size="25" value="<?php echo $row['correo']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Password</b></td>
					<td><input type="text" name="password" size="25" value="<?php echo $row['password']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Estrellas</b></td>
					<td><input type="text" name="estrellas" size="25" value="<?php echo $row['estrellas']; ?>" /></td>
				</tr>
				<!-- Boton Enviar -->
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
	</body>
</html>