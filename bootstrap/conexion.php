<!-- conexion --> 

<?php
	//Declaramos las variables
	$server = "localhost";
	$user = "root";
	$passwoord = "root";
	$database = "bootstrap";
	//Hacemos la conexion
	$mysqli = new mysqli($server, $user, $passwoord, $database);
	//Checamos que se haga la conexion correctamente
	if(mysqli_connect_errno()){
		echo "Fallo de Conexion";
		exit();
	}else{
		//echo "si se pudo";
	}
?>