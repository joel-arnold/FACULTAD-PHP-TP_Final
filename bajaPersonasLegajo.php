	<?php
		session_start();

        include("conexion.php");

		$leg = $_POST['legajo'];

		$vSQL = "select * from usuario where legajo = '$leg'";

		$vResultado = mysqli_query($link, $vSQL);
		 
		$fila = mysqli_fetch_array($vResultado);

		if(mysqli_num_rows($vResultado)==0){
			?>
			    <script type="text/javascript">
				window.alert("Legajo inexistente. Ingrese otro.");
				window.location.href =
				<?php
                    if($_SESSION['trabajandoSobre'] == "alumno"){
                        echo '"bajaAlumnos.php"';
                    }
                    else{
                        echo '"bajaDocentes.php"';
                    }
                ?>;
				</script>
			<?php				
		}	
		else{
			$vSQL = "delete from usuario where legajo = '$leg'";
			mysqli_query($link, $vSQL);
			?>
				<script type="text/javascript">
				window.alert("Usuario eliminado correctamente");
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
		}

		mysqli_free_result($vResultado);
		mysqli_close($link);
?>