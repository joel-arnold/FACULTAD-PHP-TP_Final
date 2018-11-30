<?php
  session_start();

  if((!isset($_SESSION['tipoUsuario'])) || !($_SESSION['tipoUsuario'] == "Alumno")){
    header("Location: noLogueado.php");
    exit();
  }
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
    include("conexion.php");

    $legajo = $_SESSION['legajo'];
    $materia = $_POST['materia'];

    

    $vSQL = "insert into inscripciones (nota,legajo_alumno,id_materia) values ('0','$legajo','$materia')";

    mysqli_query($link, $vSQL) or die(mysqli_error($link));

    echo'<script type="text/javascript">
            alert("Inscripción correcta");
            window.location.href = "inscripcionMaterias.php";
            </script>';
    
        mysqli_close($link);

?>