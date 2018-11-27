<?php
  session_start();

  if(!$_SESSION['tipoUsuario'] == "Administrador"){
    header("Location: noLogueado.php");
    exit();
  }
?>

<!DOCTYPE html>

<html lang="es">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modificación de alumnos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">



    <!-- SEPARACION -->

    <?php include("encabezado.php"); ?>

    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h2 class="font-weight-light mb-0">MODIFICACION DE ALUMNOS</h2>
        <hr class="star-light">
        <form class="col-md-6 form-horizontal" role="form" action="menuABMAlumnos.php#modificar" method="POST" name="formModif">
          <div class="form-group">
              <label for="inputLegajoModifica" class="label-sm-2">Legajo del alumno que desea buscar:</label>
              <div class="input-sm-5">
                  <input type="text" class="form-control" id="inputLegajoModifica" name="legajo" placeholder="Legajo" value="<?php if(!empty($_POST['legajo'])) echo $_POST['legajo']; ?>" />
              </div>
          </div>
          <div class="form-group">
              <div class="boton-sm-offset-2">
                  <button type="submit" class="btn btn-default">Buscar</button>
                  <a class="btn btn-secondary volver" href="menuAdministrador.php">Volver</a>
              </div>
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

  </body>

</html>