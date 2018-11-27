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
    <div class="menu">
        <br />
        <br />
        <h2>Menú Alumnos</h2>
        <br />
        <br />
        <a href="inscripcionMaterias.php">Inscripción a materias</a>
        <br />
        <br />
        <a href="estadoAcademico.php">Estado académico</a>
        <br /><br /><br /><br /><br /><br /><br /><br /><br />
    </div>
    </div>
  </header>
  <?php include("pieDePagina.php"); ?>
</body>
</html>