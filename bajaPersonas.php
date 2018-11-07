<!DOCTYPE html>
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

		$leg = $_POST['legajo'];

		$vSQL = "select * from usuario where legajo = '$leg'";

		$vResultado = mysqli_query($link, $vSQL);

		if(mysqli_num_rows($vResultado)==0){

			echo'<script type="text/javascript">
                alert("Usuario Incorrecto. Ingrese un legajo existente");
                </script>';

			header("Location:menuABMAlumnos.php");

		}
		else{

			$vSQL = "delete from usuario where legajo = '$leg'";

			mysqli_query($link, $vSQL);

			echo'<script type="text/javascript">
                alert("Usuario eliminado correctamente");
				</script>';
				
			header("Location: MenuAdministrador.php");



		}

		mysqli_free_result($vResultado);

		mysqli_close($link);


?>
</body>
</html>