<?php
    session_start();
	
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	include("conexion.php");
	
        $solicitante = $mysqli->query("SELECT * FROM solicitante WHERE usuario = '$usuario' AND password = '$password'");
	$responsable = $mysqli->query("SELECT * FROM responsable WHERE usuario = '$usuario' AND password = '$password'");
        $financiero = $mysqli->query("SELECT * FROM financiero WHERE usuario = '$usuario' AND password = '$password'");
        $financierodos = $mysqli->query("SELECT * FROM financierodos WHERE usuario = '$usuario' AND password = '$password'");
            
        /* Ahora comprobamos que variable contiene al usuario*/
        if($resultado = mysqli_fetch_array($solicitante))
        /*if(mysql_num_rows($administradores) > 0) */
        {
            /* Si entra en este if significa que el que intenta acceder es un solicitante, 
            por lo tanto le creamos una sesión */
            session_start();

            $_SESSION['solicitante']="$usuario";

            /* Nos dirigimos al espacio de los alumnos usando header que nos 
            redireccionará a la página que le indiquemos */
            header("Location: menu_svs.php");

            /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
            seguir ejecutando código de este archivo */
            exit(); 
        }
        
        /* Ahora comprobamos que variable contiene al usuario*/
        if($resultado = mysqli_fetch_array($responsable))
        /*if(mysql_num_rows($administradores) > 0) */
        {
            /* Si entra en este if significa que el que intenta acceder es un alumno, 
            por lo tanto le creamos una sesión */
            session_start();

            $_SESSION['responsable']="$usuario";

            /* Nos dirigimos al espacio de los alumnos usando header que nos 
            redireccionará a la página que le indiquemos */
            header("Location: menu_svr.php");
//            header("Location: view_solicitudes_responsable.php");
//              header("Location: Reciclaje_codigo.php");

            /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
            seguir ejecutando código de este archivo */
            exit(); 
        }
        
         /* Ahora comprobamos que variable contiene al usuario*/
        if($resultado = mysqli_fetch_array($financiero))
        /*if(mysql_num_rows($administradores) > 0) */
        {
            /* Si entra en este if significa que el que intenta acceder es un alumno, 
            por lo tanto le creamos una sesión */
            session_start();

            $_SESSION['financiero']="$usuario";

            /* Nos dirigimos al espacio de los alumnos usando header que nos 
            redireccionará a la página que le indiquemos */
            header("Location: menu_svf.php");

            /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
            seguir ejecutando código de este archivo */
            exit(); 
        }
        
        
        /* Ahora comprobamos que variable contiene al usuario*/
        if($resultado = mysqli_fetch_array($financierodos))
        /*if(mysql_num_rows($secretarias) > 0) */
        {
            /* Si entra en este if significa que el que intenta acceder es un alumno, 
            por lo tanto le creamos una sesión */
            session_start();

            $_SESSION['financierodos']="$usuario";

            /* Nos dirigimos al espacio de los alumnos usando header que nos 
            redireccionará a la página que le indiquemos */
            header("Location: menu_svf2.php");

            /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
            seguir ejecutando código de este archivo */
            exit(); 
        }
        else 
        {
           /* Si no el usuario no se encuentra en ninguna de las tres tablas 
           imprime el siguiente mensaje */
           $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
           echo $mensajeaccesoincorrecto; 
        }
?>