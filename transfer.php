<html>
    <head>
        <title>Traslados de bienes</title>
            <meta charset="utf-8">
                <meta name="viewport" content="width=device-width",
                initial-scale=1, maximum-scale=1"/>
                <link rel="stylesheet" href="estilos.css">
                <script language="javascript" src="js/"></script>
    </head>
  <body>
	<img src="img/" alt="" width="300" height="100">
		<nav>
                    <ul>
                        <li><a href="">Inicio</a></li>
                            <li><a href="#">Bienes</a>
                                    <ul>
                                        <li><a href="register_information.php">Registro</a></li>
                                        <li><a href="modificar_sol.php">Modificar</a></li>
										<li><a href="#">Consulta</a></li>
										<li><a href="#">Eliminar</a></li>
                                    </ul>
                            </li>
							<li><a href="#">Movimientos</a>
                                    <ul>
                                        <li><a href="transfer.php">Traslado</a></li>
                                        <li><a href="refund.php">Reintegro</a></li>
										<li><a href="#">Tras. Masivo</a></li>
										<li><a href="#">Consulta</a></li>
                                    </ul>
                            </li>
                            <li><a href="sign_off.php">Cerrar Sesión</a>
                            </li>
                    </ul>
		</nav>
	<center><h3>Traslados de Bienes</h3></center>
    <body>
        
      <form name="transfer.php" method="post" action="save_form_transfer.php" accept-charset="UTF-8" onSubmit="return_validaciones();">
	  <center><table border=1 width="95%">
        <thead>
            <tbody>
			<center><h3>Origen</h3></center>
				<tr>
                    <td>
                        Responsable: <input type="text" id="responsable" name="responsable" size="30"> Nro cédula: <input type="integer" id="cedula" name="cedula" size="7">  Ubicación: <input type="text" id="ubicacion" name="ubicacion" size="7"> Centro de costo: <input type="integer" id="center_costes" name="center_costes" size="7"> Dependencia: <input type="text" id="dependencia" name="dependencia" size="15"> Email: <input type="text" id="email" name="email" size="15">
                    </td>
                </tr>
				<tr><br>
                    <td>
						<center><h3>Destino</h3></center>
					</tr>
					</td>
				<tr>
                    <td>
                        Responsable: <input type="text" id="responsable" name="responsable" size="30"> Nro cédula: <input type="integer" id="cedula" name="cedula" size="7">  Ubicación: <input type="text" id="ubicacion" name="ubicacion" size="7"> Centro de costo: <input type="integer" id="center_costes" name="center_costes" size="7"> Dependencia: <input type="text" id="dependencia" name="dependencia" size="15"> Email: <input type="text" id="email" name="email" size="15">
                    </td>
                </tr>
				<tr>
                    <td>
                        <center><h3>DATAGRID O CONTENEDOR</h3></center>
                    </td>
                </tr>
                <tr>
                    <td>
                    <center><br>
					<input type="submit" value="Guardar"> <input type="submit" value="Cancelar"></center>
                    </td>
                </tr>
                </tbody>
                </table>
                </center>
            </form>
        </body>
    </body>
</html>