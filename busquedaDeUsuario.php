<?php
    include("conexion.php");

    $leg = $_GET['legajo'];

    $vSQL = "select * from usuario where legajo = '$leg'";

    $vResultado = mysqli_query($link, $vSQL);
     
    $fila = mysqli_fetch_array($vResultado);

    if(mysqli_num_rows($vResultado)==0){
        echo "Ese muñeco no existe";
        }
        else{
            echo $fila['nombre_apellido'];
        }
?>