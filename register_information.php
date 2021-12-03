<html>
    <head>
        <title>Registro Bienes</title>
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
	<center><h3>Registro de Bienes</h3></center>
    <body>
        
      <form name="register_information.php" method="post" action="save_form_register.php" accept-charset="UTF-8" onSubmit="return_validaciones();">
	  <center><table border=1 width="60%">
        <thead>
            <tbody>
				<tr>
                    <td>
                        Tipo de Bienes: <select name="tipo_bienes">
                        <option value=''>Seleccionar</option>
                        <?php
                                
                        ?>				
                            </select>
                    </td>
                </tr>
              <tr>
                    <td>
                    # de Inventario:<input type="integer" id="#_inventario" name="#_inventario"> Marca: <input type="text" id="marca" name="marca" size="7">  Modelo: <input type="text" id="modelo" name="modelo" size="10">
                    </td>
              </tr>
                <tr>
                    <td>
                        Service TAG: <input type="text" id="service_tag" name="service_tag" size="15"> Ubicación Registro: <input type="text" id="ubi_registro" name="ubi_registro" size="15"> Responsable: <input type="text" id="responsable" name="responsable" size="15">
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