<?php
  session_start();

  if((!isset($_SESSION['tipoUsuario'])) || !($_SESSION['tipoUsuario'] == "Administrador")){
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

    <title>Menú Administrador</title>

   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

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
        <h2 class="text-uppercase mb-0">Menú Administrador</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li>
                <h4>ALUMNOS</h4>
                <li><a href="altaAlumnos.php"><h5 class="text-white">Alta</h5></a></li>
                <li><a href="bajaAlumnos.php"><h5 class="text-white">Baja</h5></a></li>
                <li><a href="modificacionAlumnos.php"><h5 class="text-white">Modificación</h5></a></li>
                <li><a href="listadoAlumnos.php"><h5 class="text-white">Listado</h5></a></li>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li>
                <h4>DOCENTES</h4>
                <li><a href="altaDocentes.php"><h5 class="text-white">Alta</h5></a></li>
                <li><a href="bajaDocentes.php"><h5 class="text-white">Baja</h5></a></li>
                <li><a href="modificacionDocentes.php"><h5 class="text-white">Modificación</h5></a></li>
                <li><a href="listadoDocentes.php"><h5 class="text-white">Listado</h5></a></li>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <br /><br />
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

</body>

</html>