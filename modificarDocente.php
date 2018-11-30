<?php
  session_start();

  if((!isset($_SESSION['tipoUsuario'])) || !($_SESSION['tipoUsuario'] == "Administrador")){
    header("Location: noLogueado.php");
    exit();
  }
  else{
    $_SESSION['trabajandoSobre'] = "docente";
  }
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Modificar docente</title>

    
   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"/>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet"/>

    <link href="estilo.css" rel="stylesheet" type="text/css" />

    

</head>
<body id="page-top">

    <?php
    include("encabezado.php");
    include("conexion.php");

    if(!isset($_POST['legajo'])){
        $identificador = $_POST['nombreElegido'];
        $vSQL = "select * from usuario where nombre_apellido = '$identificador'";
    }
    else{
        $identificador = $_POST['legajo'];
        $vSQL = "select * from usuario where legajo = '$identificador'";
    }

    $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));

	$fila = mysqli_fetch_array($vResultado);

	$legajo = $fila['legajo'];
    $nombre = $fila['nombre_apellido'];
    $mail = $fila['email'];
    $direccion = $fila['direccion'];
    $telefono = $fila['telefono'];
    $fechaNac = $fila['fecha_nacimiento'];
    $contrasena = $fila['pass'];
    $tipoUsuario = $fila['tipo_usuario'];
    $_SESSION['legajoAModificar'] = $fila['legajo'];

    ?>

    <header class="masthead bg-primary text-white text-center">
        <div class="container">
        <h2>MODIFICAR DOCENTE</h2>
            <hr class="star-light">
            <form class="form-horizontal" role="form" action="modificarUsuario.php" onsubmit="return validacionModificacion()" method="POST" name="formalta">
            <div class="form-group">
                <label for="legajo" class="label-sm-2">Legajo</label>
                    <div class="input-sm-5">
                        <input type="text" class="form-control" id="inputLegajo" name="legajo" disabled="disabled" value="<?php echo $legajo ?>" />
                    </div>
                </div>
                <div class="form-group">
                <label for="inputnomyape" class="label-sm-2">Nombre y Apellido (*)</label>
                    <div class="input-sm-5">
                        <input type="text" class="form-control" id="inputnomyape" name="nomyape" value="<?php echo $nombre ?>" />
                    </div>
                </div>
                <div class="form-group">       
                <label for="inputemail" class="label-sm-2">Email (*)</label>
                    <div class="input-sm-5">
                        <input type="text" disabled="disabled" style="display:none;" name="email" />
                        <input type="text" autocomplete="nope" class="form-control" id="inputemail" name="email" value="<?php echo $mail ?>" />
                    </div>
                </div>
                <div class="form-group">       
                <label for="inputdirec" class="label-sm-2">Dirección (*)</label>
                    <div class="input-sm-5">
                        <input type="text" class="form-control" id="inputdirec" name="direccion" value="<?php echo $direccion ?>" />
                    </div>
                </div>
                <div class="form-group">       
                    <label for="inputTel" class="label-sm-2">Teléfono (*)</label>
                        <div class="input-sm-5">
                            <input type="text" disabled="disabled" style="display:none;" name="telefono" />
                            <input type="text" class="form-control" id="inputTel" name="telefono" value="<?php echo $telefono ?>" />
                        </div>
                </div>
                <div class="form-group">       
                    <label for="inputfecha" class="label-sm-2">Fecha de Nacimiento (*)</label>
                        <div class="input-sm-5">
                            <input type="date" class="form-control" id="inputfecha" name="fecha_nac" value="<?php echo $fechaNac ?>" />
                        </div>
                </div>
                <div class="form-group">       
                        <label for="inputpass" class="label-sm-2">Contraseña (*)</label>
                            <div class="input-sm-5">
                                <input type="text" disabled="disabled" style="display:none;" name="password" />
                                <input type="password" class="form-control" id="inputpass" name="password" value="<?php echo $contrasena ?>" />
                            </div>
                </div>
                <div class="form-group">
                    <label for="tipoUSuario" class="label-sm-2">Tipo de usuario (*)</label>
                    <div class="input-sm-5">
                    <select class="form-control" name="tipoUsuario" id="tipoUSuario">
                            <option>Docente</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="boton-sm-offset-2">        
                    <input type="submit" class="btn btn-default" value="Modificar docente" />
                    <a class="btn btn-secondary volver" href="modificacionDocentes.php">Volver</a>
                    </div>
                    <br>
                </div>
            </form>                           
        </div>
    </header>

    <?php include("pieDePagina.php"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

    <script src="validacionModificacion.js"></script>

</body>

</html>