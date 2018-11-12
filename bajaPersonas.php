
	<?php
        include("conexion.php");

		$leg = $_POST['legajo'];

		$vSQL = "select * from usuario where legajo = '$leg'";

		$vResultado = mysqli_query($link, $vSQL);
		 
		$fila = mysqli_fetch_array($vResultado);

		if(mysqli_num_rows($vResultado)==0){

			echo'<script type="text/javascript">
                window.alert("Usuario Incorrecto. Ingrese un legajo existente");
				</script>';
				
			if($fila['tipo_usuario'] == "Alumno" ){
			header("Location:menuABMAlumnos.php");

			}
			else if($fila['tipo_usuario'] == "Docente"){

				header("Location:menuABMDocentes.php");

			}
		}	
		else{

			$vSQL = "delete from usuario where legajo = '$leg'";

			mysqli_query($link, $vSQL);

			echo'<script type="text/javascript">
				window.alert("Usuario eliminado correctamente");
				window.location.href = "menuAdministrador.php";
				</script>';
				
			



		}

		mysqli_free_result($vResultado);

		mysqli_close($link);


?>
