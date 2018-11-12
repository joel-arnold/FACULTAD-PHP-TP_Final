<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cierre de sesión</title>
</head>

<body>
<?php

    session_start();
        if(!isset($_SESSION['legajo'])){
         echo "<script>alert('No hay sesion iniciada');</script>";
        }
        else{
    
            session_destroy();
            header("Location:index.php");
        }

    //$_SESSION['nombre'] = null;
    //$_SESSION['legajo'] = null;
    //$_SESSION['email'] = null;
    //$_SESSION['direccion'] = null;
    //$_SESSION['telefono'] = null;
    //$_SESSION['fechaNac'] = null;
    //$_SESSION['tipoUsuario'] = null;
    //$_SESSION['contraseña'] = null;
    //$_SESSION['materia']= null;
?>
</body>

</html>