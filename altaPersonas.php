<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
    
    include("conexion.php");

    $nom_apel = $_POST['nomyape'];
    $email = $_POST['email'];
    $direc = $_POST['direccion'];
    $fec_nac = $_POST['fecha_nac'];
    $telefono = $_POST['telefono'];
    $tipo_usu = $_POST['tipoUsuario'];
    $contra = $_POST['password'];
    

    $vSQL = "insert into usuario (nombre_apellido, email, direccion, telefono, fecha_nacimiento, tipo_usuario, pass)
    values ('$nom_apel', '$email', '$direc', '$telefono','$fec_nac', '$tipo_usu', '$contra')";

    mysqli_query($link,$vSQL) or die(mysqli_error($link));
    $ultimo_id = mysqli_insert_id($link);

    ?>
        <script type="text/javascript">
            var id = '<?php echo $ultimo_id; ?>';
            window.alert("Usuario agregado correctamente con el legajo Nº " + id);
            window.location.href = "altaAlumnos.php";
        </script>
    <?php

    mysqli_close($link);
?>