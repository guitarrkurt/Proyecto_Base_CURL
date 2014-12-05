<?php
	//Conectamos a la DB
	require("conexion.php");
	//Pedimos el ID de esa Entidad, por metodo GET (no es POST porque no hay campos y SOLO ENVIAMOS EL ID EN GERENTE)
	$id=$_GET['id'];
	//Hacemos nuestro enunciado de consulta
	$query="DELETE FROM hotel WHERE id='$id'";
	//Ejecutamos el enunciado o query
	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Baja</title>
	</head>
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="gerenteGerente.php">Regresar</a>
			<a href="indexGerente.php">Ir Inicio</a>
			
		</center>
	</body>
</html>