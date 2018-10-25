<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alta Personas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        include("conexion.php");

        $nom_apel = $_POST['nom_apel'];
        $email = $_POST['mail'];
        $direc = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fecha_nac = $_POST['fec_nac'];
        $tipo_usu = $_POST['tipo_usuario'];

        $vSQL = "insert into usuario (nombre y apellido, email, direccion, telefono, fecha_nacimiento, tipo_usuario")
        values ('$nom_apel', '$email', '$direc', '$telefono','$fecha_nac', '$tipo_usu');

        mysqli_query($link,$vSQL) or die(mysqli_error($link));

        echo("Usuario registrado con exito");
        echo();//poner hipervinculo para volver atras o redireccionar a pagina principal

        mysqli_close($link);



    ?>
</body>
</html>