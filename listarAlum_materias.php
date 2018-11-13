<?php session_start(); ?>
<!DOCTYPE html>

<html lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Alta Notas</title>

    
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
            $user = $_SESSION['nombre']; 
            echo("$user");  
            ?>
          </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cerrarSesion.php">
            Cerrar Sesión
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header class="masthead bg-primary text-white text-center">
<div class="container">
<section class="bg-primary text-white mb-0"> 
<?php


    $materia = $_GET['materia'];
    
    $alumnos = "select * from inscripciones i inner join usuario u on u.legajo = i.legajo_alumno where id_materia = '$materia'";
    
    
    $resultado = mysqli_query($link, $alumnos) or die(mysqli_error($link));
  
    if(mysqli_num_rows($resultado)==0){
        echo  "<script>alert('No hay alumnos inscriptos');</script>";
        
    }else{
         $consulta = "select nombre_materia from materia where id_materia='$materia'";
            $nombre_materia= mysqli_query($link, $consulta);
            $nombre = mysqli_fetch_array($nombre_materia);
            
            
    ?>
        
        <h2>Alta de Notas para la materia <?php echo $nombre['nombre_materia'];?></h2>
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

</section>
<section>
</section>
</header>



<?php
            
        }
        
    mysqli_free_result($resultado);
    mysqli_close($link);
?>
</body>
</html>       
