<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

        $vSQL = "update usuario set nombre_apellido = '$nom_apel',
            email = '$email', direccion = '$direc', telefono = '$telefono', fecha_nacimiento = '$fec_nac',
            pass = '$pass', tipo_usuario = '$tipo_usu' where legajo = '$legajo'";

        mysqli_query($link, $vSQL) or die(mysqli_error($link));

        echo '<script type="text/javascript">
                window.alert("Alumno modificado con éxito");
                window.location.href = "modificacionAlumnos.php";
                </script>';

        mysqli_close($link);

?>
</body>
</html>