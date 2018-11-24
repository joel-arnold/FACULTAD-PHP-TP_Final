<?php session_start(); 

    include("conexion.php");
    
    $usuario = $_POST['legajo'];
    $contrasena = $_POST['contrasena'];

    $vSQL = "select * from usuario where legajo = '$usuario'and pass = '$contrasena'";

    $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));

    $fila = mysqli_fetch_array($vResultado);

    if(mysqli_num_rows($vResultado)==0){

        echo'<script type="text/javascript">
                alert("Usuario o Contraseña Incorrecta");
                window.location.href = "iniciarSesion.php";
                </script>';
    }
    else{
        $_SESSION['nombre'] = $fila['nombre_apellido'];
        $_SESSION['legajo'] = $usuario;
        $_SESSION['tipoUsuario'] = $fila['tipo_usuario'];
    }
    
    if($fila['tipo_usuario'] == "Administrador"){
         
           header("Location: menuAdministrador.php");
    }
    else if($fila['tipo_usuario'] == "Alumno"){
           header("Location: menuAlumno.php");           
    }

    else if($fila['tipo_usuario'] == "Docente"){
           header("Location: menuDocente.php");
    }
      

        mysqli_free_result($vResultado);
		mysqli_close($link);

?>