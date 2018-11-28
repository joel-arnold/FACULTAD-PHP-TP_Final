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

    <title>Alta de Notas</title>

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

    <?php include("encabezado.php");
    include("conexion.php"); ?>

    <header class="masthead bg-primary text-white text-center">
    <div class="container">
    
    <?php


        $materia = $_GET['materia'];
        $_SESSION['materiaElegida'] = $materia;
        
        $alumnos = "select * from inscripciones i inner join usuario u on u.legajo = i.legajo_alumno where id_materia = '$materia'";
        
        
        $resultado = mysqli_query($link, $alumnos) or die(mysqli_error($link));
    
        if(mysqli_num_rows($resultado)==0){
            echo  "<script>
                    alert('No hay alumnos inscriptos');
                    window.location.replace('altaNotas.php');
                    </script>";
            
        }else{
            $consulta = "select nombre_materia from materia where id_materia='$materia'";
                $nombre_materia= mysqli_query($link, $consulta);
                $nombre = mysqli_fetch_array($nombre_materia);
                
                
        ?>
            
            <h2>Alta de notas para: <?php echo $nombre['nombre_materia'];?></h2>
                <hr class="star-light">
                <p class="recordatorio">Para los alumnos que no poseen notas cargadas, seleccionar nota y actualizar.</p>
            <table class="table notas">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Legajo</th>
                    <th scope="col">Alumno</th>
                    <th scope="col">Nota</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($fila = mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                        <td scope="row"><?php echo $fila['legajo_alumno'];
                        ?></td>
                        <td scope="row"><?php echo $fila['nombre_apellido'];
                        ?></td>
                        <?php if($fila['nota']==0){ ?>
                            <td>
                            <form action="modificarNota.php" method="post">
                                <div class="row justify-content-center">
                                                            
                                    <select class="form-control col-sm-2" name="nota"  id="nota">
                                        <?php for($i=1; $i<=10; $i++){?>
                                        <option><?php echo $i; ?></option>
                                        
                                        <?php
                                        }
                                        ?>   
                                    </select>&nbsp; &nbsp; &nbsp; 
                                    <input name="id_insc" type="hidden" value="<?php echo $fila['id_inscripcion'];?>" />
                                    <input type="submit" class ="btn btn-secondary col-sm-3" value="Actualizar"/>
                                </div>
                            </form>   
                                
                                
                            </td>
                        <?php } else{ ?>
                            <td>
                                <?php echo $fila['nota']; ?>
                            </td>
                        
                        <?php } ?>
                    </tr>
                    <?php } ?>    
                </tbody>
            </table>
            <div class="text-right">               
            <a class="btn btn-secondary" href="altaNotas.php">Volver</a>
            </div>
        </div>
    </header>

    <?php
                
            }
            
        mysqli_free_result($resultado);
        mysqli_close($link);
    ?>

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