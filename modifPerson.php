<<!DOCTYPE html>
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
        $nom_apel = $_POST['nom_apel'];
        $email = $_POST['mail'];
        $direc = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fecha_nac = $_POST['fec_nac'];
        $tipo_usu = $_POST['tipo_usuario'];

        $vSQL = "update usuario set legajo = '$legajo', nombre y apellido = '$nom_apel',
            email = '$email', direccion = '$direc', telefono = '$telefono', fecha_nacimiento = '$fecha_nac',
            tipo_usuario = '$tipo_usu'";

        mysqli_query($link, $vSQL) or die(mysqli_error($link));

        echo("Usuario modificado correctaamente");

        echo("Volver al menu"); //poner hipervinculo para volver al inicio


        mysqli_close($link);





    ?>
</body>
</html>