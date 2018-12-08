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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Asignación de materias</title>

    
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
    <?php include("encabezado.php"); ?>
    <?php
        include("conexion.php");
        $docenteElegido = $_POST['docente'];
        echo $docenteElegido;
        $_SESSION['docenteElegido'] = $docenteElegido;
        $consultita = "SELECT * FROM usuario WHERE legajo = $docenteElegido";
        $resultadito = mysqli_query($link,$consultita) or die(mysqli_error($link));
        $fila = mysqli_fetch_array($resultadito);
?>
    <header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h2>ASIGNACION DE DOCENTES A MATERIAS</h2>
        <hr class="star-light">
            <div class="container">
                <div class="formAltaAlumnos">
                    <form class="form-horizontal" role="form" action="asignacionMateria.php" method="POST" name="formalta">
                        <div class="form-group">
                            <label for="materia" class="label-sm-2">Elija la materia que va a asignar al docente <?php echo $fila['nombre_apellido']; ?></label>
                            <div class="input-sm-5">
                            <select class="form-control" name="materia" id="materia">        
                                    <?php
                                        include('conexion.php');
                                        $vSQL = "SELECT * FROM materia WHERE NOT legajo_docente = $docenteElegido";
                                        
                                        $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));
                                    
                                        $cantResultados = mysqli_num_rows($vResultado);

                                        if($cantResultados == 0){
                                            ?> <option disabled="disabled" selected> <?php echo "Ya tiene asignada todas" ?> </option> <?php
                                        }
                                        else{
                                            for($i=1;$i<=$cantResultados;$i++){
                                                $fila = mysqli_fetch_array($vResultado);
                                                ?> <option value= "<?php echo $fila['id_materia']?>"> <?php echo $fila['nombre_materia']; ?> </option> <?php
                                            }
                                        }
                                    ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="boton-sm-offset-2">
                                
                            <input type="submit"  class="btn btn-default" value="Asignar" <?php if($cantResultados == 0) echo "disabled"; ?>>
                            <a class="btn btn-secondary volver" href="asignarMaterias.php">Volver</a>
                            
                            </div>
                            <br>
                        </div>
                    </form>
            </div>
    </div>
    <br /><br /><br />
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