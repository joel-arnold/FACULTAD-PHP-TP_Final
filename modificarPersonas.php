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
    ?>
            <form action="modifPerson.php" method ="post" name="formularioModificar">

                <table width = "356">
                <tr>
					<td width="103">
						Legajo:
					</td>
					<td width="243">
						<input type="text" name="legajo" readonly="true" value="<?php 
							echo($fila['legajo']); ?>">
					</td>
				</tr>

				<tr>
					<td width="103">
						Nombre y Apellido:
					</td>
					<td width="243">
						<input type="text" name="nom_apel" value="<?php 
							echo($fila['nombre y apellido']); ?>">
					</td>
				</tr>

				<tr>
					<td width="103">
						Email:
					</td>
					<td width="243">
						<input type="text" name="mail" value="<?php 
							echo($fila['email']); ?>">
					</td>
				</tr>

				<tr>
					<td width="103">
						Direccion:
					</td>
					<td width="243">
						<input type="text" name="direccion" value="<?php 
							echo($fila['direccion']); ?>">
					</td>
				</tr>

				<tr>
					<td width="103">
						Telefono:
					</td>
					<td width="243">
						<input type="text" name="telefono" value="<?php 
							echo($fila['telefono']); ?>">
					</td>
				</tr>

				<tr>
					<td width="103">
						Fecha de Nacimiento:
					</td>
					<td width="243">
						<input type="text" name="fec_nac" value="<?php 
							$res = $fila['fecha_nacimiento'];?>">
					</td>
				</tr>
                <tr>
					<td width="103">
						Tipo de Usuario
					</td>
					<td width="243">
						<select>
                            <option name="tipo_usuario" value="Administrador">Administrador</option>
                            <option name="tipo_usuario" value="Alumno">Alumno</option>
                            <option name="tipo_usuario" value="Docente">Docente</option>
                        </select>
					</td>
				</tr>

				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Modificar">
					</td>

				</tr>
				</tr>


            
                </table>
            
            </form>
    <?php
        }
        mysqli_free_result($vResultado);

        mysqli_close($link);


    ?>
</body>
</html>