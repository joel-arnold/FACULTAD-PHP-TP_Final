<?php
  session_start();

  if(!($_SESSION['tipoUsuario'] == "Alumno")){
    header("Location: noLogueado.php");
    exit();
  }
?>

<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

    <title>Menu Alumnos</title>

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
        <h2>MENU ALUMNOS</h2>
        <hr class="star-light black">
        <div>
        <br />
          <a class="mb-3" href="inscripcionMaterias.php">
            <h5 class="text-white">Inscripción a materias</h5>
          </a>
          <br />
          <a class="mb-3" href="estadoAcademico.php">
            <h5 class="text-white">Estado académico</h5>
          </a>
        </div>
      </div>
      <br /><br /><br /><br />
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