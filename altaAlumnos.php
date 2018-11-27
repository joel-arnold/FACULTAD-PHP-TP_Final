<?php
  session_start();

  if(!($_SESSION['tipoUsuario'] == "Administrador")){
    header("Location: noLogueado.php");
    exit();
  }
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Alta de alumnos</title>

    
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

    <?php include("encabezado.php"); ?>

    <header class="masthead bg-primary text-white text-center">
        <div class="container">
        <h2 class="font-weight-light mb-0">ALTA DE ALUMNOS</h2>
            <hr class="star-light">
            <form class="form-horizontal" role="form" action="altaPersonas.php" method="POST" name="formalta">
                <div class="form-group">
                <label for="inputnomyape" class="label-sm-2">Nombre y Apellido (*)</label>
                <div class="input-sm-5">
                    <input type="text" class="form-control" id="inputnomyape" name="nomyape" placeholder="Nombre y apellido" />
                </div>
                </div>
                    <div class="form-group">       
                    <label for="inputemail" class="label-sm-2">Email (*)</label>
                        <div class="input-sm-5">
                            <input type="text" disabled="disabled" style="display:none;" name="email" />
                            <input type="text" autocomplete="nope" class="form-control" id="inputemail" name="email" placeholder="Email" />
                        </div>
                    </div>
                <div class="form-group">       
                <label for="inputdirec" class="label-sm-2">Dirección (*)</label>
                    <div class="input-sm-5">
                        <input type="text" class="form-control" id="inputdirec" name="direccion" placeholder="Dirección" />
                    </div>
                </div>
                <div class="form-group">       
                    <label for="inputTel" class="label-sm-2">Teléfono (*)</label>
                        <div class="input-sm-5">
                            <input type="text" disabled="disabled" style="display:none;" name="telefono" />
                            <input type="text" class="form-control" id="inputTel" name="telefono" placeholder="Teléfono" />
                        </div>
                </div>
                <div class="form-group">       
                    <label for="inputfecha" class="label-sm-2">Fecha de Nacimiento (*)</label>
                        <div class="input-sm-5">
                            <input type="date" class="form-control" id="inputfecha" name="fecha_nac" placeholder="DD-MM-AAAA" />
                        </div>
                </div>
                <div class="form-group">       
                        <label for="inputpass" class="label-sm-2">Contraseña Temporal (*)</label>
                            <div class="input-sm-5">
                                <input type="text" disabled="disabled" style="display:none;" name="password" />
                                <input type="password" class="form-control" id="inputpass" name="password" placeholder="Asigne una contraseña " />
                            </div>
                </div>
                <div class="form-group">
                    <label for="tipoUSuario" class="label-sm-2">Tipo de usuario (*)</label>
                    <div class="input-sm-5">
                    <select class="form-control" name="tipoUsuario" id="tipoUSuario">
                            <option>Alumno</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="boton-sm-offset-2">        
                    <input type="button" class="btn btn-default" value="Agregar Alumno" onclick="validacion()" />
                    <a class="btn btn-secondary volver" href="menuAdministrador.php">Volver</a>
                    </div>
                    <br>
                </div>
            </form>                           
        </div>
    </header>

    <?php include("pieDePagina.php"); ?>

    <script src="validacion.js"></script>

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

</body>

</html>