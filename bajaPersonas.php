<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Baja Personas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        include("conexion.php");

        $vLegajo = $_POST['legajo'];

		$vSQL = "select * from usuario where legajo = '$vLegajo'";

		$vResultado = mysqli_query($link, $vSQL);

		if(mysqli_num_rows($vResultado)==0){

			echo("Usuario inexistente <br>");

			echo("Recargar pagina"); // poner redireccion a la misma pagina o a la anterior

		}
		else{

			$vSQL = "delete from usuario where legajo = '$vLegajo'";

			mysqli_query($link, $vSQL);

			echo("El usuario fue borrado <br>");

			echo("Volver a inicio"); //poner hipervinculo que vaya al inicio



		}

		mysqli_free_result($vResultado);

		mysqli_close($link);







    ?>
</body>
</html>