<?php
    //Hacemos la conexion
    require("conexion.php");
    //Checamos si busco por el formulario y dio en el boton BUSCAR (metodo POST)
    $nombre = $_POST["nombre"];

    if($nombre)
    {
      //Tiene algo osea es verdadero
      $query = "SELECT id, nombre, direccion, telefono, correo, estrellas FROM hotel WHERE nombre='$nombre'";
       $resultado = $mysqli->query($query);
    }else{
      //No tiene nada no le han metido nada al formulario
      //Enunciado de consulta
      $query = "SELECT id, nombre, direccion, telefono, correo, estrellas FROM hotel";
      //Hacemos la consulta
      $resultado = $mysqli->query($query);
    }

?>
<html>
	<head>
		<title>Turista</title>
  	  	<!-- Menú -->
      <table border="3" width="50%">
  		<tr>
  			<td align="center"><a href="index.php">Inicio</a></td>
  			<td align="center"><a href="turista.php">Turista</a></td>
  			<td align="center"><a href="login.php">Login</a></td>
  		</tr>
  		</table>
  		<!-- EOF -->
	</head>
	
	<body>
		<h1><center>Página del Turista</center></h1>
    <!--Busqueda Individual -->
    <form name="modificar_hotel" method="POST" action="turista.php">
      <table width = "19%">
        <tr>
          <td><b>Busqueda Por Nombre</b></td>
          <td><input type="text" name="nombre" size="25" value="" /></td>
        </tr>
        <tr>
          <td colspan="2"><center><input type="submit" name="Buscar" value="Buscar" /></center></td>
        </tr>

      </table>
    <!--Mostramos la tabla-->
    <!--La cargamos en otro archivo para que no se amontone-->
    <?php require("turistaMostrarTabla.php") ?>
	</body>
</html>
