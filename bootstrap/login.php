<html>
  <head>
  	<title>Login</title>
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
  	<h1><center>Login</center></h1>
  	<!-- Inicio Form -->
	<form name="login" method="post" action="evaluarLogin.php">
			<table width="19%">
				<tr>
					<td><b>Correo</b></td>
					<td><input type="text" name="correo" size="25" /></td>
				</tr>
				<tr>
					<td><b>Contraseña</b></td>
					<td><input type="password" name="password" size="25" /></td>
				</tr>
				<!-- Boton enviar -->
				<tr>
					<td colspan="2"><center><input type="submit" name="login" value="Login" /></center></td>
				</tr>
			</table>
		</form>



  </body>
</html>