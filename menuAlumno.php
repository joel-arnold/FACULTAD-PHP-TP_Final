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
  <?php
   session_start();
  ?>

        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
                <div class="container">
                  <a class="navbar-brand js-scroll-trigger" href="index.php">Sistema Académico</a>
                  <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="menuAlumno.php">
                          <?php
                            if(isset($_SESSION['nombre'])){
                              echo $_SESSION['nombre'];
                            }
                            else{
                              echo "No logueado";
                            }
                          ?>
                        </a>
                      </li>
                      <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cerrarSesion.php">
                        <?php
                          if(!isset($_SESSION['tipoUsuario'])){
                            echo "Volver al incio";
                          }
                          else{
                            echo "Cerrar sesión";
                          }
                        ?>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        <header class="masthead bg-primary text-white text-center">
        <div class="header">
            <div class="container">
            <div class="menu">
                <br />
                <br />
              
              <?php
              if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == "Alumno"){
              ?>
                <h2>Menú Alumnos</h2>
                <br />
                <br />
                <a href="inscripcionMaterias.php">Inscripción a materias</a>
                <br />
                <br />
                <a href="estadoAcademico.php">Estado académico</a>
                <br />
                <br />
                <?php
              }
              else{
                ?><h2>El tipo de usuario actual no tiene permiso para acceder a esta sección.</h2>
                <?php
              }
              ?>
            </div>
            </div>
        </div>
        </header>
        <?php include("pieDePagina.php"); ?>
</body>
</html>