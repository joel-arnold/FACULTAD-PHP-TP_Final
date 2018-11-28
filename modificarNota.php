<?php
  session_start();

  if(!($_SESSION['tipoUsuario'] == "Docente")){
    header("Location: noLogueado.php");
    exit();
  }
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
        include("conexion.php");

        $inscripcion = $_POST['id_insc'];
        $nota = $_POST['nota'];

        $vSql = "update inscripciones set nota = '$nota' where id_inscripcion='$inscripcion'";

        mysqli_query($link, $vSql) or die(mysqli_error($link));
        ?>
                <script type="text/javascript">
                alert("Nota Modificada con éxito");
                window.location.replace("listarAlum_materias.php?materia=<?php echo $_SESSION['materiaElegida']; ?>");
                </script>
        <?php

        $query = "select * from inscripciones i inner join materia m on m.id_materia = i.id_materia where id_inscripcion = '$inscripcion'";
        $result = mysqli_query($link, $query);
        $fila = mysqli_fetch_array($result);
        $id_materia = $fila['id_materia'];

        mysqli_close($link);
?>