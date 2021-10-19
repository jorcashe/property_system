<html> 
  <head> 
  <title>Crear Usuario</title> 
  </head> 
  <body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "1234", "datos_maestros") or
			  die("problemas como la conexion");
			  
	mysqli_query($conexion, "INSERT INTO usuarios(id, usuario, password) VALUES
							('NULL','$_REQUEST[usuario]','$_REQUEST[password]')")
							or die("Problemas en el Select".mysqli_error($conexion));
	mysqli_close($conexion);
	
  //echo "Registro Guardado correctamente";
 //echo "El nombre ingresado es:"; 
  //echo $_REQUEST['nombre']; 
  ?>
</body> 
<center>
	<h1>Usuario Creado correctamente.</h1>
	<a href="index.php">Iniciar Sesion</a>
	</center>
</html>