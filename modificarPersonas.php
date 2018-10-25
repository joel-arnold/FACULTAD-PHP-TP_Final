<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modificar Personas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        include("conexion.php");

        $legajo = $_POST['legajo'];

        $vSQL = "select * from usuario where legajo = '$legajo'";

        $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));

        $fila = mysqli_fetch_array($vResultado);

        if(mysqli_num_rows($vResultado)== 0){

            echo("Legajo inexistente <br>");

            echo("Recargar pagina"); //poner hipervinculo para recargar pagina


        }
        else{
            <form action="modifPerson.php" method ="post" name="formularioModificar">





            </form>

        }



    ?>
</body>
</html>