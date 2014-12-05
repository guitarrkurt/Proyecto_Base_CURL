<?php
	require('conexion.php');
	//Se reciben los datos del formulario "agregar.php"
	//a través del metodo POST

	$nombre2 = $_POST['nombre'];
	$direccion2 = $_POST['direccion'];
	$telefono2 = $_POST['telefono'];
	$correo2 = $_POST['correo'];
	$password2 = $_POST['password'];
	$estrellas2 = $_POST['estrellas'];

	//Para insertar estos datos en la DB, tenemos que tener una sentencia de query
	$query = "INSERT INTO hotel (nombre, direccion, telefono, correo, estrellas, password) VALUES ('$nombre2', '$direccion2', '$telefono2', '$correo2', '$estrellas2', '$password')";

	//Ejecutamos
	$resultado = $mysqli->query($query);
	//Cuando se ejecuta una INSERT o ELIMINACION regresa 1 termino correctamente, y 0 si fallo
?>

<html>
	<head>
		<title>Guardar</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Usuario Registrado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="gerenteGerente.php">Regresar</a> <a href="indexGerente.php">Ir home</a>
			
		</center>
	</body>
</html>