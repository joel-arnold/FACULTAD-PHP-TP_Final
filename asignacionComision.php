<?php
  session_start();

  if((!isset($_SESSION['tipoUsuario'])) || !($_SESSION['tipoUsuario'] == "Administrador")){
    header("Location: noLogueado.php");
    exit();
  }
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
    include("conexion.php");

    $legajo = $_SESSION['docenteElegido'];
    $comision = $_POST['comision'];

    $vSQL = "UPDATE comision SET legajo_docente = $legajo WHERE id_comision = $comision";

mysqli_query($link, $vSQL) or die(mysqli_error($link));

    mysqli_query($link, $vSQL) or die(mysqli_error($link));

    echo'<script type="text/javascript">
            alert("Asignación correcta");
            window.location.href = "asignarComisiones.php";
            </script>';
        mysqli_close($link);
?>