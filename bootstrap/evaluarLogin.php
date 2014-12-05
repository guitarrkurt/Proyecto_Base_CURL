<?php
	//Obtenemos los campos del formulario
	$correo = $_POST["correo"];
	$password = $_POST["password"];


	//Conectamos a la DB
	require("conexion.php");
 	//Hacemos la sentencia de la consulta, el "and" evalua si el usuario instrodujo los datos correctamnte
 	$query = "SELECT id FROM hotel WHERE correo = '$correo' and password = '$password'";
 	//Hacemos la consulta
 	$resultado = $mysqli->query($query);
 	//Si nos devuelve más de cero filas es correcta la instrucción o los datos que metio el usuario
 	//Obtenemos las columnas
 	$row = $resultado->fetch_assoc();
?>

<html>
	<head>
		<title>Evaluar Login</title>
	</head>

	<body>
		<?php  	if($row){ 
 		echo "<script> alert (\"Bienvenido Seras Redireccionado al Formulario de Gerente\"); </script>"; 
		echo "<script language=Javascript> location.href=\"gerenteGerente.php\"; </script>"; 
		}else{
		?>
		<h1><center>Usuario o Password Incorrectos</h1></center>
		<a href="login.php">Regresar</a>
		<?php 
		}
		?>

	</body>
</html>