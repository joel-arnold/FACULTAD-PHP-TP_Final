<?php
	session_start();

	include("conexion.php");

	$leg = $_SESSION['legajoAEliminar'];

	$vSQL = "select * from usuario where legajo = '$leg'";

	$vResultado = mysqli_query($link, $vSQL);
		
	$fila = mysqli_fetch_array($vResultado);
    ?>
    <script type="text/javascript">
        <?php
        $consultaBaja = "delete from usuario where legajo = '$leg'";
        mysqli_query($link, $consultaBaja);
        ?>
        window.alert("Usuario eliminado correctamente.");
        window.location.href = 
        <?php
            if($_SESSION['trabajandoSobre'] == "alumno"){
                echo '"bajaAlumnos.php"';
            }
            if($_SESSION['trabajandoSobre'] == "docente"){
                echo '"bajaDocentes.php"';
            }
        ?>;
    </script>
    <?php
	mysqli_free_result($vResultado);
	mysqli_close($link);
?>