<!DOCTYPE html>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Inscripción Alumnos</title>

    
   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

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
                        <!--<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="iniciarSesion.html">Iniciar Sesión</a>-->
                        <div class="btn-group">
                            <li class="nav-item mx-0 mx-lg-1">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="menuAlumno.php">
                                    
                                    <?php  
                                        $user = $_SESSION['nombre']; 
                                        echo("$user");  
                                    ?></a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cerrarSesion.php">Cerrar Sesion</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </nav>
              <header class="masthead bg-primary text-white text-center">
                    
                <div class="container">

                   <?php
                   if($_SESSION['tipoUsuario'] == "Alumno"){    
                   ?>
                   <h2>INSCRIBIRSE A UNA MATERIA</h2>
                   <hr class="star-light">
                   <p class="recordatorio">Formulario de inscripción a materias.</p>
                <!--<img class="img-atencion mb-5 d-block mx-auto" src="Atención.jpg" alt="atencion" id="atencion">-->
                   
                   <section class="porfolio" id="alta">
                            <div class="container">
                              <div class="formAltaAlumnos">
                                    <form class="form-horizontal" role="form" action="inscripcion.php" method="POST" name="formalta">
                                        <div class="form-group">
                                             <label for="inputnomyape" class="label-sm-2">Nombre del alumno</label>
                                            <div class="input-sm-5">
                                               <input type="text" disabled="disabled" class="form-control" id="inputnomyape" name="nomyape" placeholder="<?php echo $_SESSION['nombre']; ?>" />
                                             </div>
                                         </div>

                                         <div class="form-group">
                                                <label for="materia" class="label-sm-2">Materia</label>
                                                <div class="input-sm-5">
                                                <select class="form-control" name="materia" id="materia">
                                                        
                                                        <?php
                                                            include('conexion.php');
                                                            
                                                             $vSQL = "select * from materia";
                                                         
                                                             $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));
                                                         
                                                             $cantResultados = mysqli_num_rows($vResultado);

                                                             for($i=1;$i<=$cantResultados;$i++){
                                                                 $fila = mysqli_fetch_array($vResultado);
                                                                 ?> <option value= "<?php echo $fila['id_materia']?>"> <?php echo $fila['nombre_materia']; ?> </option> <?php
                                                             }
                                                            
                                                        ?>
                                                        
                                                </select>
                                                </div>
                                         </div>
                                         <div class="form-group">
                                              <div class="boton-sm-offset-2">
                                                  
                                                <input type="submit"  class="btn btn-default" value="Inscribirse">
                                                
                                              </div>
                                              <br>
                                           
                                        </div>
                                        </form>
                            </div>
                    </section>

                    <?php
                    }
                   else{
                    ?>
                    <div class="container">
                    <h2>El tipo de usuario actual no tiene permiso para acceder a esta sección.</h2>
                    </div>
                    <?php
                    }
                    ?>

                </div>
              </header>
    
    <script src="validacion.js"></script>
</body>

</html>