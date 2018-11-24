<?php
  session_start();

  if(!$_SESSION['tipoUsuario'] == "docente"){
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

    <title>Menu Docentes</title>

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
  
  <header class="masthead bg-primary text-black text-center">
      <div class="container">
        <h2 class="text-uppercase mb-0">Menú Docente</h2>
        <hr class="star-light black">
        <div class="menu">
          <a class="mb-3" href="altaNotas.php">
            <h2 >Carga de notas</h2>
          </a>
          <br />
          <a class="mb-3" href="listadoComisiones.php">
            <h2>Listado de comisiones</h2>
          </a>
        </div>
      </div>
      <br /><br /><br /><br />
    </header>

  <?php include("pieDePagina.php"); ?>

</body>
</html>