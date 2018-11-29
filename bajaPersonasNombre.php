
	<?php
        include("conexion.php");

		$leg = $_POST['nombreElegido'];

		$vSQL = "select * from usuario where nombre_apellido = '$leg'";

		$vResultado = mysqli_query($link, $vSQL);
		 
		$fila = mysqli_fetch_array($vResultado);

		if(mysqli_num_rows($vResultado)==0){

			echo'<script type="text/javascript">
				window.alert("Usuario ya eliminado, elija otro o vuelva hacia atrás");
				window.location.href = "menuAdministrador.php";
				</script>';				
		}	
		else{
			$vSQL = "delete from usuario where nombre_apellido = '$leg'";
			mysqli_query($link, $vSQL);

			echo'<script type="text/javascript">
				window.alert("Usuario eliminado correctamente");
				window.location.href = "menuAdministrador.php";
				</script>';
		}

		mysqli_free_result($vResultado);
		mysqli_close($link);
?>