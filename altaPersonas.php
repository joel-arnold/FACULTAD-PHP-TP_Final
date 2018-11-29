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

    $vSQL = "SELECT * FROM usuario WHERE nombre_apellido = '$nom_apel'";
    $vResultado = mysqli_query($link,$vSQL) or die(mysqli_error($link));
    $total_registros = mysqli_num_rows($vResultado);

    if($total_registros == 0){
        $vSQL = "insert into usuario (nombre_apellido, email, direccion, telefono, fecha_nacimiento, tipo_usuario, pass)
        values ('$nom_apel', '$email', '$direc', '$telefono','$fec_nac', '$tipo_usu', '$contra')";

        mysqli_query($link,$vSQL) or die(mysqli_error($link));
        $ultimo_id = mysqli_insert_id($link);

        ?>
            <script type="text/javascript">
                var id = '<?php echo $ultimo_id; ?>';
                window.alert("Usuario agregado correctamente con el legajo Nº " + id);
                window.location.href = "menuAdministrador.php";
            </script>
        <?php
    }
    else{
        $persona = mysqli_fetch_array($vResultado);
        ?>
            <script type="text/javascript">
                var legajo = '<?php echo $persona['legajo']; ?>';
                window.alert("La persona ya está ingresada con el legajo Nº " + legajo + ". Si quiere modificar sus datos, dirijase al menú de modificación.");
                window.location.href = "menuAdministrador.php";
            </script>
        <?php
    }
    

    mysqli_close($link);
?>