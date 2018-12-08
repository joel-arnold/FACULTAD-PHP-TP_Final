<?php
  session_start();

  if((!isset($_SESSION['tipoUsuario'])) || !($_SESSION['tipoUsuario'] == "Administrador")){
    header("Location: noLogueado.php");
    exit();
  }
  else{
    $_SESSION['trabajandoSobre'] = "docente";
  }
?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baja de Docentes</title>

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

    <!--<script src="validaBaja.js" type="text/javascript"></script>-->

</head>
<body id="page-top">

    <?php
        include("encabezado.php");
        include("conexion.php");
        $vSQL = "select * from usuario where tipo_usuario = 'Docente'";
        $vResultado = mysqli_query($link, $vSQL) or die(mysqli_error($link));
        $cant_filas = mysqli_num_rows($vResultado);    
    ?>

    <header class="masthead bg-primary text-white text-center">
        <h2>BAJA DE DOCENTES</h2>
            <hr class="star-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 formModifAlumnos">
                        <form class="form-horizontal" role="form" action="bajaPersonasLegajo.php" onsubmit="return aceptaBaja()" method="POST" name="formBajaLegajo">
                            <div class="form-group">
                                <label for="inputLegajoBaja" class="label-sm-2">Eliminación por legajo:</label>
                                <div class="input-sm-5">
                                    <input type="text" class="form-control" id="inputLegajoBaja" name="legajo" placeholder="Legajo"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="boton-sm-offset-2">
                                <button type="submit" class="btn btn-default" <?php if($cant_filas == 0) echo "disabled" ?>>Borrar</button>
                                <a class="btn btn-secondary volver" href="menuAdministrador.php">Volver</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 formModifAlumnos">
                        <form class="form-horizontal" role="form" action="bajaPersonasNombre.php" method="POST" onsubmit="return aceptaBaja()" name="formBajaNombre">
                            <div class="form-group">
                                <label for="inputNombreBaja" class="label-sm-2">Eliminación por nombre:</label>
                                <div class="input-sm-5">
                                    <select class="form-control" name="nombreElegido" id="inputNombreBaja">
                                            <?php
                                                if($cant_filas == 0){
                                                    ?> <option selected>No hay docentes cargados</option> <?php
                                                    }
                                                    else{
                                                        while ($fila = mysqli_fetch_array($vResultado)){
                                                            ?>
                                                            <option> <?php echo $fila['nombre_apellido']; ?> </option>
                                                            <?php
                                                        }
                                                        mysqli_free_result($vResultado);
                                                        mysqli_close($link);
                                                    }
                                            ?>                                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="boton-sm-offset-2">
                                <button type="submit" class="btn btn-default" <?php if($cant_filas == 0) echo "disabled" ?>>Borrar</button>
                                <a class="btn btn-secondary volver" href="menuAdministrador.php">Volver</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="txtHint">Acá van a ir los datos del usuario</div>
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

    <script type="text/javascript">
        function aceptaBaja(){
            var xhttp;
            var legajo = document.formBajaLegajo.inputLegajoBaja.value;
            
            if (legajo == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }

            if (legajo == "" || legajo == undefined) {
                window.alert("Tiene que ingresar algún legajo")
                return false;
            }

            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "busquedaDeUsuario.php?legajo="+legajo, true);
            xhttp.send();
            }
        }

        function showCustomer(str) {
           
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "getcustomer.php?q="+str, true);
            xhttp.send();
            }
    </script>


</body>

</html>