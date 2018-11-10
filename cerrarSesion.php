<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cierre de sesión</title>
</head>

<body>
<?php

    session_start();

    $_SESSION['nombre'] = null;
    $_SESSION['legajo'] = null;
    $_SESSION['email'] = null;
    $_SESSION['direccion'] = null;
    $_SESSION['telefono'] = null;
    $_SESSION['fechaNac'] = null;
    $_SESSION['tipoUsuario'] = null;
    $_SESSION['contraseña'] = null;

    echo '<script type="text/javascript">
         window.location.href = "index.php";
         </script>';

?>
</body>

</html>