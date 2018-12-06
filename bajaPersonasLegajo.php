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
			?>
			<script type="text/javascript">
				var respuesta = confirm("DATOS DEL USUARIO A ELIMINAR: \nLegajo: <?php echo $fila['legajo']; ?> \nNombre: <?php echo $fila['nombre_apellido']; ?> \nDomicilio: <?php echo $fila['direccion']; ?> \nCorreo electrónico: <?php echo $fila['email']; ?> \nN° de teléfono: <?php echo $fila['telefono']; ?>\n¿Confirma la eliminación?");
				if(respuesta !== true){
					<?php
					$consultaBaja = "delete from usuario where legajo = '$leg'";
					mysqli_query($link, $consultaBaja);
					?>
					window.location.href = 
					<?php
						if($_SESSION['trabajandoSobre'] == "alumno"){
							echo '"bajaAlumnos.php"';
						}
						if($_SESSION['trabajandoSobre'] == "docente"){
							echo '"bajaDocentes.php"';
						}
					?>;
				}
				else{
					window.location.href =
					<?php
						if($_SESSION['trabajandoSobre'] == "alumno"){
							echo '"bajaAlumnos.php"';
						}
						if($_SESSION['trabajandoSobre'] == "docente"){
							echo '"bajaDocentes.php"';
						}
					?>;
				}
			</script>
			<?php
		}
		mysqli_free_result($vResultado);
		mysqli_close($link);
?>