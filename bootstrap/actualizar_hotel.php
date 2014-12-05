<?php
	//Hacemos la conexión
	require("conexion.php");
	//Recibimos los campos
	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$direccion = $_POST["direccion"];
	$telefono = $_POST["telefono"];
	$correo = $_POST["correo"];
	$estrellas = $_POST["estrellas"];

	//Hacemos el enunciado de consulta
	$query="UPDATE hotel SET nombre='$nombre', direccion='$direccion', telefono='$telefono', correo='$correo', estrellas='$estrellas' WHERE id='$id'";
	//Ejecutamos el query
	$resultado=$mysqli->query($query);

?>
<html>
	<head><head>
	<body>
		<center>	
			<?php 
				if($resultado>0){
				?>
				
				<h1>¡Usuario Modificado!</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="gerente.php">Regresar</a>    
			<a href="index.php">Ir Inicio</a>
			
		</center>
	</body>
</html>