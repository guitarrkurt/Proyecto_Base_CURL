<?php
	//Ejecutamos el script conexion
	require("conexion.php");
	//Creamos un enunciado de query, seleccionando los campos de nuestra tabla
	$query = "SELECT id, nombre, direccion, telefono, correo, estrellas FROM hotel";
	//Hacemos la consulta
	$resultado = $mysqli->query($query);
?>
<html>
	<head>
		<title> Gerente </title>
  	  	<!-- Menú -->
  	  	<table border="3" width="50%">
  		<tr>
  			<td align="center"><a href="index.php">Inicio</a></td>
  			<td align="center"><a href="turista.php">Turista</a></td>
  			<td align="center"><a href="gerente.php">Gerente</a></td>
  		</tr>
  		</table>
  		<!-- EOF -->
	</head>
	
	<body>
		<!-- Contenido -->
		<h1><center>Página del Gerente</center></h1>
  		<!-- EOF -->

  		<!-- Agregar Nuevo Usuario -->
      <div align="left">
      <a href="agregar.php">Agregar</a>
      </div>

   		<!-- EOF -->
   		<br> </br>
   		<!-- Mostramos una consulta general de todos los usuarios-->
   		<table border = 3 width = 80% >
   			<!-- Encabezado de nuestra tabla -->
   			<thead>
   				<!-- columnas tabla -->
   				<td><center><b>Nombre</b></center></td>
   				<td><center><b>Direcci&oacute;n</b></center></td>
   				<td><center><b>Telefono</b></center></td>
   				<td><center><b>Correo</b></center></td>
   				<td><center><b>Estrellas</b></center></td>
   				<!-- EOF -->
   				<!-- Agregamos campos Actualizar y Eliminar -->
   				<td><center><b></b></center></td>
   		   		<td><center><b></b></center></td>
   			</thead>

   			<!-- Cuerpo de nuestra tabla -->
   			<tbody>
   				<?php while ($row = $resultado->fetch_assoc()){ ?>
   				<tr>
   					<td>
   						<?php echo $row["nombre"];?>
   					</td>
   				   	<td>
   						<?php echo $row["direccion"];?>
   					</td>
   				   	<td>
   						<?php echo $row["telefono"];?>
   					</td>
   				   	<td>
   						<?php echo $row["correo"];?>
   					</td>
   				  	<td>
   						<?php echo $row["estrellas"];?>
   					</td>
   					<td>
   						<a href="actualizar.php?id=<?php echo $row["id"]; ?>">Actualizar</a>
   					</td>
   				  	<td>
   						<a href="baja.php?id=<?php echo $row["id"]; ?>">Baja</a>
   					</td>
   				</tr>
   				<?php } ?>	
   			</tbody>	
   		</table>
  		<!-- EOF -->
	</body>
</html>





























