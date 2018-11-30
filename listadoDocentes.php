<?php
  session_start();

  if((!isset($_SESSION['tipoUsuario'])) || !($_SESSION['tipoUsuario'] == "Administrador")){
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

    <title>Listado de Docentes</title>

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

    <?php include("encabezado.php"); ?>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
    <div class="container">
            <h2>LISTADO DE DOCENTES</h2>
            <hr class="star-light">
                <div class="container">
                    <?php
                        include("conexion.php");
                        $vSQL = "SELECT * FROM usuario WHERE tipo_usuario = 'Docente'";
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
                            
                            $consultaLimitada = "SELECT * FROM usuario WHERE tipo_usuario = 'Docente' LIMIT ".$inicio.",".$regPorPagina;
                            $resultado_limitado = mysqli_query($link,$consultaLimitada);
                            $cant_resultados_limitados = mysqli_num_rows($resultado_limitado);
                                        
                            ?>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">Legajo</th>
                                    <th scope="col">Nombre y Apellido</th>
                                    <th scope="col">Correo electrónico</th>
                                    <th scope="col">Dirección</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Fecha de Nacimiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                            while ($fila = mysqli_fetch_array($resultado_limitado)){
                                    $fechaDeLaBD = $fila['fecha_nacimiento'];
                                    $fechaAcomodada = date("d-m-Y", strtotime($fechaDeLaBD));
                                    ?>
                                    <tr>
                                    <th scope="row"><?php echo $fila['legajo'] ?></th>
                                    <td><?php echo $fila['nombre_apellido'] ?></td>
                                    <td><?php echo $fila['email'] ?></td>
                                    <td><?php echo $fila['direccion'] ?></td>
                                    <td><?php echo $fila['telefono'] ?></td>
                                    <td><?php echo $fechaAcomodada ?></td>
                                    </tr>
                                    <?php
                                }
                                mysqli_free_result($resultado_limitado);
                            }
                        else{
                            echo "No hay docentes ingresados aún.";
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
                        echo "Estos son todos los docentes ingresados al momento.";
                    }
                    else{
                        for($i=1;$i<=$cantDePag;$i++){
                            if($i == $pagina){
                                echo "<li class='page-item'><a class='page-link active'>Página ".$i." </a> </li>  ";
                            }
                            else{
                                ?><li class="page-item"><a class="page-link" href="listadoDocentes.php?<?php echo "pagina=".$i ?>">Página <?php echo $i ?></a></li>
                                <?php
                            }
                        }
                    }
                }
                ?>
                </ul>
                <div class="text-right">               
                    <a class="btn btn-secondary" href="menuAdministrador.php">Volver</a>
                </div>
            </div>
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