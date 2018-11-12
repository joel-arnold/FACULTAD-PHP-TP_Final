<!DOCTYPE html>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Estado Académico</title>

    
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
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="menuAlumno.php">
                                    
                                    <?php  
                                        $legajo = $_SESSION['legajo']; 
                                        $usuario = $_SESSION['nombre'];
                                        echo("$usuario");  
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
                        $fecha=date("d-m-Y");
                    ?>
                    <h2>ESTADO ACADEMICO</h2>
                    <hr class="star-light">
                    <p class="recordatorio">Estado del alumno <?php 
                    echo $usuario ?> 
                    al <?php echo $fecha ?>.</p>
                                    
                    <section class="porfolio" id="alta">
                                <div class="container">

                                    <?php
                                        $vSQL = "SELECT * FROM inscripciones WHERE legajo_alumno='$legajo' ";
                                        $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));
                                        $total_registros = mysqli_num_rows($vResultado);

                                        if(!$total_registros == 0){
                                            $regPorPagina = 3;

                                            if(!isset($_GET["pagina"])){
                                                $pagina = 1;
                                                $inicio = 0;		
                                            }
                                            else{
                                                $pagina = $_GET["pagina"];
                                                $inicio = ($pagina - 1) * $regPorPagina;
                                            }
                                            
                                            $cantDePag = ceil($total_registros / $regPorPagina);
                                            
                                            $consultaLimitada = "SELECT * FROM inscripciones i inner join materia m on m.id_materia = i.id_materia  WHERE legajo_alumno='$legajo' LIMIT ".$inicio.",".$regPorPagina;
                                            $resultado_limitado = mysqli_query($link,$consultaLimitada);
                                            $cant_resultados_limitados = mysqli_num_rows($resultado_limitado);
                                                        
                                            ?>
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
                                            while ($fila = mysqli_fetch_array($resultado_limitado)){
                                                    ?>
                                                    <tr>
                                                    <th scope="row"><?php echo $fila['id_inscripcion'] ?></th>
                                                    <td><?php echo $fila['nombre_materia'] ?></td>
                                                    <td>
                                                        <?php if($fila['nota'] == 0){
                                                            echo "Aún no calificado.";
                                                        }
                                                        else{
                                                            echo $fila['nota'];
                                                        } ?>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                }
                                                mysqli_free_result($resultado_limitado);
                                            }
                                        else{
                                            echo "El alumno no se inscribió a ninguna materia aún.";
                                        }
                                        mysqli_free_result($vResultado);
                                        mysqli_close($link);
                                            ?>
                                        </tbody>
                                        </table>
                                </div>
                                
                                <div class="paginacion">
                                    <ul class="pagination justify-content-center">
                                <?php 
                                if(!$total_registros == 0){
                                    if($cantDePag == 1){
                                        echo "Estos son todas las inscripciones del alumno.";
                                    }
                                    else{
                                        for($i=1;$i<=$cantDePag;$i++){
                                            if($i == $pagina){
                                                echo "<li class='page-item'><a class='page-link active'>Página ".$i." </a> </li>  ";
                                            }
                                            else{
                                                ?><li class="page-item"><a class="page-link" href="estadoAcademico.php?<?php echo "pagina=".$i ?>">Página <?php echo $i ?></a></li>
                                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>
                                </ul>
                                <div class="text-right">               
                                    <a class="btn btn-secondary" href="menuAlumno.php">Volver</a>
                                </div>
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
    
    
</body>

</html>