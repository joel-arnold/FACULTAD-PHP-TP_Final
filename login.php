<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php

session_start();

?>

<?php
    include("conexion.php");
    


    $usuario = $_POST['legajo'];
    $password = $_POST['password'];

    $vSQL = "select * from usuario where legajo = '$usuario'and pass = '$password'";

    $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));

    $fila = mysqli_fetch_array($vResultado);

    if(mysqli_num_rows($vResultado)==0){

        echo'<script type="text/javascript">
                alert("Usuario o Contraseña Incorrecta");
                </script>';
    }
     
    
    
    if($fila['tipo_usuario'] == "Administrador"){
        $_SESSION['nombre'] = $fila['nombre_apellido']; 
           header("Location: menuAdministrador.php");
            
            
    }
        else if($fila['tipo_usuario'] == "Alumno"){
            $_SESSION['nombre'] = $fila['nombre_apellido']; 
           header("Location: menuAlumno.php");
            
           
        }
        else if($fila['tipo_usuario'] == "Docente"){
            $_SESSION['nombre'] = $fila['nombre_apellido']; 
           header("Location: menuDocente.php");
            
           
        }
        else if($fila['tipo_usuario'] == "Director"){
            $_SESSION['nombre'] = $fila['nombre_apellido']; 
            header("Location: menuDirector.php");            
            
        }

        mysqli_free_result($vResultado);
		mysqli_close($link);

?>
</body>
</html>