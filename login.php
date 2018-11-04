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
    $_SESSION['Nombre'] = $fila['nombre y apellido'];  
    
    
    if($fila['tipo_usuario'] == "Administrador"){

           header("Location: menuAdministrador.html");
            
            
    }
        else if($fila['tipo_usuario'] == "Alumno"){
           header("Location: menuAlumno.html");
            
           
        }
        else if($fila['tipo_usuario'] == "Docente"){
           header("Location: menuDocente.html");
            
           
        }
        else if($fila['tipo_usuario'] == "Director"){
            header("Location: menuDirector.html");            
            
        }

        mysqli_free_result($vResultado);
		mysqli_close($link);

?>
</body>
</html>