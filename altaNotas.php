<?php
  session_start();

  if(!($_SESSION['tipoUsuario'] == "Docente")){
    header("Location: noLogueado.php");
    exit();
  }
?>

<!DOCTYPE html>

<html lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ingreso de notas</title>

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

    <link href="estilo.css" rel="stylesheet" type="text/css" />

</head>
<body id="page-top">
<?php
    include("conexion.php");
    ?>

<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="index.php">Sistema Académico</a>
    <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" 
    type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" 
    aria-expanded="false" aria-label="Toggle navigation">
    Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="menuDocente.php"> 
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
    <div class="container">

        <?php
        if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == "Docente"){    
        ?>
        <h2>CALIFICACION DE ALUMNOS</h2>
        <hr class="star-light">

        <div class="altaNotas">
          <form name="cargaNotas" action="listarAlum_materias.php" method="GET">
          <?php
          $vsql = "select * from materia where legajo_docente = ".$_SESSION['legajo'];
            
          $resultado = mysqli_query($link, $vsql)or die(mysqli_error($link));
        
          $cant_filas = mysqli_num_rows($resultado);
        ?><div class="form-group">
            <label for="selector" class="label-sm-2">Seleccione una materia:</label>
            <div class="input-sm-5">
            <select class="form-control" name="materia"  id="materia">
              <?php
              
              for($i=0;$i<$cant_filas;$i++){
                $materias = mysqli_fetch_array($resultado);
              ?>
                <option id="selector" value= "<?php echo $materias['id_materia']?>"><?php echo $materias['nombre_materia']; ?></option>
              <?php
              }
              ?>   
            </select> 
            
            </div>
            <div class="boton-sm-offset-2">
            <button type="submit" class="btn btn-default">Listar</button>
          
            <a class="btn btn-secondary volver" href="menuDocente.php">Volver</a>
            </div>
            
            
            </div>
          </form>
          

        </div>
        <?php
        }else{
        ?>
            <div class="container">
            <h2>El tipo de usuario actual no tiene permiso para acceder a esta sección.</h2>
            </div>
            <br /><br /><br /><br /><br /><br />
            <?php
            }
        ?>

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