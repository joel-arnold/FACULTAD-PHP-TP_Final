<?php
	
	include("conexion.php");

	$legajo = $_POST['legajo'];

	$vSQL = "select * from usuario where legajo = '$legajo'";

	$vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));

	$fila = mysqli_fetch_array($vResultado);

	if(mysqli_num_rows($vResultado)== 0){

		echo "<script>window.alert('Legajo inexistente');</script>";

		if($fila['tipo_usuario'] == "Alumno" ){

			header("Location:menuABMAlumnos.php");

		}
		else if($fila['tipo_usuario'] == "Docente"){

			header("Location:menuABMDocentes.php");

		}


	}
	else{
		
		
?>
		<form action="modifPerson.php" method ="post" name="formularioModificar">
			<div class="form-group">
                <label for="inputlegajo" class="label-sm-2">Legajo</label>
            	<div class="input-sm-5">
                <input type="text" class="form-control" id="inputlegajo" name="legajo"  value="<?php echo $legajo; ?>" />
				</div>
			</div>
			<div class="form-group">       
				<label for="inputnomyape" class="label-sm-2">Nombre y Apellido</label>
				<div class="input-sm-5">
					<input type="text" class="form-control" id="inputnomyape" name="nomyape" value=<?php echo($fila['nombre_apellido']) ?> />
				</div>
			</div>
			<div class="form-group">       
			<label for="inputemail" class="label-sm-2">Email </label>
				<div class="input-sm-5">
					<input type="text" class="form-control" id="inputemail" name="email" value=<?php echo($fila['email']) ?> />
				</div>
			</div>
			<div class="form-group">       
			<label for="inputdirec" class="label-sm-2">Dirección </label>
				<div class="input-sm-5">
					<input type="text" class="form-control" id="inputdirec" name="direccion" value=<?php echo($fila['direccion']) ?> />
				</div>
		</div>
		<div class="form-group">       
			<label for="inputTel" class="label-sm-2">Teléfono </label>
				<div class="input-sm-5">
					<input type="text" class="form-control" id="inputTel" name="telefono" value=<?php echo($fila['telefono']) ?> />
				</div>
		</div>
		<div class="form-group">       
			<label for="inputfecha" class="label-sm-2">Fecha de Nacimiento </label>
				<div class="input-sm-5">
					<input type="date" class="form-control" id="inputfecha" name="fecha_nac" value=<?php echo($fila['fecha_nacimiento']) ?> />
				</div>
		</div>
		<div class="form-group">       
				<label for="inputpass" class="label-sm-2">Contraseña Temporal</label>
					<div class="input-sm-5">
						<input type="password" class="form-control" id="inputpass" name="password" value=<?php echo($fila['pass']) ?> />
					</div>
		</div>

			<div class="form-group">
				<label for="tipoUSuario" class="label-sm-2">Tipo de usuario</label>
				<div class="input-sm-5">
				<input class="form-control" name="tipoUsuario" id="tipoUSuario" value=<?php echo($fila['tipo_usuario']) ?>/>
					</div>
			</div>
			<div class="form-group">
				<div class="boton-sm-offset-2">
												
				<button type="submit"  class="btn btn-default">Modificar</button>
											
				</div>
				<br>
										
		</div>
		
		</form>
<?php
	}
	mysqli_free_result($vResultado);

	mysqli_close($link);


?>