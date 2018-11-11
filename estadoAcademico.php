<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Menú ABM Alumnos</title>

    
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
    include("conexion.php");
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
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="perfil.html">
                                    
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
                        $nombre = $_SESSION['nombre'];
                        $fecha=date("d-m-Y");
                    ?>
                    <h2>ESTADO ACADEMICO</h2>
                    <hr class="star-light">
                    <p class="recordatorio">Estado del alumno <?php echo $nombre ?> al <?php echo $fecha ?>.</p>
                                    
                    <section class="porfolio" id="alta">
                                <div class="container">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Materia</th>
                                            <th scope="col">Nota</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $nombre = $_SESSION['nombre'];
                                                                                            
                                                $vSQL = "SELECT * FROM inscripciones WHERE alumno='$nombre' ";
                                            
                                                $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));

                                                $cantResultados = mysqli_num_rows($vResultado);

                                                             for($i=1;$i<=$cantResultados;$i++){
                                                                 $fila = mysqli_fetch_array($vResultado);
                                                                 ?>
                                                                    <tr>
                                                                    <th scope="row"><?php echo $fila['id_inscripcion'] ?></th>
                                                                    <td><?php echo $fila['alumno'] ?></td>
                                                                    <td>
                                                                        <?php echo if($fila['id_inscripcion'] == 0){
                                                                            echo "Aún no calificado."
                                                                        }
                                                                        else{
                                                                            echo $fila['id_inscripcion'];
                                                                        } ?>
                                                                    </td>
                                                                    </tr>
                                                                 <?php
                                                             }
                                                
                                                mysqli_close($link);
                                            ?>
                                        </tbody>
                                        </table>
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