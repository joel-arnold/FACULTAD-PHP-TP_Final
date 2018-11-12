<?php

    session_start();

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