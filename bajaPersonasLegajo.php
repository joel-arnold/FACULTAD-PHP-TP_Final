
	<?php
        include("conexion.php");

		$leg = $_POST['legajo'];

		$vSQL = "select * from usuario where legajo = '$leg'";

		$vResultado = mysqli_query($link, $vSQL);
		 
		$fila = mysqli_fetch_array($vResultado);

		if(mysqli_num_rows($vResultado)==0){

			echo'<script type="text/javascript">
				window.alert("Legajo inexistente. Ingrese otro.");
				window.location.href = "bajaAlumnos.php";
				</script>';				
		}	
		else{
			$vSQL = "delete from usuario where legajo = '$leg'";
			mysqli_query($link, $vSQL);

			echo'<script type="text/javascript">
				window.alert("Usuario eliminado correctamente");
				window.location.href = "bajaAlumnos.php";
				</script>';
		}

		mysqli_free_result($vResultado);
		mysqli_close($link);
?>