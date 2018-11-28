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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITULO DE LA PAGINA</title>

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
                  </div>
                </div>
              </nav>
              <header class="masthead bg-primary text-white text-center">
                    
                <div class="container">

                   <?php
                   if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == "Docente"){
                        $fecha=date("d-m-Y");
                    ?>
                    <h2>ESTADO ACADEMICO</h2>
                    <hr class="star-light">
                    <p class="recordatorio">Listado de Comisiones para el docente<?php 
                    echo $_SESSION['nombre']; ?> 
                    al <?php echo $fecha ?>.</p>
                                    
                    <section class="porfolio" id="alta">
                        <div class="container">

                            <?php
                                $legajo = $_SESSION['legajo'];

                                $vSQL = "Select * from comision where legajo_docente ='$legajo'";
                                
                                $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));
                                $cant_filas = mysqli_num_rows($vResultado);

                                if(!$cant_filas == 0){
                                    $regPorPagina = 3;

                                    if(!isset($_GET["pagina"])){
                                        $pagina = 1;
                                        $inicio = 0;		
                                    }
                                    else{
                                        $pagina = $_GET["pagina"];
                                        $inicio = ($pagina - 1) * $regPorPagina;
                                    }
                                    
                                    $cantDePag = ceil($cant_filas / $regPorPagina);
                                    
                                    $consultaLimitada = "SELECT * FROM comision WHERE legajo_docente='$legajo' LIMIT ".$inicio.",".$regPorPagina;
                                    $resultado_limitado = mysqli_query($link,$consultaLimitada);
                                    $cant_resultados_limitados = mysqli_num_rows($resultado_limitado);
                                                
                                    ?>
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Comision</th>
                                            <th scope="col">Plan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    while ($fila = mysqli_fetch_array($resultado_limitado)){
                                            ?>
                                            <tr>
                                            <th scope="row"><?php echo $fila['id_comision']; ?></th>
                                            <td><?php echo $fila['desc_comision']; ?></td>
                                            <td><?php echo $fila['anio_espec'];  ?></td>
                                            </tr>
                                            <?php
                                        }
                                        mysqli_free_result($resultado_limitado);
                                    }
                                else{
                                    echo "El docente no pertenece a ninguna comision";
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
                        if(!$cant_filas == 0){
                            if($cantDePag == 1){
                                echo "Estas son todas las comisiones del docente.";
                            }
                            else{
                                for($i=1;$i<=$cantDePag;$i++){
                                    if($i == $pagina){
                                        echo "<li class='page-item'><a class='page-link active'>Página ".$i." </a> </li>  ";
                                    }
                                    else{
                                        ?><li class="page-item"><a class="page-link" href="listadoComisiones.php?<?php echo "pagina=".$i ?>">Página <?php echo $i ?></a></li>
                                        <?php
                                    }
                                }
                            }
                        }
                        ?>
                        
                        </ul>
                        <div class="text-right">               
                            <a class="btn btn-secondary" href="menuDocente.php">Volver</a>
                        </div>
                        
                        </div>
                        
                </section>

                <?php
                }
            else{
                ?>
                <div class="container">
                <h2>El tipo de usuario actual no tiene permiso para acceder a esta sección.</h2>
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </div>
                <?php
                }
            ?>

        </div>
        </header>

<?php include("pieDePagina.php"); ?>
</body>

</html>