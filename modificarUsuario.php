<?php
  session_start();

  if(!($_SESSION['tipoUsuario'] == "Administrador")){
    header("Location: noLogueado.php");
    exit();
  }
?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
        
        include("conexion.php");

        $legajo = $_SESSION['legajoAModificar'];
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

        ?>
          <script type="text/javascript">
          window.alert("Usuario modificado con éxito.");
          window.location.href = 
          <?php
            if($_SESSION['trabajandoSobre'] == "alumno"){
                echo '"modificarAlumno.php"';
            }
            if($_SESSION['trabajandoSobre'] == "docente"){
                echo '"modificarDocente.php"';
            }
        ?>;

        mysqli_close($link);

?>
</body>
</html>