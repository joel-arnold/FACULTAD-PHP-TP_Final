<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modificar Personas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        
        include("conexion.php");

        $legajo = $_POST['legajo'];
        $nom_apel = $_POST['nomyape'];
        $email = $_POST['email'];
        $direc = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fec_nac = $_POST['fecha_nac'];
        $pass = $_POST['password'];
        $tipo_usu = $_POST['tipoUsuario'];

        $vSQL = "update usuario set  nombre_apellido = '$nom_apel',
            email = '$email', direccion = '$direc', telefono = '$telefono', fecha_nacimiento = '$fec_nac',
            pass = '$pass', tipo_usuario = '$tipo_usu' where legajo = '$legajo'";

        mysqli_query($link, $vSQL) or die(mysqli_error($link));

        echo'<script type="text/javascript">
                alert("Usuario Modificado con éxito");
                </script>';

        header("Location:menuAdministrador.php"); //poner hipervinculo para volver al inicio


        mysqli_close($link);





    ?>
</body>
</html>